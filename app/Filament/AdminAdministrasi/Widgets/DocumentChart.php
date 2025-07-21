<?php

namespace App\Filament\AdminAdministrasi\Widgets;


use App\Models\BankSoal;
use Filament\Widgets\ChartWidget;
use App\Models\CapaianPembelajaran;
use App\Models\ModulAjar;

class DocumentChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Dokumen per Kategori';
    protected static ?string $maxHeight = '300px';



    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Dokumen',
                    'data' => [
                        CapaianPembelajaran::count(),
                        ModulAjar::count(),
                        BankSoal::count(),
                    ],
                    'backgroundColor' => ['#36A2EB', '#FFCE56', '#FF6384', '#4BC0C0'],
                ],
            ],
            'labels' => ['Capaian Pembelajaran', 'Modul Ajar', 'Bank Soal'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
