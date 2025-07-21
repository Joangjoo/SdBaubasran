<?php

namespace App\Filament\AdminAdministrasi\Resources;

use App\Filament\AdminAdministrasi\Resources\ModulAjarResource\Pages;
use App\Filament\AdminAdministrasi\Resources\ModulAjarResource\RelationManagers;
use App\Models\ModulAjar;
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

class ModulAjarResource extends Resource
{
    protected static ?string $model = ModulAjar::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Modul Ajar';
    protected static ?string $modelLabel = 'Modul Ajar';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('file_path')
                    ->label('Upload File Modul Ajar')
                    ->directory('modul-ajar')
                    ->required()
                    ->afterStateUpdated(function (Set $set, ?TemporaryUploadedFile $state) {
                        if (! $state) {
                            return;
                        }
                        $set('nama_file_asli', $state->getClientOriginalName());
                    })
                    ->columnSpanFull(),
                Hidden::make('nama_file_asli'),
                Select::make('mata_pelajaran')
                    ->label('Mata Pelajaran')
                    ->options([
                        'PAI' => 'PAI',
                        'PENDIDIKAN PANCASILA' => 'PENDIDIKAN PANCASILA',
                        'BAHASA INDONESIA' => 'BAHASA INDONESIA',
                        'MATEMATIKA' => 'MATEMATIKA',
                        'IPAS' => 'IPAS',
                        'SENI RUPA' => 'SENI RUPA',
                        'PJOK' => 'PJOK',
                        'KEMUHAMMADIYAHAN' => 'KEMUHAMMADIYAHAN',
                        'BAHASA ARAB' => 'BAHASA ARAB',
                        'BAHASA JAWA' => 'BAHASA JAWA',
                        'BAHASA INGGRIS' => 'BAHASA INGGRIS',
                        'SENI MEMBATIK' => 'SENI MEMBATIK',
                    ])
                    ->required(),
                Select::make('tingkat_kelas')
                    ->label('kelas')
                    ->options([
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                    ])
                    ->required(),
                Select::make('semester')
                    ->options([
                        'ganjil' => 'Ganjil',
                        'genap' => 'Genap',
                    ])
                    ->required(),
                TextInput::make('tahun_ajaran')
                    ->required()
                    ->maxLength(50)
                    ->placeholder('Contoh: 2024/2025'),
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
                TextColumn::make('semester')
                    ->badge(),
                TextColumn::make('tahun_ajaran'),
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
                    ->url(fn(ModulAjar $record): string => url('storage/' . $record->file_path), shouldOpenInNewTab: true),
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
            'index' => Pages\ListModulAjars::route('/'),
            'create' => Pages\CreateModulAjar::route('/create'),
            'edit' => Pages\EditModulAjar::route('/{record}/edit'),
        ];
    }
}
