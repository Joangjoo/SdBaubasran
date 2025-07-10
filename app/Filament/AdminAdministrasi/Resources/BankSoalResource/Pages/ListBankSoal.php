<?php

namespace App\Filament\AdminAdministrasi\Resources\BankSoalResource\Pages;

use App\Filament\AdminAdministrasi\Resources\BankSoalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBankSoal extends ListRecords
{
    protected static string $resource = BankSoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
