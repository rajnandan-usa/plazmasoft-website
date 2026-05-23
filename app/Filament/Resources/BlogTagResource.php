<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogTagResource\Pages;
use App\Models\BlogTag;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BlogTagResource extends Resource
{
    protected static ?string $model = BlogTag::class;
    protected static ?string $navigationIcon = 'heroicon-o-hashtag';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->maxLength(80)->columnSpan(1),
            TextInput::make('slug')->required()->maxLength(80)->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->weight('bold'),
                TextColumn::make('slug')->color('gray'),
                TextColumn::make('posts_count')->label('Posts')->counts('posts')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListBlogTags::route('/'),
            'create' => Pages\CreateBlogTag::route('/create'),
            'edit'   => Pages\EditBlogTag::route('/{record}/edit'),
        ];
    }
}
