@extends('layouts.app')

@section('content')
{{-- Class 'fade-in-section' telah dihapus agar aman dari isu JS --}}
<section class="py-24 bg-gray-50 min-h-screen"> 
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        
        {{-- Header & Filter --}}
        <div class="text-center mb-16">
            <h1 class="font-serif text-4xl md:text-5xl text-oxford mb-6 font-medium tracking-tight">
                Katalog Buku
            </h1>
            <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>
            
            <p class="font-sans text-lg text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Koleksi karya tulis ilmiah dan buku referensi berkualitas terbitan Urban Mobilitas Indragiri.
            </p>
            
            <div class="flex flex-wrap justify-center gap-3">
                {{-- Tombol 'Semua' --}}
                <a href="{{ route('portfolio', ['category' => 'Semua']) }}" 
                   class="px-6 py-2 rounded-sm text-sm font-sans font-medium transition-all duration-300 
                   {{ request('category') == 'Semua' || !request('category') ? 'bg-oxford text-white shadow-md' : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-200' }}">
                    Semua
                </a>

                {{-- Tombol Kategori Lainnya --}}
                @foreach($categories as $cat)
                <a href="{{ route('portfolio', ['category' => $cat]) }}" 
                   class="px-6 py-2 rounded-sm text-sm font-sans font-medium transition-all duration-300 
                   {{ request('category') == $cat ? 'bg-oxford text-white shadow-md' : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-200' }}">
                    {{ $cat }}
                </a>
                @endforeach
            </div>
        </div>

        {{-- Grid Buku --}}
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">
            @forelse($books as $book)
            
            {{-- Card Buku --}}
            {{-- Perubahan: Hapus fade-in-section, ubah shadow jadi md, tambah border gold saat hover --}}
            <a href="{{ route('book.detail', $book->uuid) }}" class="block bg-white border border-gray-100 rounded-sm shadow-sm hover:shadow-md hover:border-gold/50 transition-all duration-300 group relative overflow-hidden flex flex-col h-full">
                
                {{-- [PENTING] Elemen ini yang memunculkan garis emas saat hover --}}
                <div class="gold-line"></div>

                {{-- Cover Image --}}
                <div class="aspect-[2/3] bg-gray-100 overflow-hidden relative border-b border-gray-50">
                    
                    {{-- Badge Kategori --}}
                    <div class="absolute top-3 left-3 z-10">
                        <span class="bg-white/95 backdrop-blur-sm text-oxford text-[10px] font-sans font-bold px-3 py-1.5 rounded-sm shadow-sm border border-gray-100 tracking-wider uppercase">
                            {{ $book->category }}
                        </span>
                    </div>

                    <img src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : 'https://via.placeholder.com/300x450?text=No+Cover' }}" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="{{ $book->title }}"
                         loading="lazy">
                    
                    {{-- Efek Hover (Overlay Gold) --}}
                    <div class="absolute inset-0 bg-oxford/90 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                        <span class="text-gold font-serif text-center italic text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            "{{ $book->category }}"
                        </span>
                    </div>
                </div>

                {{-- Detail Buku --}}
                <div class="p-5 md:p-6 flex flex-col flex-grow">
                    {{-- Judul Buku --}}
                    <h3 class="font-serif text-lg md:text-xl font-medium text-oxford leading-snug mb-3 line-clamp-2 group-hover:text-gold transition-colors" title="{{ $book->title }}">
                        {{ $book->title }}
                    </h3>
                    
                    {{-- Penulis --}}
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <svg class="w-4 h-4 mr-2 text-gray-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="line-clamp-1 font-sans">{{ $book->author }}</span>
                    </div>

                    {{-- Footer: Tahun & ISBN --}}
                    <div class="mt-auto pt-4 border-t border-gray-100 flex flex-wrap items-center justify-between gap-y-2 gap-x-1 text-xs">
                        
                        {{-- Tahun Terbit --}}
                        <div class="flex items-center text-gray-500 font-sans uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5 mr-1.5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>{{ $book->published_year }}</span>
                        </div>

                        {{-- ISBN Badge --}}
                        <div class="inline-flex items-center px-2 py-1 rounded-sm border border-gray-200 bg-gray-50 text-gray-600 font-mono tracking-wide max-w-full">
                            <span class="font-bold text-oxford mr-1.5 text-[10px]">ISBN</span> 
                            <span class="truncate">{{ $book->isbn }}</span>
                        </div>
                    </div>

                </div>
            </a>

            @empty
            <div class="col-span-full py-24 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 text-gray-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <p class="font-sans text-lg text-gray-500">Belum ada buku yang diterbitkan dalam kategori ini.</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination Links --}}
        <div class="mt-16 flex justify-center">
            {{ $books->links() }}
        </div>
        
    </div>
</section>
@endsection