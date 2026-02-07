<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Pages\Page;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

// IMPORT YANG BENAR UNTUK FILAMENT V5:
use Filament\Schemas\Schema;                 // Wadah Utama Form
use Filament\Schemas\Components\Section;     // Layout (Grid/Section) ada di Schemas
use Filament\Forms\Components\FileUpload;    // Input (Text/File) tetap di Forms

class ManageWebsite extends Page implements HasForms
{
    use InteractsWithForms;

    // --- BAGIAN 1: HAPUS PROPERTI STATIC NAVIGASI ---
    // Jangan ada deklarasi public/protected static $navigation... di sini.
    // Kita ganti dengan function di bawah agar tidak error Type Mismatch.

    protected string $view = 'filament.pages.manage-website';

    // --- BAGIAN 2: GUNAKAN METHOD (Solusi Error Fatal) ---

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-photo';
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
        return 'Pengaturan Hero Section';
    }

    // -----------------------------------------------------

    public ?array $data = [];

    public function mount(): void
    {
        $settings = SiteSetting::first();
        $this->form->fill($settings ? $settings->toArray() : []);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Section diambil dari namespace Filament\Schemas\Components
                Section::make('Banner Utama')
                    ->description('Gambar ini akan muncul sebagai latar belakang di halaman depan.')
                    ->schema([
                        // FileUpload diambil dari namespace Filament\Forms\Components
                        FileUpload::make('hero_background')
                            ->label('Upload Banner')
                            ->disk('public')
                            ->image()
                            ->directory('hero-banners')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->columnSpanFull(),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $state = $this->form->getState();

        $settings = SiteSetting::firstOrNew();
        $settings->hero_background = $state['hero_background'];
        $settings->save();

        Notification::make()
            ->title('Berhasil disimpan')
            ->success()
            ->send();
    }
}
