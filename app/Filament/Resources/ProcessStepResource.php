<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProcessStepResource\Pages;
use App\Models\ProcessStep;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProcessStepResource extends Resource
{
    protected static ?string $model = ProcessStep::class;
    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?int $navigationSort = 12;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('step_number')->numeric()->required()->columnSpan(1),
            TextInput::make('title')->required()->maxLength(150)->columnSpan(1),
            TextInput::make('icon')->maxLength(100)->placeholder('heroicon-o-pencil')->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            Textarea::make('description')->rows(4)->columnSpanFull(),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('step_number')->label('Step')->sortable()->weight('bold'),
                TextColumn::make('title')->searchable(),
                TextColumn::make('description')->limit(60)->color('gray'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProcessSteps::route('/'),
            'create' => Pages\CreateProcessStep::route('/create'),
            'edit'   => Pages\EditProcessStep::route('/{record}/edit'),
        ];
    }
}
