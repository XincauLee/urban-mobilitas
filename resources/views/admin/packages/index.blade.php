@extends('layouts.admin')

@section('header', 'Daftar Paket')

@section('content')
<div class="bg-white rounded-sm shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-oxford text-lg">Paket Penerbitan</h2>
        <a href="{{ route('admin.packages.create') }}" class="bg-gold text-oxford px-4 py-2 rounded-sm font-bold text-sm hover:bg-gold/90 transition-colors shadow-sm">
            + Tambah Paket
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 text-gray-500 font-sans text-xs uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">Nama Paket</th>
                    <th class="px-6 py-4">Harga</th>
                    <th class="px-6 py-4">Fitur (Jumlah)</th>
                    <th class="px-6 py-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($packages as $package)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="font-bold text-oxford flex items-center">
                            {{ $package->name }}
                            @if($package->is_popular)
                                <span class="ml-2 bg-gold/20 text-oxford text-[10px] px-2 py-0.5 rounded-full uppercase tracking-wide font-bold">Popular</span>
                            @endif
                        </div>
                        <div class="text-xs text-gray-400 mt-1">{{ $package->cta_link ?? '-' }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-sm text-xs font-bold">
                            Rp {{ number_format($package->price, 0, ',', '.') }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        {{ count($package->features ?? []) }} Fitur
                    </td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <a href="{{ route('admin.packages.edit', $package) }}" class="text-indigo-600 hover:text-indigo-900 font-medium text-sm">Edit</a>
                        <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus paket ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-medium text-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-500">Belum ada paket yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-4">
        {{ $packages->links() }}
    </div>
</div>
@endsection