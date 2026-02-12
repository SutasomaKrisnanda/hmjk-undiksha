<x-filament-panels::page>

    {{ $this->form }}

    <div class="mt-6 flex justify-end gap-x-3">
        <x-filament::button wire:click="save" class="w-full md:w-auto">
            Simpan Perubahan
        </x-filament::button>
    </div>
</x-filament-panels::page>
