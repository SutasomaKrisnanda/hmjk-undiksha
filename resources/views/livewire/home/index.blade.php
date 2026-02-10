<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.web')]
class extends Component {
    // Logic PHP welcome page (jika ada)
};
?>

<div>
    <livewire:home.hero-section />

    <livewire:home.chairperson-welcome />

    <section class="py-20 bg-gray-50 dark:bg-black">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold dark:text-white">Agenda Terdekat</h2>
            <p class="text-gray-500 mt-2">Nantikan update kegiatan kami selanjutnya.</p>
        </div>
    </section>
</div>
