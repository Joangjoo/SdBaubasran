<?php

// namespace App\Filament\AdminAdministrasi\Widgets;


// use Filament\Tables;
// use Filament\Tables\Table;
// use Filament\Widgets\TableWidget as BaseWidget;
// use App\Models\Proposal;

// class LatestProposals extends BaseWidget
// {
//     protected static ?string $heading = 'Proposal Terbaru';
//     protected int | string | array $columnSpan = 'full';
//     public function table(Table $table): Table
//     {
//         return $table
//             ->query(Proposal::query()->latest()->limit(5))
//             ->columns([
//                 Tables\Columns\TextColumn::make('judul'),
//                 Tables\Columns\TextColumn::make('nama_pengunggah'),
//                 Tables\Columns\TextColumn::make('created_at')
//                     ->label('Tanggal Upload')
//                     ->since(),
//             ]);
//     }
// }
