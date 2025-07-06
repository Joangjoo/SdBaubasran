<?php

namespace App\Filament\AdminAdministrasi\Resources\SoalKenaikanKelasResource\Pages;

use App\Filament\AdminAdministrasi\Resources\SoalKenaikanKelasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoalKenaikanKelas extends ListRecords
{
    protected static string $resource = SoalKenaikanKelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
