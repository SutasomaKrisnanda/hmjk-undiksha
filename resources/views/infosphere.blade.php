<?php
// DATA REAL KEPENGURUSAN HMJ KEDOKTERAN 2026
// Sumber: Data Kepengurusan HMJ Kedokteran 2026.docx

$dekanat = [
    'pelindung' => 'Prof. Dr. Ahmad Djojosugito, dr., SpB.OT., MHA., MBA., FICS(orth).',
    'penanggung_jawab_1' => 'dr. I Putu Suriyasa, M.S., PKK., SP.OK.',
    'penanggung_jawab_2' => 'Dr. dr. Ni Luh Kadek Alit Arsani, S. Ked., M. Biomed.',
    'penanggung_jawab_3' => 'Dr. dr. Made Budiawan, S.Ked., M.Kes., AIFO.',
    'pembimbing' => 'dr. Ida Ayu Diah Purnama Sari, Sp.KK.'
];

$bph = [
    'ketua' => 'Masayu Adithi Shivadevi',
    'wakil' => 'Pradipta Meida Anggraini',
    'sekretaris_1' => 'Cokorda Istri Bintang Kusuma Dewi',
    'sekretaris_2' => 'Ni Putu Cecilia Purnantari Putri',
    'bendahara_1' => 'Luh Panca Chaira Prasetya',
    'bendahara_2' => 'Ni Luh Deha Vania'
];

