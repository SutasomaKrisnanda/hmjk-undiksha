<?php

use Livewire\Volt\Component;
use App\Models\Structure;
use App\Models\Department; // Pastikan model Department di-import
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;

new #[Layout('components.layouts.web')] class extends Component {
    public $bannerLight;
    public $bannerDark;

    public function mount()
    {
        $settings = SiteSetting::first();
        $this->bannerLight = $settings?->structure_banner_light ? Storage::url($settings->structure_banner_light) : 'https://placehold.co/1920x600/e2e8f0/475569?text=Light+Banner';
        $this->bannerDark = $settings?->structure_banner_dark ? Storage::url($settings->structure_banner_dark) : 'https://placehold.co/1920x600/1e293b/cbd5e1?text=Dark+Banner';
    }

    public function with()
    {
        return [
            // Data Dekanat
            'dekanat' => Structure::where('division', 'Dekanat')->orderBy('id')->get(),

            // Data BPH (Bidang Inti) - Diambil dari Structure
            'kahim' => Structure::where('position', 'Ketua Himpunan')->first(),
            'wakahim' => Structure::where('position', 'Wakil Ketua')->first(),
            'sekretaris' => Structure::where('division', 'Bidang Inti')
                ->where('position', 'LIKE', '%Sekretaris%')
                ->orderBy('position')
                ->get(),
            'bendahara' => Structure::where('division', 'Bidang Inti')
                ->where('position', 'LIKE', '%Bendahara%')
                ->orderBy('position')
                ->get(),

            // Data Bidang Lainnya - Diambil dari tabel DEPARTMENTS baru
            // Kita kecualikan 'inti' karena sudah ditampilkan terpisah sebagai BPH
            'departments' => Department::where('slug', '!=', 'inti')
                ->orderBy('order_level')
                ->get(),
        ];
    }

    // Helper untuk mengambil URL Foto
    public function getPhoto($person)
    {
        return ($person && $person->photo)
            ? Storage::url($person->photo)
            : 'https://placehold.co/300x400/e2e8f0/64748b?text=FOTO';
    }
};
?>

