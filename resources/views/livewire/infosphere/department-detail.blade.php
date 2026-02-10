<?php

use Livewire\Volt\Component;
use App\Models\Structure;
use Livewire\Attributes\Layout;

new
#[Layout('components.layouts.web')]
class extends Component {
    public $code;

    public function mount($code)
    {
        $this->code = $code;
    }

    public function with()
    {
        $members = Structure::where('division_code', $this->code)->get();
        $deptInfo = $members->first(); // Ambil info umum dari data pertama

        return [
            'deptName' => $deptInfo->division ?? 'Bidang Tidak Ditemukan',
            'color' => $deptInfo->color_theme ?? 'gray',
            'kabid' => $members->where('position', 'Kepala Bidang')->first(),
            'sekbid' => $members->where('position', 'Sekretaris Bidang')->first(),
            'staff' => $members->where('position', 'Anggota')
        ];
    }
};
?>

<div class="min-h-screen bg-white dark:bg-black font-sans">

    <section class="pt-32 pb-16 bg-{{ $color }}-600 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <a href="{{ route('structure.index') }}" wire:navigate class="inline-block mb-6 text-white/70 hover:text-white text-sm uppercase tracking-wider font-bold">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Struktur
            </a>
            <h1 class="text-4xl md:text-6xl font-bold font-serif mb-2">{{ $deptName }}</h1>
            <p class="text-white/80 uppercase tracking-[0.2em] text-sm">Kabinet Swarnadipa Ardhana</p>
        </div>
    </section>

    <section class="py-16 max-w-5xl mx-auto px-4">

        <div class="grid md:grid-cols-2 gap-8 mb-16">
            @if($kabid)
            <div class="bg-gray-50 dark:bg-gray-900 p-6 rounded-2xl flex items-center gap-6 border-l-4 border-{{ $color }}-500">
                <div class="w-20 h-20 rounded-full bg-gray-200 overflow-hidden shrink-0">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($kabid->name) }}" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="font-bold text-xl text-gray-900 dark:text-white">{{ $kabid->name }}</h3>
                    <p class="text-{{ $color }}-600 font-bold text-sm uppercase">Kepala Bidang</p>
                </div>
            </div>
            @endif

            @if($sekbid)
            <div class="bg-gray-50 dark:bg-gray-900 p-6 rounded-2xl flex items-center gap-6 border-l-4 border-{{ $color }}-500">
                <div class="w-20 h-20 rounded-full bg-gray-200 overflow-hidden shrink-0">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($sekbid->name) }}" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="font-bold text-xl text-gray-900 dark:text-white">{{ $sekbid->name }}</h3>
                    <p class="text-{{ $color }}-600 font-bold text-sm uppercase">Sekretaris Bidang</p>
                </div>
            </div>
            @endif
        </div>

        <h3 class="text-center font-bold text-gray-400 uppercase tracking-widest mb-8 text-sm">Staff & Anggota</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($staff as $s)
            <div class="p-4 rounded-xl border border-gray-100 dark:border-gray-800 hover:border-{{ $color }}-500 transition flex items-center gap-3">
                <div class="w-2 h-2 rounded-full bg-{{ $color }}-500"></div>
                <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">{{ $s->name }}</span>
            </div>
            @endforeach
        </div>

    </section>

</div>