$departemen = [
    [
        'id' => 'bidang_1',
        'nama' => 'Pendidikan dan Profesi',
        'deskripsi' => 'Bertanggung jawab dalam pengembangan akademik, profesi, dan iklim ilmiah mahasiswa kedokteran.',
        'icon' => 'fa-user-graduate',
        'color' => 'blue',
        'kabid' => 'Luh Ayu Sri Kirana Putri Suryawan',
        'sekretaris' => 'Rizqy Evandi',
        'anggota' => [
            'Ngakan Putu Ngurah Raditya Indrasta', 'Ni Kadek Widiantari', 'Ni Made Ayu Mas Utari',
            'I Putu Nanda Widya Merta', 'Ni Luh Gede Harum Cempaka Dewi', 'Luh Putu Nadia Mayurika Pragyawati Adnyana',
            'Ni Kadek Delanita Mahardani', 'Komang Cistasari Damayanti Dena', 'Gede Widia',
            'Kadek Dinda Badrawati', 'Putu Nadya Hapsari', 'I Dewa Gede Rama Jaya Winata',
            'Timbul Fresli Simbolon', 'Made Keyza Prema Adriyani', 'I Made Krisna Adi Putra Arthayasa'
        ]
    ],
    [
        'id' => 'bidang_2',
        'nama' => 'Pengembangan SDM (PSDM)',
        'deskripsi' => 'Berfokus pada kaderisasi, pengembangan soft skill, dan peningkatan kualitas sumber daya manusia.',
        'icon' => 'fa-users-cog',
        'color' => 'indigo',
        'kabid' => 'I Komang Rezza Kurnia Utama',
        'sekretaris' => 'Ida Bagus Gede Widyasmara Bawa',
        'anggota' => [
            'I Putu Adiarta', 'Made Nadia Paramitha Arisanti', 'Syifa Rahmi Maulida',
            'I Putu Agus Pradnya Mulia Mahottama', 'Ni Putu Laura Patricia Dinanda', 'Riqqah Fadhilah',
            'Dewa Made Putra Daniswara', 'Wulan Rachmania Putri', 'Chrismy Glori Putri Situmorang'
        ]
    ],
    [
        'id' => 'bidang_3',
        'nama' => 'Kesejahteraan Mahasiswa (KESMA)',
        'deskripsi' => 'Menampung aspirasi dan mengupayakan kesejahteraan serta advokasi bagi seluruh mahasiswa.',
        'icon' => 'fa-heart',
        'color' => 'pink',
        'kabid' => 'St. Qamariatul Kibitiah',
        'sekretaris' => 'I Gede Wedhana Putrajaya',
        'anggota' => [
            'Putu Marsya Febi Sabrina Putri', 'Tri Widia Pangestu', 'Intan Shabrina Hidayat',
            'Tarisa Ayu Bimantari', 'Komang Cindy Puspita Dewi', 'Qonitaturrahmah Rosadi',
            'I Gusti Ngurah Bagus Vivekananda', 'Bifta Khusnul Huwaida', 'I Kadek Rico Wirastika Dana'
        ]
    ],
    [
        'id' => 'bidang_4',
        'nama' => 'Pengabdian Masyarakat (PENGMAS)',
        'deskripsi' => 'Wujud nyata Tri Dharma Perguruan Tinggi melalui pelayanan kesehatan langsung kepada masyarakat.',
        'icon' => 'fa-hand-holding-heart',
        'color' => 'green',
        'kabid' => 'Komang Intan Ananda Yasdiana',
        'sekretaris' => 'Prameswari Putri Azmi',
        'anggota' => [
            'I Gusti Agung Ayu Shinta Aulia Kusuma Putri', 'Shafira Nazwa Aura Sandi', 'Menida Honora Arwen',
            'Komang Mayda Tri Lestari', 'Putu Abhi Agastya', 'I Gusti Ayu Praba Mayani',
            'Made Maitry Asrithya Dewi', 'I Gusti Agung Ayu Dyah Maharani', 'Sahilatul Maqsudah',
            'Ketut Risa Andayani', 'I Wayan Prasetya Darmayasa'
        ]
    ],
    [
        'id' => 'bidang_5',
        'nama' => 'Komunikasi & Informasi (KOMINFO)',
        'deskripsi' => 'Gerbang informasi utama, branding organisasi, dan pengelolaan media kreatif.',
        'icon' => 'fa-satellite-dish',
        'color' => 'cyan',
        'kabid' => 'Nafisah Ilmi Handayani',
        'sekretaris' => 'I Gede Arya Krisnanda Sutasoma',
        'anggota' => [
            'I Wayan Natha Wiguna', 'Zahra Ramadhani Ahmad', 'William Troy Geavin Liem',
            'Dewa Ayu Nanda Pratiwi', 'Muhammad Alvin Latahzan', 'NM. Arkia Mahadewi Abhivandini Tangkas',
            'Dewa Ayu Ary Indah Maharani', 'Komang Davin Guswina Merta', 'Ni Made Tara Svanendri Mahadewi Suputra'
        ]
    ],
    [
        'id' => 'bidang_6',
        'nama' => 'Internal & Eksternal (INT-EKS)',
        'deskripsi' => 'Menjaga harmonisasi internal pengurus serta membangun relasi strategis dengan pihak eksternal.',
        'icon' => 'fa-network-wired',
        'color' => 'yellow', // Gold
        'kabid' => 'Ketut Sindy Dewantari',
        'sekretaris' => 'Silvia Sekar Malikha',
        'anggota' => [
            'Desta Carolin Manao', 'Keishia Angelica Salim', 'Putu Bagus Pranava Githananda',
            'Komang Wahyu Pramana Sanjaya', 'I Kadek Giriana Arwiwa Dinata', 'Ni Made Divasya Varta',
            'Kadek Maharani Putri', 'Ida Ayu Narasvari Sanjivani Singarsa', 'Ni Made Aiswarama Uttamaningdyah'
        ]
    ],
    [
        'id' => 'bidang_7',
        'nama' => 'Probabilitas & Dana Usaha (DANUS)',
        'deskripsi' => 'Mengelola aspek kewirausahaan dan pendanaan mandiri untuk menunjang kegiatan organisasi.',
        'icon' => 'fa-coins',
        'color' => 'orange',
        'kabid' => 'Achmad Nur Faizal Ghozi',
        'sekretaris' => 'Amalia Sholikah',
        'anggota' => [
            'Desak Nyoman Mirah Pratiwi', 'Arina Sabilal Haq', 'Anas Fadhill Mubarok',
            'Sri Narendra Parikesit Satria Bagaskara', 'I Gede Agus Mahadhika Prana Putra', 'Anna Puspita Ramdani',
            'Mazna Sofya Dia Resti', 'Khusnul Azizah'
        ]
    ]
];
?>

