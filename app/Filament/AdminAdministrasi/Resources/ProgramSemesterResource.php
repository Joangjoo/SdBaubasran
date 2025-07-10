<?php

namespace App\Filament\AdminAdministrasi\Resources;

use App\Filament\AdminAdministrasi\Resources\ProgramSemesterResource\Pages;
use App\Filament\AdminAdministrasi\Resources\ProgramSemesterResource\RelationManagers;
use App\Models\ProgramSemester;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProgramSemesterResource extends Resource
{
    protected static ?string $model = ProgramSemester::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Program Semester';
    protected static ?string $modelLabel = 'Program Semester';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tahun_ajaran')
                    ->required()
                    ->maxLength(50)
                    ->placeholder('Contoh: 2024/2025'),
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
                        'SENI MEMBATIK' => '6',
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun_ajaran')
                    ->label('Tahun Ajaran')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('mata_pelajaran')
                    ->label('Mata Pelajaran')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tingkat_kelas')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('semester')
                    ->label('Semester')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListProgramSemesters::route('/'),
            'create' => Pages\CreateProgramSemester::route('/create'),
            'edit' => Pages\EditProgramSemester::route('/{record}/edit'),
        ];
    }
}
