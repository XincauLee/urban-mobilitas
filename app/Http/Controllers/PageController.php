<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Package;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $features = [
            [
                'title' => "Professional",
                'description' => "Layanan penerbitan berkualitas dengan standar profesional tertinggi",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />'
            ],
            [
                'title' => "Legalitas Terjamin",
                'description' => "Pengurusan ISBN resmi dan HKI untuk melindungi karya Anda",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />'
            ],
            [
                'title' => "Support Penulis",
                'description' => "Mendukung dosen dan penulis dalam menghasilkan karya ilmiah bermutu",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />'
            ]
        ];

        return view('home', compact('features'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $packages = Package::all();
        $services = [
            [
                'id' => 1,
                'title' => "Penerbitan Buku Ber-ISBN",
                'description' => "Penerbitan resmi terdaftar di Perpustakaan Nasional dengan nomor ISBN yang menjamin legalitas dan kredibilitas karya Anda.",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />'
            ],
            [
                'id' => 2,
                'title' => "Editing & Proofreading",
                'description' => "Tim editor profesional kami memastikan naskah Anda bebas dari kesalahan tata bahasa, ejaan, dan memberikan struktur yang optimal.",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />'
            ],
            [
                'id' => 3,
                'title' => "Layout & Desain Sampul",
                'description' => "Desain tata letak profesional dan sampul buku yang menarik untuk meningkatkan daya tarik visual karya Anda.",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />'
            ],
            [
                'id' => 4,
                'title' => "Pengurusan HKI (Hak Cipta)",
                'description' => "Layanan pengurusan hak kekayaan intelektual untuk melindungi legalitas dan orisinalitas karya Anda.",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />'
            ],
            [
                'id' => 5,
                'title' => "Konversi Format Digital",
                'description' => "Publikasi tersedia dalam bentuk buku cetak maupun digital (E-book) untuk jangkauan pembaca yang lebih luas.",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />'
            ],
            [
                'id' => 6,
                'title' => "Berbagai Jenis Terbitan",
                'description' => "Menerbitkan buku ajar, monograf, prosiding, hingga buku umum sesuai dengan kebutuhan penulis.",
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />'
            ]
        ];

        return view('services', compact('services', 'packages'));
    }

    public function submission()
    {
        $procedures = [
            [
                'id' => 1,
                'step' => "01",
                'title' => "Pengiriman Naskah",
                'description' => "Penulis mengirimkan draft naskah melalui email atau formulir kontak di website kami."
            ],
            [
                'id' => 2,
                'step' => "02",
                'title' => "Review & Editing",
                'description' => "Tim editor melakukan peninjauan menyeluruh dan penyuntingan naskah untuk memastikan kualitas."
            ],
            [
                'id' => 3,
                'step' => "03",
                'title' => "Layout & Desain",
                'description' => "Proses tata letak halaman dan pembuatan desain sampul buku yang profesional dan menarik."
            ],
            [
                'id' => 4,
                'step' => "04",
                'title' => "Legalisasi ISBN",
                'description' => "Pengurusan nomor ISBN resmi dari Perpustakaan Nasional untuk legalitas buku."
            ],
            [
                'id' => 5,
                'step' => "05",
                'title' => "Publikasi",
                'description' => "Buku dicetak atau diterbitkan secara digital dan siap untuk didistribusikan."
            ]
        ];
        return view('submission', compact('procedures'));
    }

    public function portfolio(Request $request)
    {
        $query = Book::orderBy('created_at', 'desc');

        if ($request->has('category') && $request->category != 'Semua') {
            $query->where('category', $request->category);
        }

        $books = $query->paginate(30)->withQueryString();
        $categories = Book::select('category')->distinct()->pluck('category');

        return view('portfolio', compact('books', 'categories'));
    }

    // Method Baru untuk Halaman Detail
    public function bookDetail(Book $book)
    {
        // Rekomendasi buku lain dengan kategori yang sama (acak 4 buku)
        $relatedBooks = Book::where('id', '!=', $book->id)
                            ->where('category', $book->category)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();

        return view('book-detail', compact('book', 'relatedBooks'));
    }

    public function contact()
    {
        return view('contact');
    }
}