<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Project;
use App\Models\Testimonial;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('author_name')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('author_role')->maxLength(120)->columnSpan(1),
            TextInput::make('author_company')->maxLength(120)->columnSpan(1),
            TextInput::make('author_location')->maxLength(120)->columnSpan(1),
            Select::make('rating')
                ->options([1 => '1 star', 2 => '2 stars', 3 => '3 stars', 4 => '4 stars', 5 => '5 stars'])
                ->default(5)->columnSpan(1),
            Select::make('project_id')
                ->label('Linked Project')
                ->options(Project::pluck('title', 'id'))
                ->searchable()->nullable()->columnSpan(1),
            Textarea::make('quote')->required()->rows(4)->columnSpanFull(),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            Toggle::make('is_featured')->columnSpan(1),
            Toggle::make('is_published')->default(true)->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('author_name')->searchable()->weight('bold'),
                TextColumn::make('author_role')->color('gray'),
                TextColumn::make('author_company')->color('gray'),
                TextColumn::make('rating')->badge()->color('warning'),
                IconColumn::make('is_featured')->boolean()->label('Featured'),
                IconColumn::make('is_published')->boolean()->label('Published'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit'   => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
