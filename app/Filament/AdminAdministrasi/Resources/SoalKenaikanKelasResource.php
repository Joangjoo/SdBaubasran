<?php

namespace App\Filament\AdminAdministrasi\Resources;

use App\Filament\AdminAdministrasi\Resources\SoalKenaikanKelasResource\Pages;
use App\Filament\AdminAdministrasi\Resources\SoalKenaikanKelasResource\RelationManagers;
use App\Models\SoalKenaikanKelas;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Set;

class SoalKenaikanKelasResource extends Resource
{
    protected static ?string $model = SoalKenaikanKelas::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationLabel = 'Soal Kenaikan Kelas';
    protected static ?string $modelLabel = 'Soal Kenaikan Kelas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('file_path')
                    ->label('Upload File Soal Kenaikan Kelas')
                    ->directory('soal-kenaikan-kelas')
                    ->required()
                    ->afterStateUpdated(function (Set $set, ?TemporaryUploadedFile $state) {
                        if (! $state) {
                            return;
                        }
                        $set('nama_file_asli', $state->getClientOriginalName());
                    })
                    ->columnSpanFull(),
                Hidden::make('nama_file_asli'),
                Textarea::make('deskripsi')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('mata_pelajaran')
                    ->required()
                    ->maxLength(100),
                Select::make('tingkat_kelas')
                    ->label('Kelas')
                    ->options([
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                    ])
                    ->required(),
                TextInput::make('tahun_ajaran')
                    ->required()
                    ->maxLength(50)
                    ->placeholder('Contoh: 2024/2025'),
                TextInput::make('nama_pengunggah')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('mata_pelajaran')
                    ->searchable(),
                TextColumn::make('tingkat_kelas'),
                TextColumn::make('tahun_ajaran'),
                TextColumn::make('nama_pengunggah')
                    ->searchable(),
                TextColumn::make('nama_file_asli')
                    ->label('Nama File')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(fn(SoalKenaikanKelas $record): string => url('storage/' . $record->file_path), shouldOpenInNewTab: true),
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
            'index' => Pages\ListSoalKenaikanKelas::route('/'),
            'create' => Pages\CreateSoalKenaikanKelas::route('/create'),
            'edit' => Pages\EditSoalKenaikanKelas::route('/{record}/edit'),
        ];
    }
}
