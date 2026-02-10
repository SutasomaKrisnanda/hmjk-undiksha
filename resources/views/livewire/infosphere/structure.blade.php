<?php

use Livewire\Volt\Component;
use App\Models\Structure;
use Livewire\Attributes\Layout; // Import atribut layout

new
#[Layout('components.layouts.web')]
class extends Component {
    public function with()
    {
        return [
            'dekanat' => Structure::where('division', 'Dekanat')->orderBy('id')->get(),
            'bph' => Structure::where('division', 'BPH')->orderBy('order_level')->get(),
            // Ambil daftar bidang untuk menu navigasi ke halaman detail
            'departments' => Structure::whereNotNull('division_code')
                ->select('division', 'division_code', 'color_theme')
                ->distinct()
                ->get()
        ];
    }
};
?>

<div class="min-h-screen bg-gray-50 dark:bg-black font-sans">

    <section class="relative pt-32 pb-20 overflow-hidden bg-hmj-purple dark:bg-zinc-900 transition-colors duration-500">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center text-white">
            <span class="text-yellow-400 font-bold tracking-[0.3em] uppercase text-sm mb-4 block">InfoSphere</span>
            <h1 class="text-4xl md:text-6xl font-bold font-serif mb-6">Struktur Organisasi</h1>
            <p class="text-white/80 text-lg max-w-2xl mx-auto font-light">
                Kabinet Swarnadipa Ardhana Periode 2026
            </p>
        </div>
    </section>

    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">

            <div class="mb-20">
                <div class="flex items-center justify-center gap-4 mb-10">
                    <div class="h-px bg-gray-300 w-16"></div>
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 uppercase tracking-widest">Dekanat & Pembina</h2>
                    <div class="h-px bg-gray-300 w-16"></div>
                </div>

                <div class="flex flex-wrap justify-center gap-6">
                    @foreach($dekanat as $p)
                    <div class="w-64 bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 text-center border-t-4 border-blue-500 hover:-translate-y-1 transition duration-300">
                        <h3 class="font-bold text-gray-900 dark:text-white text-sm min-h-[40px] flex items-center justify-center">{{ $p->name }}</h3>
                        <p class="text-xs text-blue-500 font-bold uppercase mt-2">{{ $p->position }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mb-20">
                <div class="flex items-center justify-center gap-4 mb-10">
                    <div class="h-px bg-gray-300 w-16"></div>
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 uppercase tracking-widest">Badan Pengurus Harian</h2>
                    <div class="h-px bg-gray-300 w-16"></div>
                </div>

                <div class="flex flex-col md:flex-row justify-center items-center gap-10 mb-10">
                    @foreach($bph->whereIn('position', ['Ketua Himpunan', 'Wakil Ketua']) as $p)
                    <div class="relative w-72 bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center border border-gray-100 dark:border-white/5 {{ $p->position == 'Ketua Himpunan' ? 'ring-2 ring-yellow-400 scale-105 z-10' : '' }}">
                         <div class="w-24 h-24 mx-auto rounded-full bg-gray-200 mb-4 overflow-hidden">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($p->name) }}&background=random" class="w-full h-full object-cover">
                         </div>
                         <h3 class="font-bold text-xl font-serif text-gray-900 dark:text-white mb-1">{{ $p->name }}</h3>
                         <p class="text-hmj-purple text-xs font-bold uppercase tracking-widest">{{ $p->position }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($bph->whereNotIn('position', ['Ketua Himpunan', 'Wakil Ketua']) as $p)
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-5 flex items-center gap-4 border-l-4 {{ str_contains($p->position, 'Sekretaris') ? 'border-purple-500' : 'border-green-500' }}">
                        <div class="w-12 h-12 rounded-full bg-gray-100 overflow-hidden shrink-0">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($p->name) }}&background=random" class="w-full h-full object-cover">
                        </div>
                        <div class="text-left">
                            <h4 class="font-bold text-sm text-gray-900 dark:text-white">{{ $p->name }}</h4>
                            <p class="text-[10px] text-gray-500 uppercase">{{ $p->position }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-24">
                <div class="text-center mb-10">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 uppercase tracking-widest">Bidang & Departemen</h2>
                    <p class="text-gray-500 text-sm mt-2">Klik untuk melihat detail anggota per bidang</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($departments as $dept)
                    <a href="{{ route('department.show', $dept->division_code) }}" wire:navigate
                       class="group p-6 bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 border border-gray-100 dark:border-white/5 flex flex-col items-center text-center h-full">
                        <div class="w-12 h-12 rounded-full bg-{{ $dept->color_theme }}-100 text-{{ $dept->color_theme }}-600 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 dark:text-white text-sm group-hover:text-{{ $dept->color_theme }}-600 transition">{{ $dept->division }}</h4>
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</div>
