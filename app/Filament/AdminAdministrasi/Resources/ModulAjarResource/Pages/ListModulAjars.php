<?php

namespace App\Filament\AdminAdministrasi\Resources\ModulAjarResource\Pages;

use App\Filament\AdminAdministrasi\Resources\ModulAjarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModulAjars extends ListRecords
{
    protected static string $resource = ModulAjarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
