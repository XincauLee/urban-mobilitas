@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        {{-- Header & Filter --}}
        <div class="text-center mb-12 fade-in-section">
            <h1 class="font-serif text-3xl md:text-4xl text-oxford mb-4 font-bold tracking-tight">Katalog Buku</h1>
            <p class="text-gray-500 text-sm mb-6 max-w-2xl mx-auto">
                Koleksi karya tulis ilmiah dan buku referensi berkualitas terbitan Urban Mobilitas Indragiri.
            </p>
            
            <div class="flex flex-wrap justify-center gap-2">
                {{-- Tombol 'Semua' --}}
                <a href="{{ route('portfolio', ['category' => 'Semua']) }}" 
                   class="px-4 py-1.5 rounded-full text-xs font-medium transition-all duration-200 
                   {{ request('category') == 'Semua' || !request('category') ? 'bg-oxford text-white shadow-md' : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-200' }}">
                    Semua
                </a>

                {{-- Tombol Kategori Lainnya --}}
                @foreach($categories as $cat)
                <a href="{{ route('portfolio', ['category' => $cat]) }}" 
                   class="px-4 py-1.5 rounded-full text-xs font-medium transition-all duration-200 
                   {{ request('category') == $cat ? 'bg-oxford text-white shadow-md' : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-200' }}">
                    {{ $cat }}
                </a>
                @endforeach
            </div>
        </div>

        {{-- Grid Buku --}}
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($books as $book)
            <div class="bg-white border border-gray-100 rounded-sm shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group relative overflow-hidden flex flex-col h-full fade-in-section">
                
                {{-- Cover Image --}}
                <div class="aspect-[2/3] bg-gray-100 overflow-hidden relative border-b border-gray-50">
                    
                    {{-- Badge Kategori (Tampil Permanen di Pojok) --}}
                    <div class="absolute top-3 left-3 z-10">
                        <span class="bg-white/95 backdrop-blur-sm text-oxford text-[10px] font-bold px-2.5 py-1 rounded-sm shadow-sm border border-gray-100 tracking-wider uppercase">
                            {{ $book->category }}
                        </span>
                    </div>

                    <img src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : 'https://via.placeholder.com/300x450?text=No+Cover' }}" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         alt="{{ $book->title }}"
                         loading="lazy">
                    
                    {{-- Efek Hover (Overlay Gold) --}}
                    <div class="absolute inset-0 bg-oxford/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4">
                        <span class="text-gold font-serif text-center italic text-sm">
                            {{ $book->category }}
                        </span>
                    </div>
                </div>

                {{-- Detail Buku --}}
                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="font-serif text-lg font-bold text-oxford leading-snug mb-1 line-clamp-2 group-hover:text-gold transition-colors">
                        {{ $book->title }}
                    </h3>
                    
                    <p class="text-sm text-gray-500 mb-3 line-clamp-1">
                        {{ $book->author }}
                    </p>

                    <div class="mt-auto pt-3 border-t border-gray-100 flex items-center justify-between text-[11px] text-gray-400 font-sans uppercase tracking-wider">
                        <span>{{ $book->published_year }}</span>
                        <span class="bg-gray-50 px-1.5 py-0.5 rounded border border-gray-100">ISBN</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center">
                <div class="inline-block p-4 rounded-full bg-gray-100 text-gray-400 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <p class="text-gray-500 text-sm">Belum ada buku yang diterbitkan dalam kategori ini.</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination Links (Navigasi Halaman 1, 2, 3...) --}}
        <div class="mt-12 flex justify-center">
            {{ $books->links() }}
        </div>
        
    </div>
</section>
@endsection