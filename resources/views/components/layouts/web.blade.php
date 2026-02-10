<!DOCTYPE html>
<html lang="id" class="scroll-smooth" x-data="themeSwitcher" :class="{ 'dark': isDark }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'HMJ Kedokteran Undiksha - Kabinet Swarnadipa Ardhana' }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=Dancing+Script:wght@600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased transition-colors duration-500 font-sans bg-gray-50 text-gray-800 dark:bg-gsm-dark dark:text-gray-100">

    <div class="hidden dark:block fixed inset-0 bg-background-image-grain opacity-5 pointer-events-none z-9999"></div>

    <div class="fixed top-0 left-0 w-full h-1 z-99999 pointer-events-none">
        <div class="h-full bg-hmj-purple dark:bg-yellow-400 transition-all duration-300 ease-out"
             style="width: 0%; opacity: 0;"
             x-data="{ width: 0, show: false }"
             x-on:livewire:navigating.window="show = true; width = 30"
             x-on:livewire:navigated.window="width = 100; setTimeout(() => { show = false; width = 0; }, 300)">
            <div x-show="show" class="h-full w-full" :style="`width: ${width}%; transition: width 0.4s;`"></div>
        </div>
    </div>

    <x-web.navbar />

    <main>
        {{ $slot }}
    </main>

    <x-web.footer />

    @livewireScripts

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('themeSwitcher', () => ({
                mode: localStorage.getItem('theme') || 'system',
                systemDarkMode: window.matchMedia('(prefers-color-scheme: dark)').matches,

                get isDark() {
                    if (this.mode === 'system') return this.systemDarkMode;
                    return this.mode === 'dark';
                },

                setMode(val) {
                    this.mode = val;
                    localStorage.setItem('theme', val);
                    if (this.isDark) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                },

                init() {
                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        this.systemDarkMode = e.matches;
                    });
                    if (this.isDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            }));
        });
    </script>
</body>
</html>
