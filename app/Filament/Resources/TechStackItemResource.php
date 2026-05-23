<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechStackItemResource\Pages;
use App\Models\TechStackItem;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TechStackItemResource extends Resource
{
    protected static ?string $model = TechStackItem::class;
    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';
    protected static ?int $navigationSort = 13;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('category')->maxLength(80)->placeholder('Frontend')->columnSpan(1),
            TextInput::make('logo_path')->label('Logo Path')->maxLength(255)->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            Toggle::make('is_featured')->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('name')->searchable()->weight('bold'),
                TextColumn::make('category')->badge()->color('primary'),
                IconColumn::make('is_featured')->boolean()->label('Featured'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListTechStackItems::route('/'),
            'create' => Pages\CreateTechStackItem::route('/create'),
            'edit'   => Pages\EditTechStackItem::route('/{record}/edit'),
        ];
    }
}
