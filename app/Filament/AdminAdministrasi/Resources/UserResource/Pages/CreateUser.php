<?php

namespace App\Filament\AdminAdministrasi\Resources\UserResource\Pages;

use App\Filament\AdminAdministrasi\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
