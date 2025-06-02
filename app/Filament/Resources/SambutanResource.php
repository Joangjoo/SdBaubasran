<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SambutanResource\Pages;
use App\Filament\Resources\SambutanResource\RelationManagers;
use App\Models\Sambutan;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SambutanResource extends Resource
{
    protected static ?string $model = Sambutan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('motivasi')
                    ->label('Kata Motivasi')
                    ->required()
                    ->maxLength(5000)
                    ->columnSpanFull(),
                TextInput::make('sambutan')
                    ->label('Sambutan')
                    ->required()
                    ->maxLength(5000)
                    ->columnSpanFull(),
                TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->label('Gambar Kepala Sekolah')
                    ->image()
                    ->disk('public')
                    ->directory('Kepala Sekolah')
                    ->visibility('public')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('motivasi')
                    ->label('Kata Motivasi')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sambutan')
                    ->label('Sambutan')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Gambar Kepala Sekolah')
                    ->disk('public')
                    ->visibility('public'),
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
            'index' => Pages\ListSambutans::route('/'),
            'create' => Pages\CreateSambutan::route('/create'),
            'edit' => Pages\EditSambutan::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Sambutan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Sambutan';
    }

    public static function getNavigationLabel(): string
    {
        return 'Sambutan';
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-megaphone';
    }
}
