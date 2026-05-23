<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectCategoryResource\Pages;
use App\Models\ProjectCategory;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('slug')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('color')->maxLength(30)->placeholder('#fb923c')->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
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
                TextColumn::make('projects_count')->label('Projects')->counts('projects')->sortable(),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit'   => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }
}
