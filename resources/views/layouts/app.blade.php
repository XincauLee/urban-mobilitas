<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Urban Mobilitas Indragiri</title>
    
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
                    <span class="font-serif font-semibold text-oxford text-lg leading-tight">Urban Mobilitas</span>
                    <span class="font-sans text-xs text-gray-500 tracking-wider">INDRAGIRI</span>
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
                
                <a href="{{ route('contact') }}" class="bg-oxford text-white hover:bg-oxford/90 rounded-sm px-6 py-2.5 font-sans font-medium text-sm tracking-wide shadow-lg hover:shadow-xl transition-all hover:scale-[0.98]">
                    Kirim Naskah
                </a>
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
                <a href="{{ route('contact') }}" class="bg-oxford text-white text-center py-3 rounded-sm font-medium">Kirim Naskah</a>
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
                            <span class="font-serif font-semibold text-white text-xl leading-tight">PT. Urban Mobilitas</span>
                            <span class="font-sans text-sm text-gold tracking-wider">INDRAGIRI</span>
                        </div>
                    </div>
                    <p class="text-white/70 leading-relaxed mb-6 font-sans text-sm">
                        Mitra penerbitan profesional untuk buku akademik, monograf, dan karya ilmiah berstandar nasional. Kami berkomitmen mendukung pengembangan ilmu pengetahuan dan literasi.
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
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-gold mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <span>Perum Griya Palas Mekar Blok K13, Kota Pekanbaru, Riau</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            <a href="mailto:publisher@urbanmobindragiri.co.id" class="hover:text-gold transition-colors">publisher@urbanmobindragiri.co.id</a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                            <span>www.urbanmobindragiri.co.id</span>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-white/10 mt-12 pt-8 text-center">
                <p class="text-white/50 text-sm font-sans">
                    &copy; {{ date('Y') }} PT. Urban Mobilitas Indragiri. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>