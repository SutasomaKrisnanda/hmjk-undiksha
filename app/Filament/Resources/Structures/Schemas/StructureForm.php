<?php

namespace App\Filament\Resources\Structures\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;


class StructureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Personal')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Nama Lengkap')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('position')
                                ->label('Jabatan')
                                ->placeholder('Contoh: Pelindung, Wakil Dekan I, Ketua Himpunan')
                                ->required()
                                ->maxLength(255),
                        ]),

                        Grid::make(2)->schema([
                            Select::make('division')
                                ->label('Bidang / Divisi')
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
                                ])
                                ->required()
                                ->searchable(),

                            TextInput::make('division_code')
                                ->label('Kode Divisi (Opsional)')
                                ->placeholder('Contoh: kominfo, psdm (Hanya untuk Ketua Bidang)')
                                ->maxLength(255),
                        ]),
                    ]),

                Section::make('Foto Profil')
                    ->description('Upload foto resmi dengan rasio 3:4')
                    ->schema([
                        FileUpload::make('photo')
                            ->label('Foto Resmi')
                            ->image()
                            ->disk('public')
                            ->directory('structures') // Folder penyimpanan
                            ->visibility('public')
                            ->imageEditor()
                            ->imageEditorAspectRatioOptions([
                                '3:4',
                            ])
                            ->maxSize(2048) // 2MB
                            ->columnSpanFull(),
                    ]),

                Section::make('Pengaturan Tambahan')
                    ->collapsed()
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('order_level')
                                ->label('Urutan Level')
                                ->helperText('1=Dekan, 2=Inti, 3=Kabid, dst. Digunakan untuk sorting.')
                                ->required()
                                ->numeric()
                                ->default(99),

                            TextInput::make('color_theme')
                                ->label('Warna Tema')
                                ->placeholder('Contoh: blue, red, gold')
                                ->maxLength(255),
                        ]),
                    ]),
            ]);
    }
}
