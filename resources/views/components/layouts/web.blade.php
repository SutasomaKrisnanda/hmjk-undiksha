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
                    // Paksa update class di HTML tag jika bind :class lambat merespon
                    if (this.isDark) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                },

                init() {
                    // Listener perubahan sistem
                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        this.systemDarkMode = e.matches;
                    });

                    // Set initial state
                    if (this.isDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            }));
        });
    </script>
</body>
</html>
