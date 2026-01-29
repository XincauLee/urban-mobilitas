<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urban Indragiri Press</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>

<body class="antialiased flex flex-col min-h-screen relative font-sans text-gray-800 bg-paper-white">

    <div class="paper-texture"></div>

    <header x-data="{ mobileMenuOpen: false, scrolled: false }"
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="{ 'bg-paper-white/90 backdrop-blur-md shadow-sm border-b border-oxford/5': scrolled, 'bg-transparent': !scrolled }"
        class="sticky top-0 z-50 transition-all duration-300">
        <nav class="max-w-7xl mx-auto px-6 md:px-12 h-20 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-oxford rounded-sm flex items-center justify-center group-hover:bg-oxford/90 transition-colors">
                    <span class="text-gold font-serif font-bold text-xl">U</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-serif font-semibold text-oxford text-lg leading-tight">Urban Indragiri</span>
                    <span class="font-sans text-xs text-gray-500 tracking-wider">PRESS</span>
                </div>
            </a>

            <div class="hidden md:flex items-center space-x-8">
                @foreach([
                'home' => 'Beranda',
                'about' => 'Tentang Kami',
                'services' => 'Layanan & Paket',
                'submission' => 'Prosedur',
                'portfolio' => 'Katalog Buku',
                'contact' => 'Kontak'
                ] as $route => $label)
                <a href="{{ route($route) }}"
                    class="font-sans text-sm font-medium uppercase tracking-widest transition-colors relative group {{ request()->routeIs($route) ? 'text-gold' : 'text-oxford hover:text-gold' }}">
                    {{ $label }}
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all group-hover:w-full {{ request()->routeIs($route) ? 'w-full' : '' }}"></span>
                </a>
                @endforeach


            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-oxford hover:text-gold transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>

        <div x-show="mobileMenuOpen" x-collapse x-cloak class="md:hidden bg-paper-white border-t border-gray-200 px-6 py-4 shadow-lg">
            <div class="flex flex-col space-y-4">
                @foreach(['home' => 'Beranda', 'about' => 'Tentang Kami', 'services' => 'Layanan', 'submission' => 'Prosedur', 'portfolio' => 'Katalog', 'contact' => 'Kontak'] as $route => $label)
                <a href="{{ route($route) }}" class="text-oxford font-medium hover:text-gold transition-colors uppercase text-sm tracking-wider">{{ $label }}</a>
                @endforeach

            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-oxford text-white mt-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gold rounded-sm flex items-center justify-center">
                            <span class="text-oxford font-serif font-bold text-2xl">U</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-serif font-semibold text-white text-xl leading-tight">Urban Indragiri</span>
                            <span class="font-sans text-sm text-gold tracking-wider">PRESS</span>
                        </div>
                    </div>
                    <p class="text-white/70 leading-relaxed mb-6 font-sans text-sm">
                        Mitra penerbitan buku akademik, monograf, dan karya ilmiah berstandar nasional. Kami berkomitmen mendukung pengembangan ilmu pengetahuan dan literasi.
                    </p>
                    <p class="font-serif italic text-gold text-lg">
                        Publishing Ideas That Shape the Future
                    </p>
                </div>

                <div>
                    <h3 class="font-serif text-lg font-semibold mb-6 text-gold">Tautan Cepat</h3>
                    <ul class="space-y-3">
                        @foreach(['home' => 'Beranda', 'about' => 'Tentang Kami', 'services' => 'Layanan', 'portfolio' => 'Katalog Buku', 'contact' => 'Kontak'] as $route => $label)
                        <li>
                            <a href="{{ route($route) }}" class="text-white/70 hover:text-gold transition-colors font-sans text-sm flex items-center group">
                                <span class="w-1 h-1 bg-gold rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                {{ $label }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="font-serif text-lg font-semibold mb-6 text-gold">Hubungi Kami</h3>
                    <ul class="space-y-4 text-white/70 font-sans text-sm">
                        {{-- Alamat --}}
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-gold mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Perum Griya Palas Mekar Blok K13, Kota Pekanbaru, Riau</span>
                        </li>

                        {{-- Email Baru --}}
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:press@urbanindragiripress.com" class="hover:text-gold transition-colors">press@urbanindragiripress.com</a>
                        </li>

                        {{-- WhatsApp Admin (Menggantikan Website) --}}
                        <li class="flex items-center space-x-3">
                            {{-- Ikon Telepon (Menggantikan Ikon Globe) --}}
                            <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <a href="https://wa.me/6281275392906?text=Halo%2C%20saya%20tertarik%20menerbitkan%20buku%20di%20Urban%20Indragiri%20Press.%20Boleh%20minta%20info%20lebih%20lanjut%3F"
                                target="_blank"
                                class="hover:text-gold transition-colors">
                                +62 812-7539-2906 (Admin)
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-white/10 mt-12 pt-8 text-center">
                <p class="text-white/50 text-sm font-sans">
                    &copy; {{ date('Y') }} Urban Indragiri Press — Member of PT. Urban Mobilitas Indragiri.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>