<x-layouts.web>
    <x-slot:title>
        InfoSphere - Struktur Organisasi 2026
    </x-slot>

    <section class="relative pt-32 pb-20 overflow-hidden bg-gray-50 dark:bg-zinc-950 transition-colors duration-500">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-hmj-purple/20 dark:bg-hmj-purple/30 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-hmj-blue/10 dark:bg-hmj-blue/20 rounded-full blur-[120px]"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 dark:opacity-10"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <span class="text-hmj-gold font-bold tracking-[0.3em] uppercase text-sm mb-4 block">Pusat Data Terintegrasi</span>
            <h1 class="text-5xl md:text-7xl font-bold font-serif text-gray-900 dark:text-white mb-6 transition-colors duration-300">
                INFO<span class="text-transparent bg-clip-text bg-linear-to-r from-hmj-purple to-blue-400">SPHERE</span>
            </h1>
            <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto font-light transition-colors duration-300">
                Struktur resmi dan fungsionaris Kabinet Swarnadipa Ardhana Periode 2026.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white dark:bg-gsm-dark min-h-screen transition-colors duration-500" x-data="{ activeTab: 'struktur' }">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button @click="activeTab = 'struktur'"
                    :class="activeTab === 'struktur' ? 'bg-hmj-purple text-white shadow-lg scale-105 ring-2 ring-purple-300 dark:ring-purple-900' : 'bg-gray-100 dark:bg-white/5 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-white/10'"
                    class="px-8 py-3 rounded-full font-bold transition-all duration-300">
                    <i class="fas fa-sitemap mr-2"></i> Hirarki
                </button>
                <button @click="activeTab = 'departemen'"
                    :class="activeTab === 'departemen' ? 'bg-hmj-blue text-white shadow-lg scale-105 ring-2 ring-blue-300 dark:ring-blue-900' : 'bg-gray-100 dark:bg-white/5 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-white/10'"
                    class="px-8 py-3 rounded-full font-bold transition-all duration-300">
                    <i class="fas fa-users mr-2"></i> Bidang
                </button>
                <button @click="activeTab = 'agenda'"
                    :class="activeTab === 'agenda' ? 'bg-hmj-gold text-white shadow-lg scale-105 ring-2 ring-yellow-300 dark:ring-yellow-900' : 'bg-gray-100 dark:bg-white/5 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-white/10'"
                    class="px-8 py-3 rounded-full font-bold transition-all duration-300">
                    <i class="fas fa-calendar-alt mr-2"></i> Agenda
                </button>
            </div>

            <div x-show="activeTab === 'struktur'" x-transition.opacity.duration.500ms>
                <div class="relative flex flex-col items-center gap-16">

                    <div class="flex flex-col items-center gap-6 w-full max-w-5xl border-b border-gray-200 dark:border-gray-800 pb-12 border-dashed">
                        <div class="text-center mb-2">
                            <span class="px-4 py-1 rounded-full bg-gray-100 dark:bg-gray-800 text-xs font-bold uppercase tracking-widest text-gray-500 dark:text-gray-400">Pembina & Pelindung</span>
                        </div>

                        <div class="p-4 bg-purple-50 dark:bg-purple-900/20 rounded-xl border border-purple-100 dark:border-purple-500/30 text-center shadow-sm max-w-md mx-auto mb-4">
                            <h4 class="font-bold text-hmj-purple dark:text-purple-300 text-sm">{{ $dekanat['pelindung'] }}</h4>
                            <p class="text-xs text-hmj-purple/70 dark:text-purple-400 uppercase mt-1 font-bold">Pelindung (Dekan)</p>
                        </div>

                        <div class="grid md:grid-cols-4 gap-4 w-full text-center">
                             <div class="p-3 bg-gray-50 dark:bg-white/5 rounded-xl border border-gray-100 dark:border-white/5">
                                <h4 class="font-bold text-gray-800 dark:text-gray-200 text-xs">{{ $dekanat['penanggung_jawab_1'] }}</h4>
                                <p class="text-[10px] text-gray-500 uppercase mt-1">Wakil Dekan I</p>
                            </div>
                            <div class="p-3 bg-gray-50 dark:bg-white/5 rounded-xl border border-gray-100 dark:border-white/5">
                                <h4 class="font-bold text-gray-800 dark:text-gray-200 text-xs">{{ $dekanat['penanggung_jawab_2'] }}</h4>
                                <p class="text-[10px] text-gray-500 uppercase mt-1">Wakil Dekan II</p>
                            </div>
                            <div class="p-3 bg-gray-50 dark:bg-white/5 rounded-xl border border-gray-100 dark:border-white/5">
                                <h4 class="font-bold text-gray-800 dark:text-gray-200 text-xs">{{ $dekanat['penanggung_jawab_3'] }}</h4>
                                <p class="text-[10px] text-gray-500 uppercase mt-1">Wakil Dekan III</p>
                            </div>
                            <div class="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-xl border border-blue-100 dark:border-blue-500/30">
                                <h4 class="font-bold text-blue-800 dark:text-blue-300 text-xs">{{ $dekanat['pembimbing'] }}</h4>
                                <p class="text-[10px] text-blue-600 dark:text-blue-400 uppercase mt-1 font-bold">Pembimbing</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-full max-w-4xl">
                        <div class="absolute inset-0 pointer-events-none flex justify-center">
                            <div class="w-0.5 h-full bg-gray-200 dark:bg-gray-800"></div>
                        </div>

                        <div class="relative z-10 flex flex-col items-center gap-10 mb-12">
                            <div class="w-72 p-6 bg-white dark:bg-gsm-surface rounded-2xl shadow-xl border-t-4 border-hmj-gold text-center relative group hover:-translate-y-2 transition duration-300 ring-1 ring-gray-100 dark:ring-white/5">
                                <div class="w-24 h-24 mx-auto rounded-full overflow-hidden mb-4 border-4 border-hmj-gold p-1 bg-white">
                                    <img src="https://i.pravatar.cc/300?u={{ urlencode($bph['ketua']) }}" class="w-full h-full rounded-full object-cover">
                                </div>
                                <h3 class="font-bold text-xl font-serif text-gray-900 dark:text-white">{{ $bph['ketua'] }}</h3>
                                <p class="text-hmj-gold text-xs font-bold uppercase tracking-widest mt-1">Ketua Himpunan</p>
                            </div>

                            <div class="w-64 p-5 bg-white dark:bg-gsm-surface rounded-xl shadow-lg border-l-4 border-hmj-purple text-center relative hover:scale-105 transition">
                                <div class="w-16 h-16 mx-auto rounded-full overflow-hidden mb-3 bg-gray-200">
                                     <img src="https://i.pravatar.cc/300?u={{ urlencode($bph['wakil']) }}" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-lg text-gray-900 dark:text-white">{{ $bph['wakil'] }}</h4>
                                <p class="text-gray-500 text-xs uppercase font-bold">Wakil Ketua</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10">
                            <div class="space-y-4">
                                <div class="p-4 bg-white dark:bg-gsm-surface rounded-xl shadow-md border-l-4 border-hmj-blue text-left flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 overflow-hidden shrink-0">
                                         <img src="https://i.pravatar.cc/300?u={{ urlencode($bph['sekretaris_1']) }}" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm text-gray-900 dark:text-white line-clamp-1">{{ $bph['sekretaris_1'] }}</h4>
                                        <p class="text-[10px] text-gray-500 uppercase">Sekretaris I</p>
                                    </div>
                                </div>
                                <div class="p-4 bg-white dark:bg-gsm-surface rounded-xl shadow-md border-l-4 border-hmj-blue text-left flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 overflow-hidden shrink-0">
                                         <img src="https://i.pravatar.cc/300?u={{ urlencode($bph['sekretaris_2']) }}" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm text-gray-900 dark:text-white line-clamp-1">{{ $bph['sekretaris_2'] }}</h4>
                                        <p class="text-[10px] text-gray-500 uppercase">Sekretaris II</p>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="p-4 bg-white dark:bg-gsm-surface rounded-xl shadow-md border-r-4 border-green-500 text-right flex flex-row-reverse items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 overflow-hidden shrink-0">
                                         <img src="https://i.pravatar.cc/300?u={{ urlencode($bph['bendahara_1']) }}" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm text-gray-900 dark:text-white line-clamp-1">{{ $bph['bendahara_1'] }}</h4>
                                        <p class="text-[10px] text-gray-500 uppercase">Bendahara I</p>
                                    </div>
                                </div>
                                <div class="p-4 bg-white dark:bg-gsm-surface rounded-xl shadow-md border-r-4 border-green-500 text-right flex flex-row-reverse items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 overflow-hidden shrink-0">
                                         <img src="https://i.pravatar.cc/300?u={{ urlencode($bph['bendahara_2']) }}" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm text-gray-900 dark:text-white line-clamp-1">{{ $bph['bendahara_2'] }}</h4>
                                        <p class="text-[10px] text-gray-500 uppercase">Bendahara II</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full pt-12 mt-8 border-t border-dashed border-gray-200 dark:border-white/10">
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-3">
                            @foreach($departemen as $dept)
                            <button @click="activeTab = 'departemen'; document.getElementById('{{ $dept['id'] }}').scrollIntoView({behavior: 'smooth', block: 'center'})"
                                class="p-3 rounded-lg text-center hover:bg-gray-50 dark:hover:bg-white/5 transition cursor-pointer border border-transparent hover:border-{{ $dept['color'] }}-500 group flex flex-col items-center h-full justify-start">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center text-{{ $dept['color'] }}-500 bg-{{ $dept['color'] }}-50 dark:bg-{{ $dept['color'] }}-900/30 mb-2 group-hover:scale-110 transition">
                                    <i class="fas {{ $dept['icon'] }}"></i>
                                </div>
                                <h5 class="text-[10px] font-bold text-gray-800 dark:text-gray-200 leading-tight">{{ $dept['nama'] }}</h5>
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'departemen'" x-transition.opacity.duration.500ms style="display: none;">
                <div class="grid md:grid-cols-2 gap-8">
                    @foreach($departemen as $dept)
                    <div id="{{ $dept['id'] }}" class="bg-white dark:bg-gsm-surface rounded-2xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/5 group hover:border-{{ $dept['color'] }}-500/50 transition duration-300 flex flex-col h-full scroll-mt-28">
                        <div class="h-24 bg-linear-to-r from-{{ $dept['color'] }}-600 to-{{ $dept['color'] }}-400 p-6 relative">
                            <div class="absolute -bottom-6 left-6 w-14 h-14 bg-white dark:bg-gsm-surface rounded-xl flex items-center justify-center text-2xl text-{{ $dept['color'] }}-600 shadow-lg group-hover:rotate-12 transition duration-500">
                                <i class="fas {{ $dept['icon'] }}"></i>
                            </div>
                            <div class="absolute top-4 right-4 text-white/20 text-5xl">
                                <i class="fas {{ $dept['icon'] }}"></i>
                            </div>
                        </div>

                        <div class="pt-10 px-6 pb-8 grow">
                            <h3 class="text-lg font-bold font-serif mb-1 dark:text-white group-hover:text-{{ $dept['color'] }}-500 transition">{{ $dept['nama'] }}</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-xs mb-6 leading-relaxed">{{ $dept['deskripsi'] }}</p>

                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4 border-b border-gray-100 dark:border-white/5 pb-4">
                                    <div>
                                        <p class="text-[10px] uppercase text-{{ $dept['color'] }}-600 dark:text-{{ $dept['color'] }}-400 font-bold tracking-wider mb-1">Kepala Bidang</p>
                                        <div class="flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                                 <img src="https://i.pravatar.cc/300?u={{ urlencode($dept['kabid']) }}" class="w-full h-full object-cover">
                                            </div>
                                            <p class="text-xs font-bold text-gray-800 dark:text-gray-200 leading-tight line-clamp-2">{{ $dept['kabid'] }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase text-gray-400 font-bold tracking-wider mb-1">Sekretaris</p>
                                        <div class="flex items-center gap-2">
                                             <div class="w-6 h-6 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                                  <img src="https://i.pravatar.cc/300?u={{ urlencode($dept['sekretaris']) }}" class="w-full h-full object-cover">
                                             </div>
                                            <p class="text-xs font-semibold text-gray-800 dark:text-gray-200 leading-tight line-clamp-2">{{ $dept['sekretaris'] }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-[10px] uppercase text-gray-400 font-bold tracking-wider mb-2">Staff / Anggota ({{ count($dept['anggota']) }})</p>
                                    <ul class="grid grid-cols-1 gap-y-1.5">
                                        @foreach($dept['anggota'] as $member)
                                        <li class="flex items-start gap-2 text-xs text-gray-600 dark:text-gray-300">
                                            <i class="fas fa-circle text-[4px] mt-1.5 text-{{ $dept['color'] }}-500 shrink-0"></i>
                                            <span class="leading-tight">{{ $member }}</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div x-show="activeTab === 'agenda'" x-transition.opacity.duration.500ms style="display: none;">
                <div class="space-y-6 max-w-4xl mx-auto">
                    <div class="flex flex-col md:flex-row bg-white dark:bg-gsm-surface rounded-xl p-6 shadow-sm border-l-4 border-hmj-purple hover:shadow-md transition">
                        <div class="shrink-0 flex md:flex-col items-center gap-2 md:w-24 text-center mr-6 border-r border-gray-100 dark:border-white/5 pr-6 md:border-r-0 md:pr-0">
                            <span class="text-4xl font-bold text-gray-800 dark:text-white">14</span>
                            <span class="text-sm uppercase font-bold text-hmj-purple">FEB</span>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Pelantikan Pengurus Baru & Upgrading</h4>
                            <p class="text-sm text-gray-500 mb-3"><i class="far fa-clock mr-1"></i> 08:00 - 15:00 WITA | <i class="fas fa-map-marker-alt mr-1"></i> Auditorium FK Undiksha</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Agenda sakral serah terima jabatan, pelantikan resmi seluruh fungsionaris Kabinet Swarnadipa Ardhana periode 2026, dilanjutkan dengan sesi upgrading skill organisasi.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layouts.web>
