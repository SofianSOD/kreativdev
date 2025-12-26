<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', \App\Models\Setting::where('key', 'site_name')->value('value') ?? 'Kreatif Dev')</title>
    <meta name="description"
        content="@yield('meta_description', \App\Models\Setting::where('key', 'site_description')->value('value') ?? '')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN (Emergency Fallback) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        nusana: {
                            light: '#00A1FF',
                            dark: '#095EB9',
                            bg: '#F0F7FF',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    container: {
                        center: true,
                        padding: '2rem',
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles -->
    <style>
        .btn-nusana {
            background: linear-gradient(90deg, #00A1FF 0%, #095EB9 100%);
            color: white;
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 161, 255, 0.3);
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-nusana:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 161, 255, 0.4);
        }

        .card-nusana {
            background: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .card-nusana:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 161, 255, 0.1);
            border-color: #BAE0FF;
        }

        .section-nusana-bg {
            background-color: #F0F7FF;
        }
    </style>

    @vite(['resources/js/app.js'])

</head>

<body class="antialiased font-sans flex flex-col min-h-screen bg-gray-50 overflow-x-hidden relative">

    <!-- Preloader -->
    <div id="preloader"
        class="fixed inset-0 z-[100] bg-white flex items-center justify-center transition-opacity duration-500 ease-out">
        <div class="relative flex flex-col items-center">
            <!-- Animated Logo -->
            <div class="mb-6 animate-pulse">
                <img src="{{ asset('images/logo.png') }}?v={{ time() }}" alt="KreatifDev Logo"
                    class="w-48 h-auto object-contain">
            </div>
            <!-- Loading Bar -->
            <div class="w-48 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-nusana-light to-nusana-dark animate-progress rounded-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Animated Background -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div
            class="absolute top-0 left-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob">
        </div>
        <div
            class="absolute top-0 right-1/4 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute -bottom-32 left-1/3 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000">
        </div>
    </div>

    <!-- Header / Navbar -->
    <header x-data="{ open: false, isScrolled: false }" @scroll.window="isScrolled = (window.pageYOffset > 10)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="isScrolled ? 'bg-white/80 backdrop-blur-lg shadow-sm py-3 border-b border-white/20' : 'bg-transparent py-5'">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 group">
                    <img src="{{ asset('images/logo.png') }}?v={{ time() }}" alt="KreatifDev Logo"
                        class="h-10 w-auto object-contain group-hover:scale-105 transition-transform">
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">
                        Kreatif<span class="text-nusana-light">Dev</span>
                    </span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/"
                        class="text-gray-600 hover:text-nusana-light font-semibold transition-colors">Beranda</a>
                    <a href="/#services"
                        class="text-gray-600 hover:text-nusana-light font-semibold transition-colors">Layanan</a>
                    <a href="{{ route('pricing.index') }}"
                        class="text-gray-600 hover:text-nusana-light font-semibold transition-colors">Harga</a>
                    <a href="/#portfolio"
                        class="text-gray-600 hover:text-nusana-light font-semibold transition-colors">Portofolio</a>
                    <a href="{{ route('about.index') }}"
                        class="text-gray-600 hover:text-nusana-light font-semibold transition-colors">Tentang
                        Kami</a>
                    <a href="/blog"
                        class="text-gray-600 hover:text-nusana-light font-semibold transition-colors">Blog</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="{{ \App\Models\Setting::where('key', 'hero_cta_url')->value('value') ?? '#' }}"
                        class="btn-nusana">
                        Konsultasi Gratis
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="open = !open"
                    class="md:hidden text-gray-900 focus:outline-none p-2 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="open ? 'hidden' : 'inline-flex'" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="open ? 'inline-flex' : 'hidden'" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </nav>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            @click.away="open = false"
            class="md:hidden bg-white shadow-xl border-t border-gray-100 absolute w-full left-0 top-full p-4 space-y-3">
            <a href="/"
                class="block px-4 py-2 text-gray-600 hover:bg-blue-50 hover:text-nusana-light rounded-lg font-semibold">Beranda</a>
            <a href="#services"
                class="block px-4 py-2 text-gray-600 hover:bg-blue-50 hover:text-nusana-light rounded-lg font-semibold">Layanan</a>
            <a href="{{ route('pricing.index') }}"
                class="block px-4 py-2 text-gray-600 hover:bg-blue-50 hover:text-nusana-light rounded-lg font-semibold">Harga</a>
            <a href="#portfolio"
                class="block px-4 py-2 text-gray-600 hover:bg-blue-50 hover:text-nusana-light rounded-lg font-semibold">Portofolio</a>
            <a href="{{ route('about.index') }}"
                class="block px-4 py-2 text-gray-600 hover:bg-blue-50 hover:text-nusana-light rounded-lg font-semibold">Tentang
                Kami</a>
            <a href="/blog"
                class="block px-4 py-2 text-gray-600 hover:bg-blue-50 hover:text-nusana-light rounded-lg font-semibold">Blog</a>
            <a href="{{ \App\Models\Setting::where('key', 'hero_cta_url')->value('value') ?? '#' }}"
                class="block w-full text-center btn-nusana mt-4">
                Konsultasi Gratis
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-24">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white pt-20 pb-10 border-t border-gray-100">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brand Column -->
                <div class="col-span-1 md:col-span-2">
                    <a href="/" class="flex items-center gap-2 mb-6">
                        <img src="{{ asset('images/logo.png') }}?v={{ time() }}" alt="KreatifDev Logo"
                            class="h-10 w-auto object-contain">
                        <span class="text-2xl font-bold text-gray-900">
                            Kreatif<span class="text-nusana-light">Dev</span>
                        </span>
                    </a>
                    <p class="text-gray-500 max-w-sm leading-relaxed mb-6">
                        {{ \App\Models\Setting::where('key', 'site_description')->value('value') ?? 'Partner transformasi digital Anda. Kami membangun aset digital yang bekerja keras untuk bisnis Anda 24/7.' }}
                    </p>
                    <div class="flex space-x-4">
                        <!-- Social Icons (Placeholder SVG) -->
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-nusana-light hover:bg-nusana-light hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-nusana-light hover:bg-nusana-light hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.544 4.92 4.794.06 1.286.072 1.666.072 4.993 0 3.327-.012 3.707-.072 4.993-.149 3.227-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.993 0-3.327.012-3.707.07-4.993.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Links Column -->
                <div>
                    <h4 class="text-lg font-bold text-gray-900 mb-6">Perusahaan</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-500 hover:text-nusana-light transition-colors">Profil Kami</a>
                        </li>
                        <li><a href="#services"
                                class="text-gray-500 hover:text-nusana-light transition-colors">Layanan</a></li>
                        <li><a href="#portfolio"
                                class="text-gray-500 hover:text-nusana-light transition-colors">Portofolio</a></li>
                        <li><a href="/blog" class="text-gray-500 hover:text-nusana-light transition-colors">Blog</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div>
                    <h4 class="text-lg font-bold text-gray-900 mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <span
                                class="mt-1 w-5 h-5 rounded-full bg-blue-100 text-nusana-light flex items-center justify-center text-xs">@</span>
                            <span class="text-gray-500 text-sm py-1">{{ \App\Models\Setting::where('key',
                                'contact_email')->value('value') ?? 'hello@kreatifdev.com' }}</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span
                                class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">W</span>
                            <span
                                class="text-gray-500 text-sm">{{ \App\Models\Setting::where('key', 'contact_whatsapp')->value('value') ?? '62895365639577' }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="border-t border-gray-100 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Kreatif Dev. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-nusana-light">Privacy Policy</a>
                    <a href="#" class="hover:text-nusana-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Inline Preloader Script (Fail-safe) -->
    <script>
            (function () {
                const preloader = document.getElementById('preloader');
                if (!preloader) return;

                function removePreloader() {
                    preloader.style.opacity = '0';
                    setTimeout(() => {
                        preloader.style.display = 'none';
                        document.body.classList.remove('overflow-hidden'); // Unlocks scroll
                    }, 500);
                }

                // aggressive removal
                // 1. If page is already loaded
                if (document.readyState === 'complete' || document.readyState === 'interactive') {
                    setTimeout(removePreloader, 500);
                } else {
                    // 2. Wait for content
                    document.addEventListener('DOMContentLoaded', () => setTimeout(removePreloader, 500));
                }

                // 3. Absolute failsafe: Remove after 3 seconds max no matter what
                setTimeout(removePreloader, 3000);

                // 4. Window load fallback
                window.addEventListener('load', () => setTimeout(removePreloader, 500));
            })();
    </script>
</body>

</html>