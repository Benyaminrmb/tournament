<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayResource\Pages;
use App\Filament\Resources\PlayResource\RelationManagers;
use App\Models\Play;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlayResource extends Resource
{
    protected static ?string $model = Play::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('game_id')
                    ->relationship('game', 'name')
                    ->required(),
                Forms\Components\Select::make('team1_id')
                    ->relationship('team1', 'name')
                    ->required(),
                Forms\Components\Select::make('team2_id')
                    ->relationship('team2', 'name')
                    ->required(),
                Forms\Components\TextInput::make('team1_score')
                    ->numeric(),
                Forms\Components\TextInput::make('team2_score')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('game.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('team1.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('team2.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('team1_score')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('team2_score')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\Team1RelationManager::class,
            RelationManagers\Team2RelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlays::route('/'),
            'create' => Pages\CreatePlay::route('/create'),
            'edit' => Pages\EditPlay::route('/{record}/edit'),
        ];
    }
}
