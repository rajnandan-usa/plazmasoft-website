<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
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

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?int $navigationSort = 11;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('question')->required()->maxLength(500)->columnSpanFull(),
            Textarea::make('answer')->required()->rows(4)->columnSpanFull(),
            TextInput::make('group')->maxLength(80)->placeholder('general')->columnSpan(1),
            TextInput::make('sort_order')->numeric()->default(0)->columnSpan(1),
            Toggle::make('is_published')->default(true)->columnSpan(1),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('question')->searchable()->limit(60)->weight('bold'),
                TextColumn::make('group')->badge()->color('primary'),
                TextColumn::make('sort_order')->label('Order')->sortable(),
                IconColumn::make('is_published')->boolean()->label('Published'),
            ])
            ->filters([
                SelectFilter::make('group')
                    ->options(Faq::distinct()->pluck('group', 'group')->filter()->toArray()),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit'   => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
