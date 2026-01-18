@extends('layouts.admin')

@section('header', 'Dashboard')

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="bg-white rounded-sm p-6 shadow-sm border-l-4 border-oxford flex items-start justify-between group hover:shadow-md transition-all duration-300">
            <div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Total Buku</p>
                <div class="flex items-baseline space-x-2">
                    <h3 class="text-4xl font-serif font-bold text-oxford">{{ $stats['total_books'] }}</h3>
                    <span class="text-sm text-gray-500 font-medium">Judul</span>
                </div>
            </div>
            <div class="w-12 h-12 bg-oxford/10 rounded-full flex items-center justify-center text-oxford group-hover:bg-oxford group-hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
        </div>

        <div class="bg-white rounded-sm p-6 shadow-sm border-l-4 border-gold flex items-start justify-between group hover:shadow-md transition-all duration-300">
            <div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Total Penulis</p>
                <div class="flex items-baseline space-x-2">
                    <h3 class="text-4xl font-serif font-bold text-oxford">{{ $stats['total_authors'] }}</h3>
                    <span class="text-sm text-gray-500 font-medium">Orang</span>
                </div>
            </div>
            <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
        </div>

        <div class="bg-white rounded-sm p-6 shadow-sm border-l-4 border-gray-400 flex items-start justify-between group hover:shadow-md transition-all duration-300">
            <div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Total Kategori</p>
                <div class="flex items-baseline space-x-2">
                    <h3 class="text-4xl font-serif font-bold text-oxford">{{ $stats['total_categories'] }}</h3>
                    <span class="text-sm text-gray-500 font-medium">Jenis</span>
                </div>
            </div>
            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 group-hover:bg-gray-500 group-hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
            </div>
        </div>

    </div>

    <div class="mt-8">
        <h4 class="font-bold text-oxford mb-4">Aksi Cepat</h4>
        <div class="flex gap-4">
            <a href="{{ route('admin.books.create') }}" class="inline-flex items-center px-4 py-2 bg-oxford text-white text-sm font-medium rounded-sm hover:bg-oxford/90 transition-colors shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Buku Baru
            </a>
            <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-sm hover:bg-gray-50 transition-colors shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Cek Pesan Masuk
            </a>
        </div>
    </div>

@endsection