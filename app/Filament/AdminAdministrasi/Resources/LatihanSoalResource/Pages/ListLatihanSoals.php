<?php

namespace App\Filament\AdminAdministrasi\Resources\LatihanSoalResource\Pages;

use App\Filament\AdminAdministrasi\Resources\LatihanSoalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLatihanSoals extends ListRecords
{
    protected static string $resource = LatihanSoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
