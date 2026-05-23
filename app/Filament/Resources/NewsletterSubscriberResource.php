<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterSubscriberResource\Pages;
use App\Models\NewsletterSubscriber;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class NewsletterSubscriberResource extends Resource
{
    protected static ?string $model = NewsletterSubscriber::class;
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('email')->email()->required()->disabled()->columnSpan(1),
            TextInput::make('source')->disabled()->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('email')->searchable()->copyable()->weight('bold'),
                TextColumn::make('source')->color('gray'),
                IconColumn::make('is_confirmed')->boolean()->label('Confirmed'),
                TextColumn::make('confirmed_at')->label('Confirmed At')->dateTime('d M Y')->color('gray'),
                TextColumn::make('unsubscribed_at')->label('Unsubscribed')->dateTime('d M Y')->color('danger'),
                TextColumn::make('created_at')->label('Subscribed')->dateTime('d M Y')->sortable()->color('gray'),
            ])
            ->filters([
                SelectFilter::make('is_confirmed')
                    ->label('Status')
                    ->options([1 => 'Confirmed', 0 => 'Unconfirmed']),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListNewsletterSubscribers::route('/'),
            'create' => Pages\CreateNewsletterSubscriber::route('/create'),
            'edit'   => Pages\EditNewsletterSubscriber::route('/{record}/edit'),
        ];
    }
}
