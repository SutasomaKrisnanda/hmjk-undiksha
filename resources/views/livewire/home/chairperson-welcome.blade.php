<?php

use function Livewire\Volt\{state};

// Kita simpan path gambar di state agar mudah diganti jika nanti mau dibuat dinamis dari database
state(['image' => asset('images/sambutan-ketua.jpg')]);

?>

<section id="profil" class="py-24 relative bg-white dark:bg-gsm-dark transition-colors duration-500 overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10"
         x-data="{ visible: false }"
         x-intersect.once.threshold.20="visible = true">

        <div class="rounded-2xl overflow-hidden shadow-2xl bg-white dark:bg-gsm-surface dark:border dark:border-gsm-accent/20">
            <div class="grid md:grid-cols-2">

                <div class="relative h-[500px] md:h-auto bg-gray-200 dark:bg-gray-800 transition-all duration-1000 ease-out transform"
                     :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-20'">

                    <div class="absolute inset-0 w-full h-full overflow-hidden group">
                        <img src="{{ $image }}"
                             class="w-full h-full object-cover grayscale dark:grayscale-0 transition-transform duration-1500 group-hover:scale-110">
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white bg-linear-to-t from-black/90 to-transparent">
                        <h3 class="text-3xl font-bold font-serif translate-y-4 opacity-0 transition-all duration-700 delay-500"
                            :class="visible ? '!translate-y-0 !opacity-100' : ''">
                            Masayu Adithi Shivadevi
                        </h3>
                        <p class="text-sm text-hmj-gold dark:text-gsm-secondary font-bold tracking-widest uppercase translate-y-4 opacity-0 transition-all duration-700 delay-700"
                           :class="visible ? '!translate-y-0 !opacity-100' : ''">
                            Ketua Himpunan 2026
                        </p>
                    </div>
                </div>

                <div class="p-10 md:p-16 flex flex-col justify-center transition-all duration-1000 ease-out transform delay-300"
                     :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-20'">

                    <div class="mb-6">
                        <h4 class="font-bold tracking-[0.2em] text-xs uppercase mb-3 text-hmj-purple dark:text-gsm-accent">
                            Sambutan Ketua
                        </h4>
                        <h2 class="text-4xl font-bold leading-tight font-serif text-gray-900 dark:text-white">
                            Selamat Datang di <br>
                            <span class="italic font-display text-hmj-purple dark:text-gsm-secondary relative inline-block">
                                Rumah Kolaborasi Kami
                                <span class="absolute bottom-1 left-0 w-full h-2 bg-yellow-300/30 dark:bg-gsm-secondary/30 -z-10"></span>
                            </span>
                        </h2>
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 mb-8 leading-relaxed text-lg">
                        Assalamualaikum Wr. Wb. Salam sejahtera. <br><br>
                        Kabinet <b>Swarnadipa Ardhana</b> hadir bukan sekadar sebagai organisasi, tetapi sebagai
                        keluarga yang tumbuh bersama. Di era digital ini, kami meluncurkan <i>InfoSphere</i> dan
                        <i>Advo Center</i> sebagai wujud nyata pelayanan kami yang adaptif dan inklusif. Mari
                        melangkah bersama!
                    </p>

                    <div class="opacity-70 dark:opacity-100">

                        <p class="font-script text-4xl text-gray-400 dark:text-gsm-accent">Masayu A.S.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
