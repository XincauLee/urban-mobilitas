@extends('layouts.app')

@section('content')
<section class="py-24 bg-white" x-data="{ activeCategory: 'Semua' }">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16 fade-in-section">
            <h1 class="font-serif text-5xl text-oxford mb-6">Katalog Buku</h1>
            <div class="flex flex-wrap justify-center gap-2">
                <button @click="activeCategory = 'Semua'" 
                        :class="activeCategory === 'Semua' ? 'bg-oxford text-white' : 'bg-gray-100 text-oxford'"
                        class="px-4 py-2 rounded-sm text-sm font-medium transition-colors">Semua</button>
                @foreach($categories as $cat)
                <button @click="activeCategory = '{{ $cat }}'" 
                        :class="activeCategory === '{{ $cat }}' ? 'bg-oxford text-white' : 'bg-gray-100 text-oxford'"
                        class="px-4 py-2 rounded-sm text-sm font-medium transition-colors">{{ $cat }}</button>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($books as $book)
            <div x-show="activeCategory === 'Semua' || activeCategory === '{{ $book->category }}'" 
                 class="bg-white border border-gray-100 shadow-sm hover:shadow-xl transition-all group relative rounded-sm overflow-hidden fade-in-section">
                <div class="aspect-[3/4] bg-gray-100 overflow-hidden">
                    <img src="{{ $book->cover_image ?? 'https://via.placeholder.com/300x400' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                </div>
                <div class="p-6">
                    <span class="text-xs font-mono text-gold uppercase">{{ $book->category }}</span>
                    <h3 class="font-serif text-xl font-bold text-oxford mt-2 mb-1">{{ $book->title }}</h3>
                    <p class="text-sm text-gray-500 mb-4">{{ $book->author }}</p>
                    <div class="text-xs text-gray-400 border-t pt-3 flex justify-between">
                        <span>{{ $book->published_year }}</span>
                        <span>ISBN: {{ $book->isbn }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12 text-gray-500">Belum ada buku yang diterbitkan.</div>
            @endforelse
        </div>
    </div>
</section>
@endsection