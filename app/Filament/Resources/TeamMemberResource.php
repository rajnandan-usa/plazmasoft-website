<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('role')->required()->maxLength(120)->columnSpan(1),
            TextInput::make('email')->email()->maxLength(255)->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            Textarea::make('bio')->rows(4)->columnSpanFull(),
            TextInput::make('linkedin_url')->url()->maxLength(255)->columnSpan(1),
            TextInput::make('github_url')->url()->maxLength(255)->columnSpan(1),
            TextInput::make('twitter_url')->url()->maxLength(255)->columnSpan(1),
            TextInput::make('avatar_path')->label('Avatar Path')->maxLength(255)->columnSpan(1),
            Toggle::make('is_founder')->columnSpan(1),
            Toggle::make('is_published')->default(true)->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('name')->searchable()->weight('bold'),
                TextColumn::make('role')->color('gray'),
                TextColumn::make('email')->color('gray')->copyable(),
                IconColumn::make('is_founder')->boolean()->label('Founder'),
                IconColumn::make('is_published')->boolean()->label('Published'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit'   => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
