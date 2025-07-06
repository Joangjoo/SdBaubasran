<?php

namespace App\Filament\AdminAdministrasi\Resources\CapaianPembelajaranResource\Pages;

use App\Filament\AdminAdministrasi\Resources\CapaianPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCapaianPembelajarans extends ListRecords
{
    protected static string $resource = CapaianPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
