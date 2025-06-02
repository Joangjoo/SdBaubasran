<?php

namespace App\Filament\Resources\LinimasaResource\Pages;

use App\Filament\Resources\LinimasaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLinimasa extends EditRecord
{
    protected static string $resource = LinimasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
