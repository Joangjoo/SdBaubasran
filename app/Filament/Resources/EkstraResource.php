<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstraResource\Pages;
use App\Filament\Resources\EkstraResource\RelationManagers;
use App\Models\Ekstra;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EkstraResource extends Resource
{
    protected static ?string $model = Ekstra::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Ekstrakurikuler')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),

                FileUpload::make('gambar')
                    ->label('Gambar Kegiatan')
                    ->image()
                    ->disk('public')
                    ->directory('ekstrakurikuler')
                    ->visibility('public')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Ekstrakurikuler')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi Ekstrakurikuler')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar Kegiatan')
                    ->disk('public')
                    ->visibility('public')
                    ->size(50)
                    ->circular(),
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
            'index' => Pages\ListEkstras::route('/'),
            'create' => Pages\CreateEkstra::route('/create'),
            'edit' => Pages\EditEkstra::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Ekstrakurikuler';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Ekstrakurikuler';
    }

    public static function getNavigationLabel(): string
    {
        return 'Ekstrakurikuler';
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-academic-cap';
    }
}
