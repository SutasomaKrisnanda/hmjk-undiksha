<?php

use Livewire\Volt\Component;

new class extends Component {
    public $dekanat;

    public function with()
    {
        return [
            'pelindung' => $this->dekanat->first(fn($p) => str_contains($p->position, 'Pelindung') || str_contains($p->position, 'Dekan') && !str_contains($p->position, 'Wakil')),
            'wd1' => $this->dekanat->first(fn($p) => str_contains($p->position, 'Wakil Dekan I') && !str_contains($p->position, 'III') && !str_contains($p->position, 'II')),
            'wd2' => $this->dekanat->first(fn($p) => str_contains($p->position, 'Wakil Dekan II')),
            'wd3' => $this->dekanat->first(fn($p) => str_contains($p->position, 'Wakil Dekan III')),
            'pembimbing' => $this->dekanat->first(fn($p) => str_contains($p->position, 'Pembimbing')),
            'dummyPhoto' => 'https://placehold.co/300x400/e2e8f0/64748b?text=FOTO+3x4',
        ];
    }
};
?>

<div class="mb-24">
    <div class="text-center mb-10">
        <flux:heading level="2" size="lg" class="uppercase tracking-widest text-gray-400">
            Pelindung & Pembina
        </flux:heading>
    </div>

    <div class="flex flex-col items-center relative z-10 max-w-4xl mx-auto">

        @if($pelindung)
        <div class="relative z-20 mb-10 group">
            <flux:card class="w-60 flex flex-col items-center text-center p-4! border-t-4 border-t-yellow-500! hover:-translate-y-1 transition duration-300">
                <div class="w-full aspect-3/4 mb-3 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">
                    <img src="{{ $dummyPhoto }}"
                         class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                </div>

                <flux:heading size="base" class="leading-tight mb-1 font-bold">{{ $pelindung->name }}</flux:heading>
                <flux:badge color="yellow" size="xs" inset="top bottom" class="font-bold">{{ $pelindung->position }}</flux:badge>
            </flux:card>

            <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-full h-10 w-px bg-gray-400 dark:bg-zinc-600"></div>
        </div>
        @endif

        <div class="relative z-10 w-full">
            <div class="absolute top-0 left-[16.66%] right-[16.66%] h-6 border-t border-l border-r border-gray-400 dark:border-zinc-600 rounded-t-lg pointer-events-none hidden md:block"></div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2 h-6 w-px bg-gray-400 dark:bg-zinc-600 hidden md:block"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-4 relative mt-3">

                <div class="flex flex-col items-center relative group">
                    @if($wd1)
                    <flux:card class="w-48 flex flex-col items-center text-center p-3! border-t-4 border-t-blue-500! hover:-translate-y-1 transition duration-300 relative z-20">
                        <div class="w-full aspect-3/4 mb-2 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800">
                            <img src="{{ $dummyPhoto }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                        </div>
                        <flux:heading size="sm" class="leading-tight mb-1 font-bold">{{ $wd1->name }}</flux:heading>
                        <flux:badge color="blue" size="xs" inset="top bottom">{{ $wd1->position }}</flux:badge>
                    </flux:card>

                    <div class="absolute top-full left-1/2 w-[150%] h-12 border-l border-b border-dashed border-gray-400 dark:border-zinc-600 rounded-bl-2xl -z-10 hidden md:block"></div>
                    @endif
                </div>

                <div class="flex flex-col items-center relative group">
                    @if($wd2)
                    <flux:card class="w-48 flex flex-col items-center text-center p-3! border-t-4 border-t-blue-500! hover:-translate-y-1 transition duration-300 relative z-20">
                        <div class="w-full aspect-3/4 mb-2 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800">
                            <img src="{{ $dummyPhoto }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                        </div>
                        <flux:heading size="sm" class="leading-tight mb-1 font-bold">{{ $wd2->name }}</flux:heading>
                        <flux:badge color="blue" size="xs" inset="top bottom">{{ $wd2->position }}</flux:badge>
                    </flux:card>

                    <div class="absolute top-full left-1/2 -translate-x-1/2 h-12 w-px border-l border-dashed border-gray-400 dark:border-zinc-600 -z-10 hidden md:block"></div>
                    @endif
                </div>

                <div class="flex flex-col items-center relative group">
                    @if($wd3)
                    <flux:card class="w-48 flex flex-col items-center text-center p-3! border-t-4 border-t-blue-500! hover:-translate-y-1 transition duration-300 relative z-20">
                        <div class="w-full aspect-3/4 mb-2 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800">
                            <img src="{{ $dummyPhoto }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                        </div>
                        <flux:heading size="sm" class="leading-tight mb-1 font-bold">{{ $wd3->name }}</flux:heading>
                        <flux:badge color="blue" size="xs" inset="top bottom">{{ $wd3->position }}</flux:badge>
                    </flux:card>

                    <div class="absolute top-full right-1/2 w-[106.5%] h-12 border-r border-b border-solid border-gray-800 dark:border-zinc-400 rounded-br-2xl -z-10 hidden md:block"></div>
                    @endif
                </div>

            </div>
        </div>

        @if($pembimbing)
        <div class="relative z-10 mt-12 group">
            <div class="absolute left-1/2 -translate-x-1/2 h-4 w-px bg-gray-800 dark:bg-zinc-400 hidden md:block"></div>

            <flux:card class="w-48 flex flex-col items-center text-center p-3! border-t-4 border-t-purple-500! hover:-translate-y-1 transition duration-300 mt-4">
                <div class="w-full aspect-3/4 mb-2 overflow-hidden rounded-md bg-gray-100 dark:bg-zinc-800">
                    <img src="{{ $dummyPhoto }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500">
                </div>
                <flux:heading size="sm" class="leading-tight mb-1 font-bold">{{ $pembimbing->name }}</flux:heading>
                <flux:badge color="purple" size="xs" inset="top bottom">{{ $pembimbing->position }}</flux:badge>
            </flux:card>

            <div class="mt-6 hidden md:flex justify-center gap-6 text-[9px] uppercase font-bold text-gray-400">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-px bg-gray-800 dark:bg-zinc-400"></div> Komando
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-6 h-px border-t border-dashed border-gray-400 dark:border-zinc-500"></div> Koordinasi
                </div>
            </div>
        </div>
        @endif

    </div>
</div>
