<?php

namespace App\Filament\AdminAdministrasi\Widgets;


use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Proposal;
use App\Models\Lpj;
use App\Models\BankSoal;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Proposal', Proposal::count())
                ->description('Jumlah semua proposal')
                ->icon('heroicon-o-document-plus')
                ->color('success'),
            Stat::make('Total LPJ', Lpj::count())
                ->description('Jumlah semua LPJ')
                ->icon('heroicon-o-document-check')
                ->color('info'),
            Stat::make('Jumlah Bank Soal', BankSoal::count())
                ->description('Jumlah semua soal di bank soal')
                ->icon('heroicon-o-circle-stack')
                ->color('warning'),
        ];
    }
}
