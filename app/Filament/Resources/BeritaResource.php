<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Berita')
                    ->required()
                    ->maxLength(255),

                Textarea::make('konten')
                    ->label('Isi Berita')
                    ->required(),

                FileUpload::make('gambar')
                    ->image()
                    ->label('Gambar Berita')
                    ->disk('public')
                    ->directory('berita')
                    ->visibility('public')
                    ->required()
                    ->maxSize(1024)
                    ->acceptedFileTypes(['image/jpeg', 'image/png']),

                DatePicker::make('tanggal')
                    ->label('Tanggal Publikasi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Berita')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('konten')
                    ->label('Deskripsi Berita')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar Berita')
                    ->disk('public')
                    ->visibility('public'),

                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal Publikasi')
                    ->date()
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Berita';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Berita';
    }

    public static function getNavigationLabel(): string
    {
        return 'Berita';
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-newspaper';
    }
}
