<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ColorPicker;


class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('name')->required()->label('Nama Bidang'),
                    TextInput::make('slug')->required()->unique(ignoreRecord: true),
                ]),

                // GANTI SELECT MENJADI COLOR PICKER
                ColorPicker::make('color_theme')
                    ->label('Warna Identitas')
                    ->required()
                    ->hex() // Pastikan formatnya Hexa (#RRGGBB)
                    ->helperText('Pilih warna dominan untuk branding bidang ini.'),

                FileUpload::make('logo')
                    ->image()
                    ->disk('public')
                    ->directory('departments')
                    ->avatar()
                    ->imageEditor()
                    ->columnSpanFull(),

                FileUpload::make('banner')
                    ->label('Banner Header')
                    ->image()
                    ->disk('public')
                    ->directory('departments/banners')
                    ->imageEditor()
                    ->columnSpan(1)
                    ->helperText('Disarankan resolusi 1920x400px atau wide.'),

                Textarea::make('description')->columnSpanFull(),

                TextInput::make('order_level')
                    ->numeric()
                    ->default(0)
                    ->label('Urutan'),
            ]);
    }
}
