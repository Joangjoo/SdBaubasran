<?php

namespace App\Filament\AdminAdministrasi\Resources\LatihanSoalResource\Pages;

use App\Filament\AdminAdministrasi\Resources\LatihanSoalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatihanSoal extends EditRecord
{
    protected static string $resource = LatihanSoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
