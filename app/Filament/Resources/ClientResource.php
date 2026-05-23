<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\Client;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?int $navigationSort = 14;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('website_url')->url()->maxLength(255)->columnSpan(1),
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
                TextColumn::make('website_url')->label('Website')->url(fn($record) => $record->website_url)->color('gray')->limit(40)->openUrlInNewTab(),
                IconColumn::make('is_featured')->boolean()->label('Featured'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit'   => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
