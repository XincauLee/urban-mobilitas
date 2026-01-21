<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Paket Mandiri',
                'price' => 750000,
                'is_popular' => false,
                'features' => [
                    'Pengurusan ISBN & Barcode',
                    'Desain Cover Standar',
                    'Layout Naskah (Maks. 100 Hal)',
                    'E-Sertifikat Penulis',
                    '1 Eksemplar Bukti Terbit',
                    'Google Play Books (Opsional)'
                ]
            ],
            [
                'name' => 'Paket Akademik',
                'price' => 1500000,
                'is_popular' => true, // Ini akan jadi paket yang di-highlight
                'features' => [
                    'Pengurusan ISBN & Barcode',
                    'Desain Cover Premium',
                    'Layout Naskah Profesional',
                    'Editing & Proofreading Ringan',
                    'Pengurusan HKI (Hak Cipta)',
                    '3 Eksemplar Bukti Terbit',
                    'Terindeks Google Scholar',
                    'Pemasaran Online'
                ]
            ],
            [
                'name' => 'Paket Prioritas',
                'price' => 2500000,
                'is_popular' => false,
                'features' => [
                    'Layanan Prioritas (Cepat)',
                    'ISBN, Barcode & HKI',
                    'Desain Cover Custom Exclusive',
                    'Editing & Proofreading Mendalam',
                    'Layout Full Custom',
                    '5 Eksemplar Bukti Terbit',
                    'Hard Cover Binding',
                    'Bantuan Distribusi Nasional'
                ]
            ]
        ];

        foreach ($packages as $pkg) {
            Package::create($pkg);
        }
    }
}