<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Pages\Page;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

// IMPORT SESUAI VERSI KAMU:
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\FileUpload;

class ManageWebsite extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-website';
    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-computer-desktop';
    }

    public static function getNavigationLabel(): string
    {
        return 'Tampilan Website';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Pengaturan';
    }

    public function getTitle(): string
    {
        return 'Pengaturan Tampilan';
    }


    public ?array $data = [];

    public function mount(): void
    {
        $settings = SiteSetting::first();
        // Mengisi form dengan data yang ada
        $this->form->fill($settings ? $settings->toArray() : []);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                // --- SECTION 1: HERO (BERANDA) ---
                Section::make('Hero Section (Beranda)')
                    ->description('Pengaturan tampilan banner besar di halaman utama.')
                    ->collapsible() // Bisa dilipat biar rapi
                    ->schema([
                        FileUpload::make('hero_background')
                            ->label('Banner Utama')
                            ->disk('public')
                            ->image()
                            ->directory('hero-banners')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120) // 5MB
                            ->columnSpanFull(),
                    ]),

                // --- SECTION 2: STRUKTUR ORGANISASI ---
                Section::make('Halaman Struktur Organisasi')
                    ->description('Banner yang muncul khusus di halaman Struktur / InfoSphere.')
                    ->collapsible()
                    ->schema([
                        // Kita pakai Grid agar Light & Dark mode bersebelahan
                        Grid::make(2)->schema([
                            FileUpload::make('structure_banner_light')
                                ->label('Banner Mode Terang (Light)')
                                ->helperText('Muncul saat user menggunakan Light Mode.')
                                ->disk('public')
                                ->image()
                                ->directory('banners')
                                ->visibility('public')
                                ->maxSize(5120),

                            FileUpload::make('structure_banner_dark')
                                ->label('Banner Mode Gelap (Dark)')
                                ->helperText('Muncul saat user menggunakan Dark Mode.')
                                ->disk('public')
                                ->image()
                                ->directory('banners')
                                ->visibility('public')
                                ->maxSize(5120),
                        ]),
                    ]),

            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $state = $this->form->getState();

        $settings = SiteSetting::firstOrNew();

        // Simpan data
        $settings->hero_background = $state['hero_background'] ?? null;
        $settings->structure_banner_light = $state['structure_banner_light'] ?? null;
        $settings->structure_banner_dark = $state['structure_banner_dark'] ?? null;

        $settings->save();

        Notification::make()
            ->title('Tampilan berhasil diperbarui')
            ->success()
            ->send();
    }
}
