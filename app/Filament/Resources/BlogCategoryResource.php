<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogCategoryResource\Pages;
use App\Models\BlogCategory;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BlogCategoryResource extends Resource
{
    protected static ?string $model = BlogCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('slug')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('color')->maxLength(30)->placeholder('#fb923c')->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            TextInput::make('description')->maxLength(255)->columnSpanFull(),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('name')->searchable()->weight('bold'),
                TextColumn::make('slug')->color('gray'),
                TextColumn::make('color')->badge(),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListBlogCategories::route('/'),
            'create' => Pages\CreateBlogCategory::route('/create'),
            'edit'   => Pages\EditBlogCategory::route('/{record}/edit'),
        ];
    }
}
