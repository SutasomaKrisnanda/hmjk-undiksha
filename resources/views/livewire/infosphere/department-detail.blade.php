<?php

use Livewire\Volt\Component;
use App\Models\Department;
use App\Models\Structure;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;

new #[Layout('components.layouts.web')] class extends Component {
    public Department $department;

    public function mount($code)
    {
        $this->department = Department::where('slug', $code)->firstOrFail();
    }

    public function with()
    {
        $query = Structure::where('division_code', $this->department->slug);

        return [
            'kabid' => (clone $query)->where(fn($q) =>
                $q->where('position', 'LIKE', '%Kepala%')->orWhere('position', 'LIKE', '%Ketua%')
            )->first(),

            'sekbid' => (clone $query)->where('position', 'LIKE', '%Sekretaris%')->first(),

            'benbid' => (clone $query)->where('position', 'LIKE', '%Bendahara%')->first(),

            'staffs' => (clone $query)
                ->where('position', 'NOT LIKE', '%Kepala%')
                ->where('position', 'NOT LIKE', '%Ketua%')
                ->where('position', 'NOT LIKE', '%Sekretaris%')
                ->where('position', 'NOT LIKE', '%Bendahara%')
                ->orderBy('name')
                ->get(),
        ];
    }

    public function getPhoto($person)
    {
        return ($person && $person->photo)
            ? Storage::url($person->photo)
            : 'https://placehold.co/300x400/e2e8f0/64748b?text=FOTO';
    }
};
?>

<div class="min-h-screen bg-gray-50 dark:bg-black font-sans">

    <section class="relative pt-32 pb-16 overflow-hidden bg-cover bg-center transition-all"
             style="{{ $department->banner ? 'background-image: url(' . Storage::url($department->banner) . ');' : 'background-color: ' . $department->color_theme . ';' }}">

        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-gray-50 dark:to-black"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center text-white">
            <div class="mb-6">
                <a href="{{ route('structure.index') }}" wire:navigate
                   class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-white/80 hover:text-white transition">
                    <i class="fas fa-arrow-left"></i> Kembali ke Struktur
                </a>
            </div>

            <div class="w-20 h-20 md:w-24 md:h-24 mx-auto mb-4 rounded-full bg-white p-1 shadow-2xl relative">
                @if($department->logo)
                    <img src="{{ Storage::url($department->logo) }}" class="w-full h-full object-cover rounded-full">
                @else
                    <div class="w-full h-full rounded-full flex items-center justify-center text-3xl"
                         style="color: {{ $department->color_theme }}">
                        <i class="fas fa-users"></i>
                    </div>
                @endif
            </div>

            <h1 class="text-3xl md:text-5xl font-bold font-serif mb-2 drop-shadow-md tracking-wide">
                {{ $department->name }}
            </h1>
            <p class="text-white/80 uppercase tracking-[0.2em] text-xs md:text-sm">Kabinet Swarnadipa Ardhana</p>
        </div>
    </section>

    <section class="py-16 relative">
        <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/graphy.png')]"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">

                @if($kabid)
                <flux:card class="flex flex-row items-center gap-5 !p-4 hover:-translate-y-1 transition duration-300 border-l-4"
                           style="border-left-color: {{ $department->color_theme }};">

                    <div class="w-24 shrink-0 aspect-[3/4] overflow-hidden rounded-lg bg-gray-100 dark:bg-zinc-800">
                        <img src="{{ $this->getPhoto($kabid) }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                    </div>

                    <div class="flex flex-col justify-center">
                        <flux:heading size="lg" class="leading-tight mb-1 font-bold">{{ $kabid->name }}</flux:heading>
                        <span class="text-sm font-bold uppercase tracking-wider"
                              style="color: {{ $department->color_theme }};">
                            {{ $kabid->position }}
                        </span>
                    </div>
                </flux:card>
                @endif

                @if($sekbid)
                <flux:card class="flex flex-row items-center gap-5 !p-4 hover:-translate-y-1 transition duration-300 border-l-4"
                           style="border-left-color: {{ $department->color_theme }};">
                    <div class="w-24 shrink-0 aspect-[3/4] overflow-hidden rounded-lg bg-gray-100 dark:bg-zinc-800">
                        <img src="{{ $this->getPhoto($sekbid) }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <div class="flex flex-col justify-center">
                        <flux:heading size="lg" class="leading-tight mb-1 font-bold">{{ $sekbid->name }}</flux:heading>
                        <span class="text-sm font-bold uppercase tracking-wider"
                              style="color: {{ $department->color_theme }};">
                            {{ $sekbid->position }}
                        </span>
                    </div>
                </flux:card>
                @endif

                @if($benbid)
                <flux:card class="flex flex-row items-center gap-5 !p-4 hover:-translate-y-1 transition duration-300 border-l-4 md:col-span-2 md:w-1/2 md:mx-auto"
                           style="border-left-color: {{ $department->color_theme }};">
                    <div class="w-24 shrink-0 aspect-[3/4] overflow-hidden rounded-lg bg-gray-100 dark:bg-zinc-800">
                        <img src="{{ $this->getPhoto($benbid) }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <div class="flex flex-col justify-center">
                        <flux:heading size="lg" class="leading-tight mb-1 font-bold">{{ $benbid->name }}</flux:heading>
                        <span class="text-sm font-bold uppercase tracking-wider"
                              style="color: {{ $department->color_theme }};">
                            {{ $benbid->position }}
                        </span>
                    </div>
                </flux:card>
                @endif

            </div>

            @if($staffs->count() > 0)
            <div class="pt-10 border-t border-dashed border-gray-200 dark:border-white/10">
                <div class="text-center mb-10">
                    <span class="inline-block px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest text-gray-500 bg-gray-100 dark:bg-zinc-800">
                        Staff & Anggota
                    </span>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6 justify-center">
                    @foreach($staffs as $staff)
                    <div class="group h-full">
                        <flux:card class="flex flex-col items-center text-center !p-3 hover:-translate-y-1 transition duration-300 h-full border-t-2 shadow-sm hover:shadow-md"
                                   style="border-top-color: {{ $department->color_theme }}80">

                            <div class="w-full aspect-[3/4] mb-2 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800">
                                <img src="{{ $this->getPhoto($staff) }}"
                                     class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                            </div>

                            <h4 class="text-xs md:text-sm font-bold leading-tight mb-1 text-gray-800 dark:text-gray-200">
                                {{ $staff->name }}
                            </h4>
                        </flux:card>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </section>
</div>
