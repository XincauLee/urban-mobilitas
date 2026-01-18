@extends('layouts.admin')

@section('header', 'Edit Buku')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-sm shadow-sm border border-gray-200 p-8">
        <form action="{{ route('admin.books.update', $book) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Judul Buku</label>
                    <input type="text" name="title" value="{{ old('title', $book->title) }}" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Penulis</label>
                    <input type="text" name="author" value="{{ old('author', $book->author) }}" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tahun Terbit</label>
                    <input type="number" name="published_year" value="{{ old('published_year', $book->published_year) }}" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">ISBN</label>
                    <input type="text" name="isbn" value="{{ old('isbn', $book->isbn) }}" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <input type="text" name="category" value="{{ old('category', $book->category) }}" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" placeholder="Contoh: Pendidikan, Novel" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi/Sinopsis</label>
                <textarea name="description" rows="4" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>{{ old('description', $book->description) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Cover Buku</label>
                
                @if($book->cover_image)
                    <div class="mb-3">
                        <span class="text-xs text-gray-500 mb-1 block">Cover Saat Ini:</span>
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover Buku" class="h-32 w-24 object-cover rounded-sm border border-gray-200 shadow-sm">
                    </div>
                @endif

                <input type="file" name="cover_image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-semibold file:bg-oxford/10 file:text-oxford hover:file:bg-oxford/20">
                <p class="mt-1 text-xs text-gray-500">Biarkan kosong jika tidak ingin mengganti cover.</p>
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end space-x-3">
                <a href="{{ route('admin.books.index') }}" class="px-6 py-2.5 rounded-sm border border-gray-300 text-gray-700 font-medium hover:bg-gray-50">Batal</a>
                <button type="submit" class="px-6 py-2.5 rounded-sm bg-oxford text-white font-medium hover:bg-oxford/90 shadow-lg">Perbarui Buku</button>
            </div>
        </form>
    </div>
</div>
@endsection