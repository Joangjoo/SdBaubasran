<?php

namespace App\Filament\AdminAdministrasi\Resources\LpjResource\Pages;

use App\Filament\AdminAdministrasi\Resources\LpjResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLpj extends EditRecord
{
    protected static string $resource = LpjResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
