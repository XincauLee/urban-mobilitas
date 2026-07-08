@extends('layouts.app')

@section('content')
<section style="padding: 64px 0; background-color: #f9fafb; min-height: 100vh;">
    <div style="max-width: 900px; margin: 0 auto; padding: 0 24px;">

        {{-- Tombol Kembali --}}
        <div style="margin-bottom: 24px;">
            <a href="{{ route('portfolio') }}" style="display: inline-flex; align-items: center; color: #6b7280; font-size: 14px; text-decoration: none;">
                ← Kembali ke Katalog
            </a>
        </div>

        {{-- Card Utama --}}
        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 4px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow: hidden;">

            {{-- Garis Emas Atas --}}
            <div style="height: 4px; background-color: #C9A84C;"></div>

            {{-- Layout: Gambar + Info --}}
            <div style="display: flex; flex-direction: row; align-items: flex-start;">

                {{-- Kolom Kiri: Gambar --}}
                <div style="width: 160px; flex-shrink: 0; background: #f9fafb; border-right: 1px solid #f3f4f6; padding: 24px; display: flex; justify-content: center;">
                    <div style="width: 110px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); border-radius: 2px; overflow: hidden; border: 1px solid #e5e7eb;">
                        <img src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : 'https://via.placeholder.com/220x330?text=No+Cover' }}"
                             style="width: 100%; height: auto; display: block;"
                             alt="{{ $book->title }}">
                    </div>
                </div>

                {{-- Kolom Kanan: Info Buku --}}
                <div style="flex: 1; padding: 32px;">

                    {{-- Badge Kategori --}}
                    <span style="display: inline-block; background: #1e3a5f; color: white; font-size: 10px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 4px 12px; border-radius: 2px; margin-bottom: 16px;">
                        {{ $book->category }}
                    </span>

                    {{-- Judul --}}
                    <h1 style="font-size: 24px; font-weight: 700; color: #1e3a5f; line-height: 1.3; margin: 0 0 8px 0;">
                        {{ $book->title }}
                    </h1>

                    {{-- Penulis --}}
                    <p style="font-size: 14px; color: #6b7280; margin: 0 0 24px 0;">
                        Ditulis oleh <strong style="color: #374151;">{{ $book->author }}</strong>
                    </p>

                    {{-- Garis Pemisah --}}
                    <hr style="border: none; border-top: 1px solid #f3f4f6; margin-bottom: 24px;">

                    {{-- Info Tahun & ISBN --}}
                    <div style="display: flex; gap: 12px; margin-bottom: 28px; flex-wrap: wrap;">
                        <div style="background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 4px; padding: 12px 20px; text-align: center;">
                            <p style="font-size: 9px; color: #9ca3af; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 700; margin: 0 0 4px 0;">Tahun Terbit</p>
                            <p style="font-size: 18px; font-weight: 900; color: #1e3a5f; margin: 0;">{{ $book->published_year }}</p>
                        </div>
                        <div style="background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 4px; padding: 12px 20px; text-align: center; flex: 1;">
                            <p style="font-size: 9px; color: #9ca3af; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 700; margin: 0 0 4px 0;">Nomor ISBN</p>
                            <p style="font-size: 16px; font-weight: 700; color: #1e3a5f; font-family: monospace; letter-spacing: 0.05em; margin: 0;">{{ $book->isbn }}</p>
                        </div>
                    </div>

                    {{-- Sinopsis --}}
                    <div>
                        <h2 style="font-size: 12px; font-weight: 700; color: #1e3a5f; text-transform: uppercase; letter-spacing: 0.1em; margin: 0 0 12px 0;">
                            ▪ Sinopsis Buku
                        </h2>
                        <div style="font-size: 14px; color: #4b5563; line-height: 1.8; text-align: justify;">
                            {!! nl2br(e($book->description)) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Buku Lainnya --}}
        @if(isset($relatedBooks) && $relatedBooks->count() > 0)
        <div style="margin-top: 40px; padding-top: 32px; border-top: 1px solid #e5e7eb;">
            <h2 style="font-size: 11px; font-weight: 700; color: #9ca3af; text-transform: uppercase; letter-spacing: 0.1em; margin: 0 0 16px 0;">
                ▪ Buku Lainnya
            </h2>
            <div style="display: flex; flex-wrap: wrap; gap: 12px;">
                @foreach($relatedBooks as $related)
                <a href="{{ route('book.detail', $related->uuid) }}"
                   style="display: flex; align-items: center; gap: 10px; background: white; border: 1px solid #e5e7eb; border-radius: 4px; padding: 8px 12px; text-decoration: none; width: 220px; flex-shrink: 0; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.05);">
                    <div style="width: 30px; height: 44px; flex-shrink: 0; overflow: hidden; border-radius: 2px; border: 1px solid #e5e7eb;">
                        <img src="{{ $related->cover_image ? asset('storage/' . $related->cover_image) : 'https://via.placeholder.com/60x88?text=?' }}"
                             style="width: 100%; height: 100%; object-fit: cover; display: block;"
                             alt="{{ $related->title }}">
                    </div>
                    <div style="min-width: 0; flex: 1; overflow: hidden;">
                        <p style="font-size: 11px; font-weight: 600; color: #1e3a5f; margin: 0 0 2px 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{ $related->title }}
                        </p>
                        <p style="font-size: 10px; color: #9ca3af; margin: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{ $related->author }}
                        </p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
@endsection
