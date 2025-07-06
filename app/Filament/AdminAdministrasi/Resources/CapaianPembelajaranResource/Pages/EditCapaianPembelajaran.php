<?php

namespace App\Filament\AdminAdministrasi\Resources\CapaianPembelajaranResource\Pages;

use App\Filament\AdminAdministrasi\Resources\CapaianPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCapaianPembelajaran extends EditRecord
{
    protected static string $resource = CapaianPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
