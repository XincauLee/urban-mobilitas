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
                    <select name="category" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>
                        <option value="" disabled>Pilih Kategori</option>
                        <option value="Ilmiah" {{ (old('category', $book->category) == 'Ilmiah') ? 'selected' : '' }}>Ilmiah</option>
                        <option value="Fiksi" {{ (old('category', $book->category) == 'Fiksi') ? 'selected' : '' }}>Fiksi</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi/Sinopsis</label>
                <textarea name="description" rows="4" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" required>{{ old('description', $book->description) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Cover Buku</label>
                
                <div class="flex items-end gap-6 mb-4">
                    {{-- 1. Cover Lama --}}
                    @if($book->cover_image)
                        <div class="bg-gray-100 p-1 border border-gray-200 rounded-sm">
                            <span class="text-xs text-gray-500 mb-1 block font-semibold text-center">Cover Saat Ini</span>
                            {{-- Ubah ke object-contain --}}
                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover Buku" class="h-32 w-24 object-contain bg-white">
                        </div>
                    @endif

                    {{-- 2. Preview Cover Baru --}}
                    <div id="preview-container" class="hidden">
                        <div class="bg-gray-50 p-1 border-2 border-gold rounded-sm border-dashed">
                            <span class="text-xs text-gray-500 mb-1 block font-semibold text-gold text-center">Akan Diganti:</span>
                            {{-- Ubah ke object-contain --}}
                            <img id="img-preview" class="h-32 w-24 object-contain bg-white">
                        </div>
                    </div>
                </div>

                <input type="file" name="cover_image" id="cover_image" onchange="previewImage()" 
                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-semibold file:bg-oxford/10 file:text-oxford hover:file:bg-oxford/20">
                <p class="mt-1 text-xs text-gray-500">Biarkan kosong jika tidak ingin mengganti cover.</p>
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end space-x-3">
                <a href="{{ route('admin.books.index') }}" class="px-6 py-2.5 rounded-sm border border-gray-300 text-gray-700 font-medium hover:bg-gray-50">Batal</a>
                <button type="submit" class="px-6 py-2.5 rounded-sm bg-oxford text-white font-medium hover:bg-oxford/90 shadow-lg">Perbarui Buku</button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#cover_image');
        const imgPreview = document.querySelector('#img-preview');
        const previewContainer = document.querySelector('#preview-container');

        if (image.files && image.files[0]) {
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                previewContainer.classList.remove('hidden');
            }
        } else {
            previewContainer.classList.add('hidden');
        }
    }
</script>
@endsection