<div class="min-h-screen bg-gray-50 dark:bg-black font-sans">

    <section class="relative pt-40 pb-24 overflow-hidden bg-cover bg-center transition-all duration-500"
        :style="isDark ? 'background-image: url({{ $bannerDark }})' : 'background-image: url({{ $bannerLight }})'">

        <div class="absolute inset-0 bg-linear-to-b from-white/80 via-white/40 to-gray-50 dark:from-black/80 dark:via-black/40 dark:to-black"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-hmj-purple/10 dark:bg-hmj-purple/30 text-hmj-purple dark:text-purple-300 text-xs font-bold tracking-widest uppercase mb-4 border border-hmj-purple/20">
                Kabinet Swarnadipa Ardhana
            </span>
            <h1 class="text-4xl md:text-6xl font-bold font-serif mb-4 text-gray-900 dark:text-white drop-shadow-sm">
                Struktur Organisasi
            </h1>
            <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto font-light">
                Sinergi harmoni dalam satu ikatan kekeluargaan HMJ Kedokteran Undiksha.
            </p>
        </div>
    </section>

    <section class="py-16 relative">
        <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/graphy.png')]"></div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">

            <livewire:infosphere.deanery-tree :dekanat="$dekanat" />

            <div class="mb-32">
                <div class="text-center mb-16">
                    <flux:heading level="2" size="xl" class="uppercase tracking-widest text-hmj-purple dark:text-yellow-400">
                        Bidang Inti
                    </flux:heading>
                </div>

                <div class="flex flex-col items-center max-w-5xl mx-auto">

                    <div class="relative z-20 w-64 md:w-72 group">
                        <flux:card class="flex flex-col items-center text-center p-4! border-t-4 border-t-yellow-500! hover:-translate-y-1 transition duration-300">
                            <div class="w-full aspect-3/4 mb-3 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">
                                <img src="{{ $this->getPhoto($kahim) }}"
                                     class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                            </div>
                            <flux:heading size="lg" class="leading-tight mb-1 font-bold">{{ $kahim?->name ?? 'Ketua' }}</flux:heading>
                            <flux:badge color="yellow" size="sm" inset="top bottom">Ketua Himpunan</flux:badge>
                        </flux:card>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full h-12 w-0.5 bg-gray-300 dark:bg-zinc-700"></div>
                    </div>

                    <div class="relative z-10 w-64 md:w-72 mt-12 group">
                        <flux:card class="flex flex-col items-center text-center p-4! border-t-4 border-t-zinc-500! hover:-translate-y-1 transition duration-300 relative z-20">
                            <div class="w-full aspect-3/4 mb-3 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">
                                <img src="{{ $this->getPhoto($wakahim) }}"
                                     class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                            </div>
                            <flux:heading size="lg" class="leading-tight mb-1 font-bold">{{ $wakahim?->name ?? 'Wakil' }}</flux:heading>
                            <flux:badge color="zinc" size="sm" inset="top bottom">Wakil Ketua</flux:badge>
                        </flux:card>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full h-12 w-0.5 bg-gray-300 dark:bg-zinc-700"></div>
                    </div>

                    <div class="relative w-full mt-12">
                        <div class="absolute top-0 left-[15%] right-[15%] md:left-[25%] md:right-[25%] h-0.5 bg-gray-300 dark:bg-zinc-700"></div>
                        <div class="absolute top-0 left-[15%] md:left-[25%] h-8 w-0.5 bg-gray-300 dark:bg-zinc-700"></div>
                        <div class="absolute top-0 right-[15%] md:right-[25%] h-8 w-0.5 bg-gray-300 dark:bg-zinc-700"></div>

                        <div class="grid grid-cols-2 gap-4 md:gap-16 pt-8">

                            <div class="flex flex-col gap-4 items-end md:items-center">
                                <div class="text-center mb-2 w-full">
                                    <flux:badge color="purple">SEKRETARIS</flux:badge>
                                </div>
                                @foreach ($sekretaris as $s)
                                <flux:card class="w-full md:w-64 flex flex-row items-center gap-3 p-3! border-l-4 border-l-purple-500! hover:-translate-y-1 transition group">
                                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-lg bg-gray-200 overflow-hidden shrink-0 border border-gray-100 dark:border-zinc-700">
                                        <img src="{{ $this->getPhoto($s) }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                                    </div>
                                    <div class="text-left min-w-0">
                                        <flux:heading size="sm" class="truncate font-bold">{{ $s->name }}</flux:heading>
                                        <p class="text-[10px] text-gray-500 uppercase font-semibold">{{ $s->position }}</p>
                                    </div>
                                </flux:card>
                                @endforeach
                            </div>

                            <div class="flex flex-col gap-4 items-start md:items-center">
                                <div class="text-center mb-2 w-full">
                                    <flux:badge color="green">BENDAHARA</flux:badge>
                                </div>
                                @foreach ($bendahara as $b)
                                <flux:card class="w-full md:w-64 flex flex-row-reverse items-center gap-3 p-3! border-r-4 border-r-green-500! text-right hover:-translate-y-1 transition group">
                                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-lg bg-gray-200 overflow-hidden shrink-0 border border-gray-100 dark:border-zinc-700">
                                        <img src="{{ $this->getPhoto($b) }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                                    </div>
                                    <div class="min-w-0">
                                        <flux:heading size="sm" class="truncate font-bold">{{ $b->name }}</flux:heading>
                                        <p class="text-[10px] text-gray-500 uppercase font-semibold">{{ $b->position }}</p>
                                    </div>
                                </flux:card>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-24 pt-16 border-t border-dashed border-gray-200 dark:border-white/10">
                <div class="text-center mb-12">
                    <flux:heading level="2" size="xl" class="uppercase tracking-widest text-gray-800 dark:text-gray-200">
                        Bidang & Departemen
                    </flux:heading>
                    <flux:subheading class="mt-2">Ujung tombak pergerakan HMJ Kedokteran</flux:subheading>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($departments as $dept)
                        <a href="{{ route('department.show', $dept->slug) }}" wire:navigate class="group h-full">

                            <flux:card class="h-full flex flex-col items-center text-center p-6! hover:shadow-xl hover:-translate-y-2 transition duration-300 relative overflow-hidden border-t-4"
                                       style="border-top-color: {{ $dept->color_theme }};">

                                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full blur-3xl opacity-20 group-hover:opacity-40 transition pointer-events-none"
                                     style="background-color: {{ $dept->color_theme }};">
                                </div>

                                <div class="w-20 h-20 mb-4 relative z-10">
                                    @if($dept->logo)
                                        <img src="{{ Storage::url($dept->logo) }}"
                                             class="w-full h-full rounded-full object-cover shadow-md group-hover:scale-110 transition duration-500 bg-white dark:bg-zinc-800 border-2"
                                             style="border-color: {{ $dept->color_theme }}20;">
                                    @else
                                        <div class="w-full h-full rounded-full flex items-center justify-center text-3xl shadow-inner group-hover:scale-110 transition duration-500"
                                             style="background-color: {{ $dept->color_theme }}1A; color: {{ $dept->color_theme }};">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    @endif
                                </div>

                                <h4 class="text-base md:text-lg font-bold text-gray-800 dark:text-white mb-2 transition group-hover:opacity-80">
                                    {{ $dept->name }}
                                </h4>

                                <div class="mt-auto pt-4 opacity-0 group-hover:opacity-100 transition-all transform translate-y-2 group-hover:translate-y-0">
                                    <span class="text-xs font-bold uppercase tracking-wider flex items-center gap-1 justify-center"
                                          style="color: {{ $dept->color_theme }};">
                                        Lihat Detail <i class="fas fa-arrow-right"></i>
                                    </span>
                                </div>
                            </flux:card>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</div>
