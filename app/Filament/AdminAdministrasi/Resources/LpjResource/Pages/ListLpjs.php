<?php

namespace App\Filament\AdminAdministrasi\Resources\LpjResource\Pages;

use App\Filament\AdminAdministrasi\Resources\LpjResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLpjs extends ListRecords
{
    protected static string $resource = LpjResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
