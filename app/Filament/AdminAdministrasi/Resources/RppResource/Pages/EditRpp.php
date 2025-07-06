<?php

namespace App\Filament\AdminAdministrasi\Resources\RppResource\Pages;

use App\Filament\AdminAdministrasi\Resources\RppResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRpp extends EditRecord
{
    protected static string $resource = RppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
