<?php

namespace App\Filament\AdminAdministrasi\Resources\ModulAjarResource\Pages;

use App\Filament\AdminAdministrasi\Resources\ModulAjarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModulAjar extends EditRecord
{
    protected static string $resource = ModulAjarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
