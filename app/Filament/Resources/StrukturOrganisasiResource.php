<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StrukturOrganisasiResource\Pages;
use App\Filament\Resources\StrukturOrganisasiResource\RelationManagers;
use App\Models\StrukturOrganisasi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StrukturOrganisasiResource extends Resource
{
    protected static ?string $model = StrukturOrganisasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Data Sekolahan';
    protected static ?string $navigationLabel = 'Struktur Organisasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')
                    ->label('Foto Pejabat')
                    ->image()
                    ->imageEditor()
                    ->directory('struktur-organisasi')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('periode_jabatan')
                    ->label('Periode Jabatan')
                    ->placeholder('Contoh: 2024-2026')
                    ->maxLength(50),

                // Mengganti TextInput dengan Select untuk kemudahan input
                Select::make('kelas_mengajar')
                    ->label('Kelas yang Diajar')
                    ->multiple() // Mengizinkan pemilihan lebih dari satu kelas
                    ->options([
                        '1' => 'Kelas 1',
                        '2' => 'Kelas 2',
                        '3' => 'Kelas 3',
                        '4' => 'Kelas 4',
                        '5' => 'Kelas 5',
                        '6' => 'Kelas 6',
                    ])
                    ->placeholder('Pilih satu atau lebih kelas'),

                Select::make('mapel_mengajar')
                    ->label('Mata Pelajaran yang Diajar')
                    ->multiple() // Mengizinkan pemilihan lebih dari satu mata pelajaran
                    ->options([
                        'Wali Kelas' => 'Wali Kelas',
                        'Pendidikan Agama Islam' => 'Pendidikan Agama Islam',
                        'PPKN' => 'PPKN',
                        'Bahasa Indonesia' => 'Bahasa Indonesia',
                        'Matematika' => 'Matematika',
                        'IPAS' => 'IPAS',
                        'Seni Budaya' => 'Seni Budaya',
                        'PJOK' => 'PJOK',
                        'Bahasa Inggris' => 'Bahasa Inggris',
                        'Bahasa Jawa' => 'Bahasa Jawa',
                        'Bahasa Arab' => 'Bahasa Arab',
                    ])
                    ->placeholder('Pilih satu atau lebih mata pelajaran'),

                Select::make('jabatan')
                    ->options([
                        'Kepala Sekolah' => 'Kepala Sekolah',
                        'Kepala Tata Usaha' => 'Kepala Tata Usaha',
                        'Bendahara' => 'Bendahara',
                        'Kurikulum' => 'Kurikulum',
                        'Kesiswaan' => 'Kesiswaan',
                        'Ismuba' => 'Ismuba',
                        'Sarpras' => 'Sarpras',
                        'BUMS' => 'BUMS',
                        'Humas' => 'Humas',
                        'Pengajaran' => 'Pengajaran',
                        'Ibadah' => 'Ibadah',
                        'Maintenance' => 'Maintenance',
                        'Kooperasi' => 'Kooperasi',
                        'Ekstrakulikuler' => 'Ekstrakulikuler',

                    ])
                    ->searchable()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Jabatan')
                    ->disk('public')
                    ->visibility('public')
                    ->size(100)
                    ->circular(),

                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->label('Nama Lengkap')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kelas_mengajar')
                    ->label('Kelas Diajar')
                    ->badge(),
                TextColumn::make('mapel_mengajar')
                    ->label('Mapel Diajar')
                    ->badge(),

                Tables\Columns\TextColumn::make('periode_jabatan')
                    ->label('Periode Jabatan')
                    ->sortable()
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
            'index' => Pages\ListStrukturOrganisasis::route('/'),
            'create' => Pages\CreateStrukturOrganisasi::route('/create'),
            'edit' => Pages\EditStrukturOrganisasi::route('/{record}/edit'),
        ];
    }
}
