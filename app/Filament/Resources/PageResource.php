<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = \App\Models\Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-document';

    // Hidden until a Page model and pages table are created
    public static function canViewAny(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit'   => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
