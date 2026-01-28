<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Administrator - PT. Urban Mobilitas Indragiri</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>
<body class="antialiased font-sans bg-paper-white h-screen flex overflow-hidden">

    <div class="hidden lg:flex lg:w-1/2 relative bg-oxford text-white flex-col justify-between p-12 overflow-hidden">
        
        <div class="absolute inset-0 z-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="currentColor"/>
            </svg>
        </div>
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-gold rounded-full blur-3xl opacity-20"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-gold rounded-full blur-3xl opacity-10"></div>

        <div class="relative z-10 flex items-center space-x-4">
            <div class="w-12 h-12 bg-gold rounded-sm flex items-center justify-center shadow-lg">
                <span class="text-oxford font-serif font-bold text-2xl">U</span>
            </div>
            <div>
                <h2 class="font-serif text-xl font-bold tracking-wide">Urban Mobilitas</h2>
                <p class="text-xs text-gold tracking-widest uppercase">Indragiri</p>
            </div>
        </div>

        <div class="relative z-10 max-w-md">
            <h1 class="font-serif text-4xl md:text-5xl font-bold leading-tight mb-6">
                Publishing Ideas <br>
                <span class="text-gold">Shape the Future.</span>
            </h1>
            <p class="text-white/70 text-lg leading-relaxed font-light">
                Selamat datang kembali. Silakan masuk untuk mengelola katalog buku, naskah masuk, dan konten website.
            </p>
        </div>

        <div class="relative z-10 text-xs text-white/40">
            &copy; {{ date('Y') }} PT. Urban Mobilitas Indragiri. All rights reserved.
        </div>
    </div>

    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-8 bg-paper-white relative">
        
        <a href="{{ route('home') }}" class="absolute top-8 right-8 text-gray-400 hover:text-oxford transition-colors flex items-center text-sm font-medium group">
            <span class="group-hover:-translate-x-1 transition-transform">←</span>
            <span class="ml-2">Kembali ke Beranda</span>
        </a>

        <div class="lg:hidden text-center mb-10">
            <div class="w-16 h-16 bg-oxford rounded-sm flex items-center justify-center mx-auto mb-4 shadow-md">
                <span class="text-gold font-serif font-bold text-3xl">U</span>
            </div>
            <h2 class="font-serif text-2xl text-oxford font-bold">Admin Panel</h2>
        </div>

        <div class="w-full max-w-md bg-white p-10 rounded-sm shadow-xl border-t-4 border-gold relative z-10">
            
            <div class="mb-8">
                <h3 class="font-serif text-2xl text-oxford font-bold mb-2">Login Akun</h3>
                <p class="text-gray-500 text-sm">Masukan email dan password administrator Anda.</p>
            </div>

            @if ($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-sm text-sm shadow-sm">
                    <div class="flex">
                        <svg class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <div>
                            <p class="font-bold">Login Gagal</p>
                            <ul class="list-disc list-inside mt-1 text-xs">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('login.perform') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-bold text-oxford mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                        </div>
                        <input type="email" name="email" id="email" 
                               class="pl-10 block w-full rounded-sm border-gray-300 bg-gray-50 focus:bg-white focus:border-gold focus:ring-gold shadow-sm transition-all py-3"
                               placeholder="admin@urban.co.id" required autofocus value="{{ old('email') }}">
                    </div>
                </div>

                <div x-data="{ show: false }">
                    <label for="password" class="block text-sm font-bold text-oxford mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                        </div>
                        <input :type="show ? 'text' : 'password'" name="password" id="password" 
                               class="pl-10 pr-10 block w-full rounded-sm border-gray-300 bg-gray-50 focus:bg-white focus:border-gold focus:ring-gold shadow-sm transition-all py-3"
                               placeholder="••••••••" required>
                        <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg x-show="!show" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            <svg x-show="show" x-cloak class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 011.574-2.59M5.21 5.21a10.05 10.05 0 015.655-1.57c4.478 0 8.268 2.943 9.542 7a10.05 10.05 0 01-1.574 2.59M9.88 9.88a3 3 0 104.24 4.24m-4.24-4.24l4.24 4.24" /></svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center cursor-pointer group">
                        <div class="relative">
                            <input type="checkbox" name="remember" class="sr-only peer">
                            <div class="w-5 h-5 border-2 border-gray-300 rounded-sm peer-checked:bg-oxford peer-checked:border-oxford transition-all"></div>
                            <svg class="w-3 h-3 text-white absolute top-1 left-1 opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="ml-2 text-sm text-gray-600 group-hover:text-oxford transition-colors">Ingat saya</span>
                    </label>
                    <a href="#" class="text-sm font-medium text-gold hover:text-oxford transition-colors">Lupa Password?</a>
                </div>

                <button type="submit" class="w-full bg-oxford text-white font-bold py-3.5 px-4 rounded-sm hover:bg-oxford/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-oxford transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center space-x-2">
                    <span>Masuk Dashboard</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </button>
            </form>
        </div>
        
        <div class="mt-8 text-center lg:hidden">
            <p class="text-xs text-gray-400">&copy; {{ date('Y') }} PT. Urban Mobilitas Indragiri</p>
        </div>
    </div>
</body>
</html>