<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Filament\Resources\PrestasiResource\RelationManagers;
use App\Models\Prestasi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Prestasi')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Prestasi')
                    ->required(),

                TextInput::make('tahun')
                    ->label('Tahun')
                    ->numeric()
                    ->required(),

                Select::make('lingkup')
                    ->label('Lingkup Prestasi')
                    ->options([
                        'Internasional' => 'Internasional',
                        'Nasional' => 'Nasional',
                        'Provinsi' => 'Provinsi',
                        'Kota/Kabupaten' => 'Kota/Kabupaten',
                        'Sekolah' => 'Sekolah',
                    ])
                    ->required(),

                FileUpload::make('foto')
                    ->label('Dokumentasi')
                    ->image()
                    ->disk('public')
                    ->directory('prestasi')
                    ->visibility('public')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Prestasi')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi Prestasi')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('lingkup')
                    ->label('Lingkup')
                    ->badge() // Mengubah tampilan menjadi lencana/badge
                    ->color(fn(string $state): string => match ($state) {
                        'Internasional' => 'danger',
                        'Nasional' => 'warning',
                        'Provinsi' => 'success',
                        'Kota/Kabupaten' => 'primary',
                        'Sekolah' => 'gray',
                    })
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ImageColumn::make('foto')
                    ->label('Dokumentasi')
                    ->disk('public')
                    ->visibility('public')
                    ->size(100)
                    ->circular()
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
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Prestasi';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Prestasi';
    }

    public static function getNavigationLabel(): string
    {
        return 'Prestasi';
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-trophy';
    }
}
