<?php

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use function Livewire\Volt\{state, mount};

// 1. Definisikan State (Variable Public)
state(['heroImage' => asset('images/banner.png')]); // Default value

// 2. Lifecycle Mount (Jalan saat komponen dimuat)
mount(function () {
    $setting = SiteSetting::first();

    // Cek database & storage public
    if ($setting && $setting->hero_background) {
        $this->heroImage = Storage::disk('public')->url($setting->hero_background);
    }
});

?>

<header class="relative h-[650px] flex items-center justify-center font-sans">
    
    <div class="fixed inset-0 w-full h-[120vh] z-0">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
             style="background-image: url('{{ $heroImage }}');">
        </div>

        <div class="absolute inset-0 transition-colors duration-500
                    bg-gradient-to-r
                    from-hmj-purple/90 to-hmj-blue/80
                    dark:from-gsm-primary/85 dark:to-gsm-dark/80">
        </div>
    </div>

    <div class="relative z-10 text-center text-white px-4 max-w-5xl mx-auto mt-10">
        <span class="inline-block py-1 px-4 rounded-full text-xs font-bold tracking-widest mb-6 animate-[bounce_3s_infinite]
                     bg-white/20 border border-white/30 backdrop-blur-sm
                     dark:bg-gsm-accent/20 dark:border-gsm-accent/50 dark:text-gray-100">
            OFFICIAL WEBSITE
        </span>

        <h2 class="text-2xl md:text-4xl mb-2 font-light tracking-wide font-serif text-gray-100 dark:text-gsm-secondary">
            Himpunan Mahasiswa Jurusan Kedokteran
        </h2>

        <h1 class="text-4xl md:text-7xl font-bold font-sans mb-8 uppercase tracking-tight leading-none">
            KABINET <span class="text-hmj-gold dark:text-white">SWARNADIPA</span> ARDHANA
        </h1>

        <p class="text-lg md:text-2xl text-gray-200 mb-10 font-display italic max-w-3xl mx-auto opacity-90">
            "Berkolaborasi, Berinovasi, dan Mengabdi untuk Kedokteran yang Lebih Baik"
        </p>

        <div class="flex flex-col md:flex-row justify-center gap-5">
            <a href="#infosphere"
               class="px-8 py-3.5 rounded font-bold shadow-lg transition transform hover:-translate-y-1
               bg-white text-hmj-purple hover:bg-gray-100
               dark:bg-gsm-secondary dark:text-gsm-dark dark:hover:bg-yellow-400 border-none">
                KENALI PENGURUS
            </a>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 z-10">
        <svg viewBox="0 0 1440 100" fill="none" class="w-full h-auto">
            <path d="M0 100L1440 100L1440 0C1440 0 1082.5 80 720 80C357.5 80 0 0 0 0L0 100Z"
                  class="fill-white dark:fill-gsm-dark transition-colors duration-500" />
        </svg>
    </div>
</header>