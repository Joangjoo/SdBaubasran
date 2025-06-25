<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinimasaResource\Pages;
use App\Filament\Resources\LinimasaResource\RelationManagers;
use App\Models\Linimasa;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LinimasaResource extends Resource
{
    protected static ?string $model = Linimasa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Profil Sekolah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->directory('Linimasa')
                    ->visibility('public')
                    ->required(),
                TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->required()
                    ->maxLength(5000)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('foto')
                    ->label('Foto')
                    ->disk('public')
                    ->visibility('public'),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(100)
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
            'index' => Pages\ListLinimasas::route('/'),
            'create' => Pages\CreateLinimasa::route('/create'),
            'edit' => Pages\EditLinimasa::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return 'Linimasa';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Linimasa';
    }

    public static function getNavigationLabel(): string
    {
        return 'Linimasa';
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-calendar';
    }
}
