<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - PT. Urban Mobilitas Indragiri</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800" 
      x-data="{ 
          mobileSidebarOpen: false, 
          desktopSidebarOpen: true 
      }">

    <div class="flex h-screen overflow-hidden">

        <div x-show="mobileSidebarOpen" 
             x-transition:enter="transition-opacity ease-linear duration-300" 
             x-transition:enter-start="opacity-0" 
             x-transition:enter-end="opacity-100" 
             x-transition:leave="transition-opacity ease-linear duration-300" 
             x-transition:leave-start="opacity-100" 
             x-transition:leave-end="opacity-0" 
             class="fixed inset-0 bg-gray-900/80 z-20 lg:hidden" 
             @click="mobileSidebarOpen = false"></div>

        <aside :class="{
                '-translate-x-full': !mobileSidebarOpen, 
                'translate-x-0': mobileSidebarOpen,
                'lg:translate-x-0': true,
                'lg:w-64': desktopSidebarOpen,
                'lg:w-0': !desktopSidebarOpen,
                'lg:overflow-hidden': !desktopSidebarOpen
               }" 
               class="fixed inset-y-0 left-0 z-30 w-64 bg-oxford text-white transition-all duration-300 ease-in-out lg:static lg:inset-0 shadow-xl flex flex-col whitespace-nowrap">
            
            <div class="flex items-center justify-center h-20 border-b border-white/10 bg-oxford/50 overflow-hidden shrink-0">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 bg-gold rounded-sm flex items-center justify-center shadow-lg group-hover:bg-white transition-colors shrink-0">
                        <span class="text-oxford font-serif font-bold text-xl">U</span>
                    </div>
                    <div class="flex flex-col transition-opacity duration-200" :class="desktopSidebarOpen ? 'opacity-100' : 'opacity-0 lg:hidden'">
                        <span class="font-serif font-bold text-lg tracking-wide leading-none">Urban Admin</span>
                        <span class="text-[10px] text-gold uppercase tracking-widest mt-1">Indragiri</span>
                    </div>
                </a>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto overflow-x-hidden">
                
                <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 transition-opacity duration-200" :class="desktopSidebarOpen ? 'opacity-100' : 'opacity-0 lg:hidden'">Menu Utama</p>

                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-sm transition-all group {{ request()->routeIs('admin.dashboard') ? 'bg-gold text-oxford shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-oxford' : 'text-gray-400 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span class="transition-opacity duration-200" :class="desktopSidebarOpen ? 'opacity-100' : 'opacity-0 lg:hidden'">Dashboard</span>
                </a>

                <a href="{{ route('admin.books.index') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-sm transition-all group {{ request()->routeIs('admin.books.*') ? 'bg-gold text-oxford shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.books.*') ? 'text-oxford' : 'text-gray-400 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <span class="transition-opacity duration-200" :class="desktopSidebarOpen ? 'opacity-100' : 'opacity-0 lg:hidden'">Katalog Buku</span>
                </a>

                <a href="{{ route('admin.packages.index') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-sm transition-all group {{ request()->routeIs('admin.packages.*') ? 'bg-gold text-oxford shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.packages.*') ? 'text-oxford' : 'text-gray-400 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    <span class="transition-opacity duration-200" :class="desktopSidebarOpen ? 'opacity-100' : 'opacity-0 lg:hidden'">Daftar Paket</span>
                </a>

                <a href="{{ route('admin.messages.index') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-sm transition-all group {{ request()->routeIs('admin.messages.*') ? 'bg-gold text-oxford shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.messages.*') ? 'text-oxford' : 'text-gray-400 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span class="transition-opacity duration-200" :class="desktopSidebarOpen ? 'opacity-100' : 'opacity-0 lg:hidden'">Pesan Masuk</span>
                </a>

            </nav>

            <div class="p-4 border-t border-white/10 bg-oxford/50 overflow-hidden shrink-0">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center px-4 py-2 text-sm font-medium text-white transition-colors rounded-sm bg-white/10 hover:bg-red-600/90 group whitespace-nowrap">
                        <svg class="w-4 h-4 mr-2 shrink-0 text-gray-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span class="transition-opacity duration-200" :class="desktopSidebarOpen ? 'opacity-100' : 'opacity-0 lg:hidden'">Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-paper-white transition-all duration-300">
            
            <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-20">
                <div class="flex items-center justify-between h-16 px-6 sm:px-8">
                    
                    <button @click="window.innerWidth >= 1024 ? desktopSidebarOpen = !desktopSidebarOpen : mobileSidebarOpen = !mobileSidebarOpen" 
                            class="text-gray-500 hover:text-oxford focus:outline-none transition-transform active:scale-95">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>

                    <h1 class="hidden lg:block text-xl font-serif font-bold text-oxford tracking-tight ml-4">
                        @yield('header')
                    </h1>

                    <div class="flex items-center ml-auto space-x-4">
                        
                        <a href="{{ route('home') }}" target="_blank" class="hidden sm:flex items-center text-sm text-gray-500 hover:text-gold transition-colors">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Lihat Website
                        </a>

                        <div class="h-6 w-px bg-gray-200 hidden sm:block"></div>

                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = !dropdownOpen" class="flex items-center space-x-3 focus:outline-none group">
                                <div class="text-right hidden md:block">
                                    <div class="text-sm font-semibold text-oxford group-hover:text-gold transition-colors">{{ Auth::user()->name ?? 'Administrator' }}</div>
                                    <div class="text-xs text-gray-400">Admin</div>
                                </div>
                                <div class="w-9 h-9 rounded-full bg-oxford text-white flex items-center justify-center text-sm font-bold shadow-sm ring-2 ring-transparent group-hover:ring-gold/50 transition-all">
                                    {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                                </div>
                            </button>

                            <div x-show="dropdownOpen" 
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 @click.away="dropdownOpen = false" 
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 z-50" 
                                 x-cloak>
                                <div class="px-4 py-2 border-b border-gray-100 md:hidden">
                                    <div class="text-sm font-medium text-gray-900">{{ Auth::user()->name ?? 'Admin' }}</div>
                                    <div class="text-xs text-gray-500">Administrator</div>
                                </div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors">
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50/50 p-6 sm:p-8">
                
                <div class="lg:hidden mb-6">
                    <h2 class="text-xl font-serif font-bold text-oxford">@yield('header')</h2>
                </div>

                @if(session('success'))
                    <div x-data="{ show: true }" x-show="show" x-transition.duration.300ms class="mb-6 bg-green-50 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-r-sm shadow-sm flex items-center justify-between" role="alert">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                        <button @click="show = false" class="text-green-500 hover:text-green-700"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                    </div>
                @endif

                @yield('content')
            </main>

            <footer class="bg-white border-t border-gray-200 py-4 px-8 flex justify-center items-center">
                <p class="text-xs text-gray-400 text-center">
                    &copy; {{ date('Y') }} PT. Urban Mobilitas Indragiri. All rights reserved.
                </p>
            </footer>

        </div>
    </div>

</body>
</html>