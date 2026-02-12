<?php

namespace App\Filament\Resources\Structures\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class StructuresTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->label('Foto')
                    ->circular(),

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable()
                    ->badge()
                    ->color(fn(string $state): string => match (true) {
                        str_contains($state, 'Ketua') => 'warning',
                        str_contains($state, 'Wakil') => 'info',
                        str_contains($state, 'Dekan') => 'success',
                        default => 'gray',
                    }),

                TextColumn::make('division')
                    ->label('Divisi')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Bidang Inti' => 'gray',
                        'Bidang Pendidikan dan Profesi' => 'blue',
                        'Bidang PSDM' => 'red',
                        'Bidang Kesejahteraan Mahasiswa' => 'yellow',
                        'Bidang Pengabdian Masyarakat' => 'orange',
                        'Bidang Komnasinfo' => 'sky',
                        'Bidang Inteks' => 'amber',
                        'Bidang Prodanus' => 'green',
                        'Dekanat' => 'gray',
                        default => 'gray',
                    }),

                TextColumn::make('division_code')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('order_level')
                    ->label('Level')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('division')
                    ->label('Filter Divisi')
                    ->options([
                        'Dekanat' => 'Dekanat (Pelindung & Pembina)',
                        'Bidang Inti' => 'Bidang Inti (BPH)',
                        'Bidang Pendidikan dan Profesi' => 'Bidang PENDPRO',
                        'Bidang PSDM' => 'Bidang PSDM',
                        'Bidang Kesejahteraan Mahasiswa' => 'Bidang KESMA',
                        'Bidang Pengabdian Masyarakat' => 'Bidang PENGMAS',
                        'Bidang Komnasinfo' => 'Bidang KOMNASINFO',
                        'Bidang Inteks' => 'Bidang INTEKS',
                        'Bidang Prodanus' => 'Bidang PRODANUS',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
