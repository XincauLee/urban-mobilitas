@extends('layouts.admin')

@section('header', 'Katalog Buku')

@section('content')
<div class="bg-white rounded-sm shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-oxford text-lg">Daftar Buku Terbitan</h2>
        <a href="{{ route('admin.books.create') }}" class="bg-gold text-oxford px-4 py-2 rounded-sm font-bold text-sm hover:bg-gold/90 transition-colors shadow-sm">
            + Tambah Buku
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 text-gray-500 font-sans text-xs uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">Cover</th>
                    <th class="px-6 py-4">Judul & ISBN</th>
                    <th class="px-6 py-4">Penulis</th>
                    <th class="px-6 py-4">Kategori</th>
                    <th class="px-6 py-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($books as $book)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        @if($book->cover_image)
                            <img src="{{ asset('storage/' . $book->cover_image) }}" class="h-16 w-12 object-cover shadow-sm rounded-sm">
                        @else
                            <div class="h-16 w-12 bg-gray-200 flex items-center justify-center text-xs text-gray-400">No Img</div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="font-bold text-oxford">{{ $book->title }}</div>
                        <div class="text-xs text-gray-500">{{ $book->isbn }}</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $book->author }}</td>
                    <td class="px-6 py-4">
                        <span class="bg-oxford/10 text-oxford px-2 py-1 rounded-full text-xs font-semibold">{{ $book->category }}</span>
                    </td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <a href="{{ route('admin.books.edit', $book) }}" class="text-indigo-600 hover:text-indigo-900 font-medium text-sm">Edit</a>
                        <form action="{{ route('admin.books.destroy', $book) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-medium text-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-4">
        {{ $books->links() }}
    </div>
</div>
@endsection