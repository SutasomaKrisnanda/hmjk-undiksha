<?php

use Livewire\Volt\Component;
use App\Models\Structure;
use Illuminate\Support\Facades\Storage;

new class extends Component {
    public function with()
    {
        return [
            'kahim' => Structure::where('position', 'Ketua Himpunan')->first(),
            'wakahim' => Structure::where('position', 'Wakil Ketua')->first(),
            'sekretaris' => Structure::where('division', 'Bidang Inti')
                ->where('position', 'LIKE', '%Sekretaris%')
                ->orderBy('position') // Urutkan Sek I, Sek II, dst
                ->get(),
            'bendahara' => Structure::where('division', 'Bidang Inti')
                ->where('position', 'LIKE', '%Bendahara%')
                ->orderBy('position')
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

<div class="mb-24">
    <div class="text-center mb-10">
        <flux:heading level="2" size="lg" class="uppercase tracking-widest text-hmj-purple dark:text-yellow-400">
            Bidang Inti
        </flux:heading>
    </div>

    <div class="flex flex-col items-center relative z-10 max-w-4xl mx-auto px-4">

        <div class="relative z-20 mb-6 md:mb-10 group w-full flex justify-center">
            <flux:card class="w-64 md:w-60 flex flex-col items-center text-center p-4! border-t-4 border-t-yellow-500! hover:-translate-y-1 transition duration-300">
                <div class="w-full aspect-3/4 mb-3 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">
                    <img src="{{ $this->getPhoto($kahim) }}"
                         class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                </div>

                <flux:heading size="base" class="leading-tight mb-1 font-bold">{{ $kahim?->name ?? 'Ketua' }}</flux:heading>
                <flux:badge color="yellow" size="xs" inset="top bottom" class="font-bold">Ketua Himpunan</flux:badge>
            </flux:card>

            <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-full h-10 w-px bg-gray-400 dark:bg-zinc-600"></div>
        </div>

        <div class="relative z-20 mb-6 md:mb-10 group w-full flex justify-center">
            <flux:card class="w-64 md:w-60 flex flex-col items-center text-center p-4! border-t-4 border-t-zinc-500! hover:-translate-y-1 transition duration-300">
                <div class="w-full aspect-3/4 mb-3 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">
                    <img src="{{ $this->getPhoto($wakahim) }}"
                         class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                </div>
                <flux:heading size="base" class="leading-tight mb-1 font-bold">{{ $wakahim?->name ?? 'Wakil' }}</flux:heading>
                <flux:badge color="zinc" size="xs" inset="top bottom" class="font-bold">Wakil Ketua</flux:badge>
            </flux:card>

            <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-full h-10 w-px bg-gray-400 dark:bg-zinc-600"></div>
        </div>

        <div class="relative z-10 w-full">
            <div class="hidden md:block absolute top-0 left-[25%] right-[25%] h-6 border-t border-l border-r border-gray-400 dark:border-zinc-600 rounded-t-lg pointer-events-none"></div>
            <div class="hidden md:block absolute top-0 left-1/2 -translate-x-1/2 h-6 w-px bg-gray-400 dark:bg-zinc-600"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 relative mt-0 md:mt-3 justify-items-center">

                <div class="flex flex-col items-center gap-6 w-full md:w-auto relative">
                    <div class="hidden md:block absolute -top-3 left-1/2 -translate-x-1/2 -translate-y-full">
                        <flux:badge color="purple" size="sm">SEKRETARIS</flux:badge>
                    </div>
                    <div class="md:hidden w-full text-center border-b border-gray-200 dark:border-zinc-800 pb-2 mb-2">
                        <flux:badge color="purple" size="sm">SEKRETARIS</flux:badge>
                    </div>

                    @foreach($sekretaris as $s)
                    <flux:card class="w-64 md:w-48 flex flex-col items-center text-center p-3! border-t-4 border-t-purple-500! hover:-translate-y-1 transition duration-300 relative z-20">
                        <div class="w-full aspect-3/4 mb-2 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800">
                            <img src="{{ $this->getPhoto($s) }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                        </div>
                        <flux:heading size="sm" class="leading-tight mb-1 font-bold">{{ $s->name }}</flux:heading>
                        <flux:badge color="purple" size="xs" inset="top bottom">{{ $s->position }}</flux:badge>
                    </flux:card>
                    @endforeach
                </div>

                <div class="flex flex-col items-center gap-6 w-full md:w-auto relative mt-6 md:mt-0">
                    <div class="hidden md:block absolute -top-3 left-1/2 -translate-x-1/2 -translate-y-full">
                        <flux:badge color="green" size="sm">BENDAHARA</flux:badge>
                    </div>
                    <div class="md:hidden w-full text-center border-b border-gray-200 dark:border-zinc-800 pb-2 mb-2">
                        <flux:badge color="green" size="sm">BENDAHARA</flux:badge>
                    </div>

                    @foreach($bendahara as $b)
                    <flux:card class="w-64 md:w-48 flex flex-col items-center text-center p-3! border-t-4 border-t-green-500! hover:-translate-y-1 transition duration-300 relative z-20">
                        <div class="w-full aspect-3/4 mb-2 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800">
                            <img src="{{ $this->getPhoto($b) }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                        </div>
                        <flux:heading size="sm" class="leading-tight mb-1 font-bold">{{ $b->name }}</flux:heading>
                        <flux:badge color="green" size="xs" inset="top bottom">{{ $b->position }}</flux:badge>
                    </flux:card>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
