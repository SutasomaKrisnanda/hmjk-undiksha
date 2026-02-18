<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

new #[Layout('components.layouts.web')] class extends Component {
    #[Rule('required|min:3')]
    public $name = '';

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required|min:5')]
    public $subject = '';

    #[Rule('required|min:10')]
    public $message = '';

    public $successMessage = '';

    public function sendMessage()
    {
        $this->validate();

        // Di sini nanti bisa tambahkan logika kirim email via Laravel Mail
        // Mail::to('hmjkedokteran@undiksha.ac.id')->send(...);

        // Simulasi delay agar terasa prosesnya
        sleep(1);

        $this->successMessage = 'Terima kasih! Pesan Anda telah kami terima.';
        $this->reset(['name', 'email', 'subject', 'message']);
    }
};
?>

<div class="min-h-screen bg-gray-50 dark:bg-black font-sans transition-colors duration-500">

    <section class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-fixed"
            style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop');">
        </div>

        <div
            class="absolute inset-0 bg-linear-to-r from-hmj-purple/90 to-blue-900/80 dark:from-black/90 dark:to-purple-900/80 mix-blend-multiply">
        </div>

        <div class="relative z-10 text-center text-white px-4">
            <span
                class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-xs font-bold tracking-widest uppercase mb-4 animate-bounce-slow">
                Layanan Informasi
            </span>
            <h1 class="text-4xl md:text-6xl font-bold font-serif mb-4 drop-shadow-2xl tracking-wide">
                Hubungi Kami
            </h1>
            <p class="text-lg text-gray-200 font-light max-w-2xl mx-auto opacity-90">
                Sinergi komunikasi untuk kemajuan bersama.
            </p>
        </div>

        <div class="absolute bottom-0 left-0 right-0 h-16 bg-linear-to-t from-gray-50 dark:from-black to-transparent">
        </div>
    </section>

    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 relative z-20">

        <div
            class="bg-white dark:bg-zinc-900 rounded-3xl shadow-2xl overflow-hidden border border-gray-100 dark:border-white/10 flex flex-col lg:flex-row">

            <div
                class="w-full lg:w-5/12 bg-hmj-purple dark:bg-zinc-800 text-white p-8 md:p-12 relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-white/10 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 rounded-full bg-hmj-gold/20 blur-3xl pointer-events-none">
                </div>

                <h3 class="text-2xl font-bold font-serif mb-8 relative z-10 border-b border-white/20 pb-4 inline-block">
                    Informasi Kontak
                </h3>

                <div class="space-y-8 relative z-10">
                    <div class="flex items-start gap-4 group">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 group-hover:bg-hmj-gold group-hover:text-hmj-purple flex items-center justify-center shrink-0 transition-all duration-300">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Sekretariat</h4>
                            <p class="text-white/80 text-sm leading-relaxed">
                                Kampus Tengah Undiksha,<br>
                                Jl. Udayana No. 11, Singaraja,<br>
                                Bali, Indonesia 81116
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 group-hover:bg-hmj-gold group-hover:text-hmj-purple flex items-center justify-center shrink-0 transition-all duration-300">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Email Resmi</h4>
                            <a href="mailto:hmjkedokteranundiksha25@gmail.com"
                                class="text-white/80 text-sm hover:text-hmj-gold transition break-all">
                                hmjkedokteranundiksha25@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="pt-6">
                        <h4 class="font-bold text-sm uppercase tracking-widest opacity-70 mb-4">Ikuti Kami</h4>
                        <div class="flex gap-3">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/10 hover:bg-pink-600 flex items-center justify-center transition hover:-translate-y-1">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/10 hover:bg-black flex items-center justify-center transition hover:-translate-y-1">
                                <i class="fab fa-tiktok text-lg"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white/10 hover:bg-red-600 flex items-center justify-center transition hover:-translate-y-1">
                                <i class="fab fa-youtube text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="mt-10 rounded-2xl overflow-hidden shadow-lg border border-white/20 h-48 relative z-10 grayscale hover:grayscale-0 transition duration-500">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3574.403264232479!2d115.08495447455925!3d-8.11734288123039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd19b712a315fbd%3A0xa7a81fa9fc124be5!2sFakultas%20Kedokteran%20Universitas%20Pendidikan%20Ganesha!5e1!3m2!1sid!2sid!4v1771406059032!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="w-full lg:w-7/12 p-8 md:p-12 bg-white dark:bg-zinc-900/50">

                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white font-serif mb-3">Kirim Pesan</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Punya pertanyaan atau tawaran kerjasama? Isi formulir di bawah ini.
                    </p>
                </div>

                @if ($successMessage)
                    <div
                        class="mb-8 p-4 rounded-xl bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-300 flex items-center gap-4 border border-green-200 dark:border-green-800 animate-pulse">
                        <div
                            class="w-8 h-8 rounded-full bg-green-200 dark:bg-green-800 flex items-center justify-center shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm">Berhasil!</h4>
                            <p class="text-xs opacity-90">{{ $successMessage }}</p>
                        </div>
                    </div>
                @endif

                <form wire:submit="sendMessage" class="space-y-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label
                                class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Nama
                                Lengkap</label>
                            <input type="text" wire:model="name"
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-zinc-800 border border-gray-200 dark:border-zinc-700 focus:border-hmj-purple dark:focus:border-yellow-500 focus:ring-2 focus:ring-hmj-purple/20 transition outline-none dark:text-white"
                                placeholder="Nama Anda">
                            @error('name')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label
                                class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Email</label>
                            <input type="email" wire:model="email"
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-zinc-800 border border-gray-200 dark:border-zinc-700 focus:border-hmj-purple dark:focus:border-yellow-500 focus:ring-2 focus:ring-hmj-purple/20 transition outline-none dark:text-white"
                                placeholder="email@contoh.com">
                            @error('email')
                                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label
                            class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Perihal</label>
                        <select wire:model="subject"
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-zinc-800 border border-gray-200 dark:border-zinc-700 focus:border-hmj-purple dark:focus:border-yellow-500 focus:ring-2 focus:ring-hmj-purple/20 transition outline-none dark:text-white">
                            <option value="">Pilih Tujuan Pesan</option>
                            <option value="Kerjasama">Penawaran Kerjasama (Partnership)</option>
                            <option value="Media">Media Partner</option>
                            <option value="Akademik">Informasi Akademik</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        @error('subject')
                            <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label
                            class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Pesan</label>
                        <textarea wire:model="message" rows="5"
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-zinc-800 border border-gray-200 dark:border-zinc-700 focus:border-hmj-purple dark:focus:border-yellow-500 focus:ring-2 focus:ring-hmj-purple/20 transition outline-none dark:text-white resize-none"
                            placeholder="Tuliskan pesan lengkap Anda disini..."></textarea>
                        @error('message')
                            <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="group w-full md:w-auto px-8 py-4 bg-gray-900 dark:bg-white text-white dark:text-black font-bold rounded-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed">

                            <span wire:loading.remove>Kirim Pesan</span>
                            <span wire:loading>Mengirim...</span>

                            <i wire:loading.remove
                                class="fas fa-paper-plane group-hover:translate-x-1 transition-transform text-sm"></i>

                            <svg wire:loading class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </section>
</div>
