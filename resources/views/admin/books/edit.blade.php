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
                    {{-- Added: border, bg-gray-50, px-3, py-2 --}}
                    <input type="text" name="title" value="{{ old('title', $book->title) }}" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-3 py-2 focus:bg-white focus:border-gold focus:ring-gold shadow-sm" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Penulis</label>
                    <input type="text" name="author" value="{{ old('author', $book->author) }}" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-3 py-2 focus:bg-white focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tahun Terbit</label>
                    <input type="number" name="published_year" value="{{ old('published_year', $book->published_year) }}" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-3 py-2 focus:bg-white focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">ISBN</label>
                    <input type="text" name="isbn" value="{{ old('isbn', $book->isbn) }}" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-3 py-2 focus:bg-white focus:border-gold focus:ring-gold shadow-sm" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select name="category" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-3 py-2 focus:bg-white focus:border-gold focus:ring-gold shadow-sm" required>
                        <option value="" disabled>Pilih Kategori</option>
                        <option value="Ilmiah" {{ (old('category', $book->category) == 'Ilmiah') ? 'selected' : '' }}>Ilmiah</option>
                        <option value="Fiksi" {{ (old('category', $book->category) == 'Fiksi') ? 'selected' : '' }}>Fiksi</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi/Sinopsis</label>
                <textarea name="description" rows="4" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-3 py-2 focus:bg-white focus:border-gold focus:ring-gold shadow-sm" required>{{ old('description', $book->description) }}</textarea>
            </div>

            {{-- BAGIAN COVER DENGAN PREVIEW --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Cover Buku</label>
                
                <div class="flex items-end gap-6 mb-4">
                    {{-- 1. Cover Lama (Database) --}}
                    @if($book->cover_image)
                        <div>
                            <span class="text-xs text-gray-500 mb-1 block font-semibold">Cover Saat Ini:</span>
                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover Buku" class="h-32 w-24 object-cover rounded-sm border border-gray-200 shadow-sm">
                        </div>
                    @endif

                    {{-- 2. Preview Cover Baru (Hidden by default) --}}
                    <div id="preview-container" class="hidden">
                        <span class="text-xs text-gray-500 mb-1 block font-semibold text-gold">Akan Diganti Menjadi:</span>
                        <img id="img-preview" class="h-32 w-24 object-cover rounded-sm border-2 border-gold shadow-sm">
                    </div>
                </div>

                {{-- Input File dengan onchange="previewImage()" --}}
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

{{-- SCRIPT JAVASCRIPT UNTUK PREVIEW --}}
<script>
    function previewImage() {
        const image = document.querySelector('#cover_image');
        const imgPreview = document.querySelector('#img-preview');
        const previewContainer = document.querySelector('#preview-container');

        // Pastikan ada file yang dipilih
        if (image.files && image.files[0]) {
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                // Tampilkan gambar hasil baca file
                imgPreview.src = oFREvent.target.result;
                // Munculkan container preview
                previewContainer.classList.remove('hidden');
            }
        } else {
            // Jika user cancel pilih file, sembunyikan preview
            previewContainer.classList.add('hidden');
        }
    }
</script>
@endsection