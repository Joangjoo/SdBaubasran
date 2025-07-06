<?php

namespace App\Filament\AdminAdministrasi\Resources\SoalKenaikanKelasResource\Pages;

use App\Filament\AdminAdministrasi\Resources\SoalKenaikanKelasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoalKenaikanKelas extends EditRecord
{
    protected static string $resource = SoalKenaikanKelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
