<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required()->maxLength(200)->columnSpanFull(),
            TextInput::make('slug')->required()->maxLength(200)->columnSpan(1),
            TextInput::make('tagline')->maxLength(255)->columnSpan(1),
            Textarea::make('excerpt')->rows(3)->columnSpanFull(),
            Textarea::make('description')->rows(6)->columnSpanFull(),
            TextInput::make('icon')->maxLength(100)->placeholder('heroicon-o-code-bracket')->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            TextInput::make('meta_title')->maxLength(255)->columnSpan(2),
            Textarea::make('meta_description')->rows(2)->columnSpan(2),
            Toggle::make('is_published')->default(true)->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('title')->searchable()->weight('bold'),
                TextColumn::make('slug')->color('gray'),
                TextColumn::make('tagline')->limit(50)->color('gray'),
                IconColumn::make('is_published')->boolean()->label('Published'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit'   => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
