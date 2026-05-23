<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use App\Models\ProjectCategory;
use Filament\Forms\Components\DatePicker;
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

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required()->maxLength(200)->columnSpanFull(),
            TextInput::make('slug')->required()->maxLength(200)->columnSpan(1),
            TextInput::make('client_name')->maxLength(120)->columnSpan(1),
            Select::make('project_category_id')->label('Category')
                ->options(ProjectCategory::pluck('name', 'id'))->searchable()->columnSpan(1),
            TextInput::make('industry')->maxLength(120)->columnSpan(1),
            TextInput::make('region')->maxLength(120)->columnSpan(1),
            TextInput::make('team_size')->numeric()->columnSpan(1),
            TextInput::make('tagline')->maxLength(255)->columnSpanFull(),
            Textarea::make('summary')->rows(3)->columnSpanFull(),
            Textarea::make('problem')->rows(3)->columnSpanFull(),
            Textarea::make('solution')->rows(3)->columnSpanFull(),
            Textarea::make('outcome')->rows(3)->columnSpanFull(),
            TextInput::make('live_url')->url()->maxLength(255)->columnSpan(1),
            TextInput::make('playstore_url')->url()->maxLength(255)->columnSpan(1),
            TextInput::make('appstore_url')->url()->maxLength(255)->columnSpan(1),
            TextInput::make('github_url')->url()->maxLength(255)->columnSpan(1),
            DatePicker::make('duration_from')->columnSpan(1),
            DatePicker::make('duration_to')->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            TextInput::make('meta_title')->maxLength(255)->columnSpan(2),
            Textarea::make('meta_description')->rows(2)->columnSpan(2),
            Toggle::make('is_featured')->columnSpan(1),
            Toggle::make('is_published')->default(true)->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('title')->searchable()->weight('bold')->limit(40),
                TextColumn::make('client_name')->label('Client')->color('gray'),
                TextColumn::make('category.name')->label('Category')->badge()->color('primary'),
                TextColumn::make('industry')->color('gray'),
                IconColumn::make('is_featured')->boolean()->label('Featured'),
                IconColumn::make('is_published')->boolean()->label('Published'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->filters([
                SelectFilter::make('project_category_id')->label('Category')
                    ->options(ProjectCategory::pluck('name', 'id')),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit'   => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
