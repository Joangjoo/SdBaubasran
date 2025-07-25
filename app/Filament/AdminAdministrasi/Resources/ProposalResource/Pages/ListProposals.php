<?php

namespace App\Filament\AdminAdministrasi\Resources\ProposalResource\Pages;

use App\Filament\AdminAdministrasi\Resources\ProposalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProposals extends ListRecords
{
    protected static string $resource = ProposalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
