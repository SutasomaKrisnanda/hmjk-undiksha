<div
    class="hidden md:block py-2 text-xs text-white transition-colors duration-300
    bg-linear-to-r from-blue-900 to-purple-800
    dark:from-[#2a0a4d] dark:to-black border-b dark:border-white/10 relative z-50">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
        <div class="flex space-x-4">
            <span><i class="fas fa-envelope mr-2"></i>hmjkedokteranundiksha25@gmail.com</span>
            <span class="hidden md:inline"><i class="fas fa-map-marker-alt mr-2"></i>Singaraja, Bali</span>
        </div>

        <div class="flex items-center space-x-4">
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" @click.away="open = false"
                    class="flex items-center gap-1 hover:text-gray-200 transition focus:outline-none">
                    <i class="fas"
                        :class="{
                            'fa-sun': mode === 'light',
                            'fa-moon': mode === 'dark',
                            'fa-desktop': mode === 'system'
                        }"></i>
                    <span class="capitalize ml-1" x-text="mode"></span>
                    <i class="fas fa-chevron-down text-[10px] ml-1"></i>
                </button>
                <div x-show="open" x-transition
                    class="absolute right-0 mt-2 w-32 bg-white dark:bg-[#1a1a1a] rounded shadow-lg overflow-hidden z-50 text-gray-800 dark:text-gray-200 border border-gray-100 dark:border-white/10"
                    style="display: none;">
                    <button @click="setMode('light'); open = false"
                        class="w-full text-left px-4 py-2 text-xs hover:bg-gray-100 dark:hover:bg-white/10 flex items-center gap-2"><i
                            class="fas fa-sun text-yellow-500"></i> Light</button>
                    <button @click="setMode('dark'); open = false"
                        class="w-full text-left px-4 py-2 text-xs hover:bg-gray-100 dark:hover:bg-white/10 flex items-center gap-2"><i
                            class="fas fa-moon text-purple-500"></i> Dark</button>
                    <button @click="setMode('system'); open = false"
                        class="w-full text-left px-4 py-2 text-xs hover:bg-gray-100 dark:hover:bg-white/10 flex items-center gap-2"><i
                            class="fas fa-desktop text-gray-500"></i> System</button>
                </div>
            </div>
            <span class="border-l border-white/30 h-3 mx-2"></span>

            @auth
                <a href="/admin"
                    class="hover:text-green-400 transition font-bold flex items-center gap-1"><i
                        class="fas fa-user-circle"></i> Dashboard</a>
            @else
                <a href="/admin" class="hover:text-green-400 transition font-bold flex items-center gap-1"><i
                        class="fas fa-lock"></i> Login</a>
            @endauth
        </div>
    </div>
</div>

<nav x-data="{ mobileOpen: false }"
    class="sticky top-0 z-40 shadow-md transition-all duration-300 bg-white dark:bg-gsm-dark/90 dark:backdrop-blur-md dark:border-b dark:border-white/10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-20">
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="block">
                    <img src="{{ asset('images/logo.png') }}"
                         alt="Logo HMJ"
                         class="h-10 w-auto object-contain">
                </a>

                <div class="hidden md:block">
                    <h1 class="text-lg font-bold leading-none font-serif tracking-tight text-gray-900 dark:text-white">HMJ KEDOKTERAN</h1>
                    <p class="text-[10px] tracking-wider font-semibold text-gray-500 dark:text-purple-400">UNIVERSITAS PENDIDIKAN GANESHA</p>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home')
                        ? 'font-bold border-b-2 border-hmj-purple dark:border-yellow-400 text-hmj-purple dark:text-yellow-400'
                        : 'hover:text-hmj-purple dark:hover:text-purple-300 transition text-gray-700 dark:text-gray-300' }}">
                    BERANDA
                </a>

                <a href="{{ route('home') }}#profil"
                   class="hover:text-hmj-purple dark:hover:text-purple-300 transition text-gray-700 dark:text-gray-300">
                   PROFIL
                </a>

                <a href="{{ route('infosphere') }}"
                   class="{{ request()->routeIs('infosphere')
                        ? 'font-bold border-b-2 border-hmj-purple dark:border-yellow-400 text-hmj-purple dark:text-yellow-400'
                        : 'hover:text-hmj-purple dark:hover:text-purple-300 transition text-gray-700 dark:text-gray-300' }}">
                   INFOSPHERE
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button @click="mobileOpen = !mobileOpen" class="text-2xl text-gray-700 dark:text-white"><i
                        class="fas fa-bars"></i></button>
            </div>
        </div>
    </div>

    <div x-show="mobileOpen" x-transition
        class="md:hidden bg-white dark:bg-[#1a1a1a] border-t dark:border-white/10 px-4 py-4 space-y-3 shadow-lg rounded-b-2xl">

        <a href="{{ route('home') }}"
           class="block {{ request()->routeIs('home') ? 'font-bold text-hmj-purple dark:text-yellow-400' : 'text-gray-700 dark:text-gray-300' }}">
           BERANDA
        </a>

        <a href="{{ route('home') }}#profil"
           class="block text-gray-700 dark:text-gray-300">
           PROFIL
        </a>

        <a href="{{ route('infosphere') }}"
           class="block {{ request()->routeIs('infosphere') ? 'font-bold text-hmj-purple dark:text-yellow-400' : 'text-gray-700 dark:text-gray-300' }}">
           INFOSPHERE
        </a>

        <div class="border-t border-gray-100 dark:border-white/10 pt-4 mt-2">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Tampilan</span>
                <div class="flex items-center gap-2 bg-gray-100 dark:bg-white/5 p-1 rounded-full">
                    <button @click="setMode('light')" :class="mode === 'light' ? 'bg-white shadow text-yellow-500' : 'text-gray-400'" class="w-8 h-8 rounded-full flex items-center justify-center transition"><i class="fas fa-sun"></i></button>
                    <button @click="setMode('dark')" :class="mode === 'dark' ? 'bg-gray-700 shadow text-purple-400' : 'text-gray-400'" class="w-8 h-8 rounded-full flex items-center justify-center transition"><i class="fas fa-moon"></i></button>
                    <button @click="setMode('system')" :class="mode === 'system' ? 'bg-gray-200 dark:bg-gray-600 shadow text-gray-700 dark:text-gray-200' : 'text-gray-400'" class="w-8 h-8 rounded-full flex items-center justify-center transition"><i class="fas fa-desktop"></i></button>
                </div>
            </div>
        </div>

        </div>
</nav>
