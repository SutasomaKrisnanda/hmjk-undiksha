<footer class="relative z-20 pt-16 pb-8 border-t-4 bg-gray-900 text-white border-hmj-purple dark:bg-[#050505] dark:border-white/10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-4 mb-6">
                    <img src="{{ asset('images/logo.png') }}"
                         alt="Logo HMJ Kedokteran"
                         class="h-16 w-auto object-contain">

                    <div>
                        <h3 class="font-bold text-xl font-serif leading-none">HMJ KEDOKTERAN</h3>
                        <p class="text-xs tracking-[0.2em] opacity-70 mt-1">UNDIKSHA</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-md">
                    Organisasi kemahasiswaan resmi yang berdedikasi untuk mencetak kader kesehatan unggul, berkarakter, dan inovatif di lingkungan FK Undiksha.
                </p>
            </div>

            <div>
                <h4 class="text-sm font-bold uppercase tracking-widest mb-6 border-b border-gray-700 pb-2 inline-block text-purple-400">Tautan Cepat</h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="{{ route('infosphere') }}" class="hover:text-white transition">InfoSphere (Struktur)</a></li>
                    <li><a href="#" class="hover:text-white transition">Program Kerja</a></li>
                    <li><a href="/admin" class="hover:text-white transition text-hmj-gold">Login Admin</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-bold uppercase tracking-widest mb-6 border-b border-gray-700 pb-2 inline-block text-purple-400">Kontak</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-purple-500"></i>
                        <span>Jl. Udayana No. 11, Banjar Tegal, Singaraja, Bali 81116</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-3 text-purple-500"></i>
                        <span>hmjkedokteran@undiksha.ac.id</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
            <p>&copy; 2026 HMJ Kedokteran Undiksha. All Rights Reserved.</p>
            <div class="mt-4 md:mt-0 flex items-center gap-2">
                <span class="opacity-50">Made with ❤️ by</span>
                <span class="font-bold text-gray-300">KOMNASINFO</span>
            </div>
        </div>
    </div>
</footer>
