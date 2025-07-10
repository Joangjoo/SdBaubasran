<?php

namespace App\Filament\AdminAdministrasi\Resources;

use App\Filament\AdminAdministrasi\Resources\LpjResource\Pages;
use App\Filament\AdminAdministrasi\Resources\LpjResource\RelationManagers;
use App\Models\Lpj;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class LpjResource extends Resource
{
    protected static ?string $model = Lpj::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';
    protected static ?string $navigationGroup = 'Program Sekolah';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'LPJ';
    protected static ?string $modelLabel = 'LPJ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
                    ->url(fn(Lpj $record): string => url('storage/' . $record->file_path), shouldOpenInNewTab: true),
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
            'index' => Pages\ListLpjs::route('/'),
            'create' => Pages\CreateLpj::route('/create'),
            'edit' => Pages\EditLpj::route('/{record}/edit'),
        ];
    }
}
