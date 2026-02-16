<?php

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use function Livewire\Volt\{state, mount};

state(['heroImage' => asset('images/banner.png')]);

mount(function () {
    $setting = SiteSetting::first();
    if ($setting && $setting->hero_background) {
        $this->heroImage = Storage::disk('public')->url($setting->hero_background);
    }
});

?>

<div class="relative w-full bg-white dark:bg-gsm-dark overflow-hidden"
     style="height: 100vh; max-height: 700px;"
     x-data="{ finished: false }">

    <style>
        /* Animasi Jatuh (Slam Down) */
        @keyframes slam-down {
            0% { transform: translateY(-120%); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        /* Animasi Background (Sedikit lebih lambat/smooth untuk efek kedalaman) */
        @keyframes bg-slam {
            0% { transform: translateY(-150%) scale(1.1); opacity: 0; }
            100% { transform: translateY(0) scale(1); opacity: 1; }
        }

        .animate-content-slam {
            animation: slam-down 1.2s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        /* Background animasinya kita buat sedikit lebih lama (1.5s) agar ada parallax feel saat masuk */
        .animate-bg-slam {
            animation: bg-slam 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
        }
    </style>

    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
             :class="finished ? 'bg-fixed' : 'animate-bg-slam'"
             @animationend="finished = true"
             style="background-image: url('{{ $heroImage }}');">
        </div>

        <div class="absolute inset-0 bg-linear-to-r from-hmj-purple/90 to-hmj-blue/80 dark:from-gsm-primary/85 dark:to-gsm-dark/80 mix-blend-multiply opacity-90"
             :class="finished ? '' : 'animate-bg-slam'">
        </div>
    </div>

    <header class="relative h-full flex flex-col items-center justify-center font-sans z-10 animate-content-slam">

        <div class="text-center text-white px-4 max-w-5xl mx-auto mt-10">

            <span class="inline-block py-1 px-4 rounded-full text-xs font-bold tracking-widest mb-6 animate-bounce-slow
                         bg-white/10 border border-white/20 backdrop-blur-md shadow-lg
                         dark:bg-gsm-accent/20 dark:border-gsm-accent/50 dark:text-gray-100">
                OFFICIAL WEBSITE
            </span>

            <h2 class="text-2xl md:text-4xl mb-2 font-light tracking-wide font-serif text-gray-100 dark:text-gsm-secondary">
                Himpunan Mahasiswa Jurusan Kedokteran
            </h2>

            <h1 class="text-4xl md:text-7xl font-bold font-sans mb-8 uppercase tracking-tight leading-none drop-shadow-2xl">
                KABINET <span class="text-hmj-gold dark:text-yellow-400 relative inline-block group cursor-default">
                    SWARNADIPA
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-hmj-gold dark:bg-yellow-400 transform scale-x-0 transition-transform duration-500 group-hover:scale-x-100 origin-left"></span>
                </span> ARDHANA
            </h1>

            <p class="text-lg md:text-2xl text-gray-200 mb-10 font-display italic max-w-3xl mx-auto opacity-90 text-shadow-sm leading-relaxed">
                "Berkolaborasi, Berinovasi, dan Mengabdi untuk Kedokteran yang Lebih Baik"
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-5">
                <a href="#infosphere"
                   class="group relative px-8 py-3.5 rounded-full font-bold shadow-xl overflow-hidden
                          bg-white text-hmj-purple
                          dark:bg-gsm-secondary dark:text-gsm-dark transition-transform hover:-translate-y-1">
                   <span class="absolute top-0 left-0 w-full h-full bg-gray-100 dark:bg-yellow-400 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-out z-0"></span>
                   <span class="relative z-10 transition-colors duration-300 flex items-center gap-2">
                       KENALI PENGURUS <i class="fas fa-arrow-down animate-bounce"></i>
                   </span>
                </a>
            </div>
        </div>

        <div class="absolute -bottom-1 left-0 right-0 z-20 w-full pointer-events-none">
            <svg viewBox="0 0 1440 100" fill="none" class="w-full h-auto block" preserveAspectRatio="none">
                <path d="M0 100L1440 100L1440 0C1440 0 1082.5 80 720 80C357.5 80 0 0 0 0L0 100Z"
                      class="fill-white dark:fill-gsm-dark transition-colors duration-500" />
            </svg>
        </div>

    </header>
</div>
