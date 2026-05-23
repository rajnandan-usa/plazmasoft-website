<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required()->maxLength(255)->columnSpanFull(),
            TextInput::make('slug')->required()->maxLength(255)->columnSpan(1),
            Select::make('blog_category_id')->label('Category')
                ->options(BlogCategory::pluck('name', 'id'))->searchable()->columnSpan(1),
            Textarea::make('excerpt')->rows(3)->columnSpanFull(),
            Textarea::make('content')->rows(12)->columnSpanFull(),
            TextInput::make('reading_time')->label('Reading Time (min)')->numeric()->columnSpan(1),
            DateTimePicker::make('published_at')->columnSpan(1),
            TextInput::make('meta_title')->maxLength(255)->columnSpan(2),
            Textarea::make('meta_description')->rows(2)->columnSpan(2),
            Toggle::make('is_featured')->columnSpan(1),
            Toggle::make('is_published')->default(true)->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('title')->searchable()->weight('bold')->limit(50),
                TextColumn::make('category.name')->label('Category')->badge()->color('primary'),
                TextColumn::make('reading_time')->label('Min read')->suffix(' min'),
                TextColumn::make('view_count')->label('Views')->sortable(),
                IconColumn::make('is_featured')->boolean()->label('Featured'),
                TextColumn::make('is_published')->badge()
                    ->color(fn($state) => $state ? 'success' : 'gray')
                    ->formatStateUsing(fn($state) => $state ? 'Published' : 'Draft'),
                TextColumn::make('published_at')->label('Published')->date('d M Y')->sortable(),
            ])
            ->filters([
                SelectFilter::make('blog_category_id')->label('Category')
                    ->options(BlogCategory::pluck('name', 'id')),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit'   => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
