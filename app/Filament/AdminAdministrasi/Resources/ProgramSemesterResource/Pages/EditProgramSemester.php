<?php

namespace App\Filament\AdminAdministrasi\Resources\ProgramSemesterResource\Pages;

use App\Filament\AdminAdministrasi\Resources\ProgramSemesterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramSemester extends EditRecord
{
    protected static string $resource = ProgramSemesterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
