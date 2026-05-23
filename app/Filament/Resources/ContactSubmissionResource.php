<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactSubmissionResource\Pages;
use App\Models\ContactSubmission;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactSubmissionResource extends Resource
{
    protected static ?string $model = ContactSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Contact Leads';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Submission Details')
                ->schema([
                    TextInput::make('name')->disabled()->columnSpan(1),
                    TextInput::make('email')->disabled()->columnSpan(1),
                    TextInput::make('phone')->disabled()->columnSpan(1),
                    TextInput::make('company')->disabled()->columnSpan(1),
                    TextInput::make('project_type')->label('Project Type')->disabled()->columnSpan(1),
                    TextInput::make('budget_range')->label('Budget Range')->disabled()->columnSpan(1),
                    Textarea::make('message')->disabled()->rows(5)->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Email Tracking')
                ->schema([
                    TextInput::make('autoreply_sent_at')
                        ->label('Autoreply Sent At')
                        ->disabled()
                        ->placeholder('Not sent yet')
                        ->columnSpan(1),
                    TextInput::make('email_opened_at')
                        ->label('Email First Opened')
                        ->disabled()
                        ->placeholder('Not opened yet')
                        ->columnSpan(1),
                    TextInput::make('email_open_count')
                        ->label('Open Count')
                        ->disabled()
                        ->columnSpan(1),
                ])
                ->columns(3),

            Section::make('Admin')
                ->schema([
                    Select::make('status')
                        ->options([
                            'new'         => 'New',
                            'in_progress' => 'In Progress',
                            'closed'      => 'Closed',
                            'spam'        => 'Spam',
                        ])
                        ->required()
                        ->columnSpan(1),
                    Textarea::make('admin_notes')
                        ->label('Admin Notes')
                        ->rows(4)
                        ->placeholder('Internal notes (not visible to the client)...')
                        ->columnSpan(2),
                ])
                ->columns(3),

            Section::make('Source / Meta')
                ->schema([
                    TextInput::make('ip_address')->label('IP Address')->disabled()->columnSpan(1),
                    TextInput::make('source_url')->label('Source URL')->disabled()->columnSpan(2),
                ])
                ->columns(3)
                ->collapsed(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('email')
                    ->searchable()
                    ->copyable()
                    ->color('gray'),

                TextColumn::make('project_type')
                    ->label('Project')
                    ->badge()
                    ->color('primary'),

                TextColumn::make('budget_range')
                    ->label('Budget')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match($state) {
                        'new'         => 'info',
                        'in_progress' => 'warning',
                        'closed'      => 'success',
                        'spam'        => 'danger',
                        default       => 'gray',
                    }),

                IconColumn::make('autoreply_sent_at')
                    ->label('Autoreply')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-clock')
                    ->trueColor('success')
                    ->falseColor('gray')
                    ->getStateUsing(fn($record): bool => !is_null($record->autoreply_sent_at)),

                IconColumn::make('email_opened_at')
                    ->label('Opened')
                    ->boolean()
                    ->trueIcon('heroicon-o-envelope-open')
                    ->falseIcon('heroicon-o-envelope')
                    ->trueColor('success')
                    ->falseColor('gray')
                    ->getStateUsing(fn($record): bool => !is_null($record->email_opened_at)),

                TextColumn::make('email_open_count')
                    ->label('Opens')
                    ->alignCenter()
                    ->color(fn($state): string => $state > 0 ? 'success' : 'gray'),

                TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('d M Y, g:i A')
                    ->sortable()
                    ->color('gray'),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'new'         => 'New',
                        'in_progress' => 'In Progress',
                        'closed'      => 'Closed',
                        'spam'        => 'Spam',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactSubmissions::route('/'),
            'create' => Pages\CreateContactSubmission::route('/create'),
            'edit' => Pages\EditContactSubmission::route('/{record}/edit'),
        ];
    }
}
