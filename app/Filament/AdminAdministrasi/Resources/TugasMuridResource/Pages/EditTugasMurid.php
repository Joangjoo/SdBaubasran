<?php

namespace App\Filament\AdminAdministrasi\Resources\TugasMuridResource\Pages;

use App\Filament\AdminAdministrasi\Resources\TugasMuridResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTugasMurid extends EditRecord
{
    protected static string $resource = TugasMuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
