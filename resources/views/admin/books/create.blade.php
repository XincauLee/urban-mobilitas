@extends('layouts.admin')

@section('header', 'Tambah Buku Baru')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-sm shadow-sm border border-gray-200 p-8">
        <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Judul Buku</label>
                    <input type="text" name="title" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Penulis</label>
                    <input type="text" name="author" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tahun Terbit</label>
                    <input type="number" name="published_year" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">ISBN</label>
                    <input type="text" name="isbn" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <input type="text" name="category" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" placeholder="Contoh: Pendidikan, Novel" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi/Sinopsis</label>
                <textarea name="description" rows="4" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Cover Buku</label>
                <input type="file" name="cover_image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-semibold file:bg-oxford/10 file:text-oxford hover:file:bg-oxford/20">
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end space-x-3">
                <a href="{{ route('admin.books.index') }}" class="px-6 py-2.5 rounded-sm border border-gray-300 text-gray-700 font-medium hover:bg-gray-50">Batal</a>
                <button type="submit" class="px-6 py-2.5 rounded-sm bg-oxford text-white font-medium hover:bg-oxford/90 shadow-lg">Simpan Buku</button>
            </div>
        </form>
    </div>
</div>
@endsection