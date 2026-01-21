@extends('layouts.admin')

@section('header', 'Tambah Paket Baru')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-sm shadow-sm border border-gray-200 p-8">
        <form action="{{ route('admin.packages.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Paket</label>
                    <input type="text" name="name" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" placeholder="Contoh: Paket Silver" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Harga (Rp)</label>
                    <input type="number" name="price" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" placeholder="Contoh: 1500000" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Link CTA (WhatsApp/Kontak)</label>
                    <input type="text" name="cta_link" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm" placeholder="https://wa.me/...">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Fitur Paket</label>
                <textarea name="features" rows="6" class="w-full rounded-sm border-gray-300 focus:border-gold focus:ring-gold shadow-sm font-mono text-sm" placeholder="Layout Profesional&#10;ISBN & Barcode&#10;Proofreading&#10;Design Cover" required></textarea>
                <p class="text-xs text-gray-500 mt-1">*Pisahkan setiap fitur dengan baris baru (Enter).</p>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="is_popular" id="is_popular" value="1" class="rounded border-gray-300 text-gold focus:ring-gold h-4 w-4">
                <label for="is_popular" class="ml-2 block text-sm text-gray-900">
                    Tandai sebagai <strong>Paket Terlaris (Popular)</strong>
                </label>
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end space-x-3">
                <a href="{{ route('admin.packages.index') }}" class="px-6 py-2.5 rounded-sm border border-gray-300 text-gray-700 font-medium hover:bg-gray-50">Batal</a>
                <button type="submit" class="px-6 py-2.5 rounded-sm bg-oxford text-white font-medium hover:bg-oxford/90 shadow-lg">Simpan Paket</button>
            </div>
        </form>
    </div>
</div>
@endsection