<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiResource\Pages;
use App\Filament\Resources\VisiResource\RelationManagers;
use App\Models\Visi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiResource extends Resource
{
    protected static ?string $model = Visi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('visi')
                    ->label('Visi')
                    ->required()
                    ->maxLength(5000)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')
                    ->label('Visi')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVisis::route('/'),
            'create' => Pages\CreateVisi::route('/create'),
            'edit' => Pages\EditVisi::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return 'Visi';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Visi';
    }

    public static function getNavigationLabel(): string
    {
        return 'Visi';
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-flag';
    }
}
