<?php

use Livewire\Volt\Component;
use App\Models\Structure;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;

new #[Layout('components.layouts.web')] class extends Component {
    public $bannerLight;
    public $bannerDark;

    public function mount()
    {
        $settings = SiteSetting::first();
        // Set default banner jika belum ada upload
        $this->bannerLight = $settings?->structure_banner_light ? Storage::url($settings->structure_banner_light) : 'https://placehold.co/1920x600/e2e8f0/475569?text=Light+Banner';

        $this->bannerDark = $settings?->structure_banner_dark ? Storage::url($settings->structure_banner_dark) : 'https://placehold.co/1920x600/1e293b/cbd5e1?text=Dark+Banner';
    }

    public function with()
    {
        return [
            'dekanat' => Structure::where('division', 'Dekanat')->orderBy('id')->get(),
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
            'departments' => Structure::whereNotNull('division_code')
                ->whereNotIn('division_code', ['inti'])
                ->select('division', 'division_code', 'color_theme')
                ->distinct()
                ->get(),
        ];
    }
};
?>

<div class="min-h-screen bg-gray-50 dark:bg-black font-sans">

    <section class="relative pt-40 pb-24 overflow-hidden bg-cover bg-center transition-all duration-500"
        :style="isDark
            ?
            'background-image: url({{ $bannerDark }})' :
            'background-image: url({{ $bannerLight }})'">

        <div
            class="absolute inset-0 bg-linear-to-b from-white/80 via-white/40 to-gray-50 dark:from-black/80 dark:via-black/40 dark:to-black">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-hmj-purple/10 dark:bg-hmj-purple/30 text-hmj-purple dark:text-purple-300 text-xs font-bold tracking-widest uppercase mb-4 border border-hmj-purple/20">
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
        <div
            class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/graphy.png')]">
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <livewire:infosphere.deanery-tree :dekanat="$dekanat" />

            <div class="mb-32">
                <div class="text-center mb-16">
                    <h2
                        class="text-2xl font-bold text-hmj-purple dark:text-yellow-400 uppercase tracking-[0.2em] font-serif">
                        Badan Pengurus Harian</h2>
                </div>

                <div class="flex flex-col items-center">

                    <div class="relative z-10 w-72 md:w-80">
                        <div
                            class="bg-white dark:bg-zinc-800 rounded-2xl shadow-xl p-6 text-center border-2 border-hmj-gold relative z-20">
                            <div
                                class="absolute -top-3 left-1/2 -translate-x-1/2 bg-hmj-gold text-white px-4 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider shadow-sm">
                                Ketua Himpunan
                            </div>
                            <div
                                class="w-28 h-28 mx-auto rounded-full p-1 border-2 border-dashed border-hmj-gold mb-4 mt-2">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($kahim?->name ?? 'Ketua') }}&background=EAB308&color=fff"
                                    class="w-full h-full rounded-full object-cover">
                            </div>
                            <h3 class="font-bold text-lg text-gray-900 dark:text-white font-serif leading-tight">
                                {{ $kahim?->name }}
                            </h3>
                        </div>
                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full h-12 w-0.5 bg-gray-300 dark:bg-gray-700">
                        </div>
                    </div>

                    <div class="relative z-10 w-64 md:w-72 mt-12">
                        <div
                            class="bg-white dark:bg-zinc-800 rounded-2xl shadow-lg p-5 text-center border border-gray-200 dark:border-white/10 relative z-20">
                            <div
                                class="absolute -top-3 left-1/2 -translate-x-1/2 bg-gray-600 text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider shadow-sm">
                                Wakil Ketua
                            </div>
                            <div class="w-20 h-20 mx-auto rounded-full bg-gray-200 mb-3 mt-1 overflow-hidden">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($wakahim?->name ?? 'Wakil') }}&background=random"
                                    class="w-full h-full object-cover">
                            </div>
                            <h3 class="font-bold text-md text-gray-900 dark:text-white leading-tight">
                                {{ $wakahim?->name }}
                            </h3>
                        </div>
                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full h-12 w-0.5 bg-gray-300 dark:bg-gray-700">
                        </div>
                    </div>

                    <div class="relative w-full max-w-4xl mt-12">
                        <div class="absolute top-0 left-[25%] right-[25%] h-0.5 bg-gray-300 dark:bg-gray-700"></div>
                        <div class="absolute top-0 left-[25%] h-8 w-0.5 bg-gray-300 dark:bg-gray-700"></div>
                        <div class="absolute top-0 right-[25%] h-8 w-0.5 bg-gray-300 dark:bg-gray-700"></div>

                        <div class="grid grid-cols-2 gap-8 md:gap-16 pt-8">

                            <div class="flex flex-col gap-4">
                                <div class="text-center mb-2">
                                    <span
                                        class="bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-300 px-3 py-1 rounded-full text-xs font-bold uppercase">Sekretaris</span>
                                </div>
                                @foreach ($sekretaris as $s)
                                <div
                                    class="bg-white dark:bg-zinc-800 p-4 rounded-xl shadow-sm border-l-4 border-purple-500 flex items-center gap-3 relative hover:-translate-y-1 transition">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($s->name) }}&background=random"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div class="text-left">
                                        <h4 class="font-bold text-xs text-gray-900 dark:text-white leading-tight">
                                            {{ $s->name }}
                                        </h4>
                                        <p class="text-[9px] text-gray-500 uppercase">{{ $s->position }}</p>
                                    </div>
                                    <div class="md:hidden absolute -top-4 left-1/2 h-4 w-px bg-gray-300"></div>
                                </div>
                                @endforeach
                            </div>

                            <div class="flex flex-col gap-4">
                                <div class="text-center mb-2">
                                    <span
                                        class="bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-300 px-3 py-1 rounded-full text-xs font-bold uppercase">Bendahara</span>
                                </div>
                                @foreach ($bendahara as $b)
                                <div
                                    class="bg-white dark:bg-zinc-800 p-4 rounded-xl shadow-sm border-r-4 border-green-500 flex flex-row-reverse items-center gap-3 text-right hover:-translate-y-1 transition">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($b->name) }}&background=random"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-xs text-gray-900 dark:text-white leading-tight">
                                            {{ $b->name }}
                                        </h4>
                                        <p class="text-[9px] text-gray-500 uppercase">{{ $b->position }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-24 pt-16 border-t border-dashed border-gray-200 dark:border-white/10">
                <div class="text-center mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 uppercase tracking-widest">Bidang &
                        Departemen</h2>
                    <p class="text-gray-500 text-sm mt-2">Ujung tombak pergerakan HMJ Kedokteran</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($departments as $dept)
                    <a href="{{ route('department.show', $dept->division_code) }}" wire:navigate
                        class="group p-6 bg-white dark:bg-zinc-900 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 border border-gray-100 dark:border-white/5 flex flex-col items-center text-center h-full relative overflow-hidden">

                        <div
                            class="absolute -right-4 -top-4 w-20 h-20 bg-{{ $dept->color_theme }}-500/10 rounded-full blur-2xl group-hover:bg-{{ $dept->color_theme }}-500/20 transition">
                        </div>

                        <div
                            class="w-14 h-14 rounded-full bg-{{ $dept->color_theme }}-50 dark:bg-{{ $dept->color_theme }}-900/20 text-{{ $dept->color_theme }}-600 dark:text-{{ $dept->color_theme }}-400 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition shadow-inner">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4
                            class="font-bold text-gray-800 dark:text-white text-sm group-hover:text-{{ $dept->color_theme }}-600 transition">
                            {{ $dept->division }}
                        </h4>
                        <span
                            class="text-[10px] text-gray-400 mt-2 opacity-0 group-hover:opacity-100 transition-opacity uppercase tracking-wider">Lihat
                            Detail <i class="fas fa-chevron-right ml-1"></i></span>
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</div>
