@extends('layouts.app')

@section('content')
<section class="relative min-h-[90vh] flex items-center bg-gradient-to-br from-oxford/5 to-gold/5 fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-24 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
            <div class="font-mono text-xs tracking-widest uppercase text-oxford/70 mb-6">PT. Urban Mobilitas Indragiri</div>
            <h1 class="font-serif text-5xl md:text-7xl font-medium tracking-tight text-oxford mb-6 leading-tight">
                Publishing Ideas That Shape the Future
            </h1>
            <p class="font-sans text-lg text-gray-600 mb-8 leading-relaxed">
                Penerbit karya ilmiah dan buku akademik berstandar nasional. Hadir untuk mendukung dan melayani kebutuhan literasi Indonesia.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('about') }}" class="bg-oxford text-white hover:bg-oxford/90 px-8 py-4 rounded-sm font-medium text-center shadow-lg transition-transform hover:scale-[0.98]">
                    Lihat Profil Kami
                </a>
                <a href="https://wa.me/6281275392906?text=Halo%20Admin%20PT%20Urban%20Mobilitas%20Indragiri,%20saya%20ingin%20konsultasi%20tentang%20penerbitan%20buku"
                    target="_blank"
                    class="border border-oxford text-oxford hover:bg-oxford/5 px-8 py-4 rounded-sm font-medium text-center transition-colors">
                    Konsultasi Penerbitan
                </a>
            </div>
        </div>

        <div class="hidden lg:block relative">
            <div class="relative overflow-hidden rounded-sm shadow-2xl">
                <img src="https://images.unsplash.com/photo-1761824197923-283b689fe7aa?q=80&w=800&auto=format&fit=crop" class="w-full h-[600px] object-cover">
                <div class="absolute inset-0 bg-oxford/10"></div>
            </div>
            <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-gold/10 rounded-sm -z-10"></div>
        </div>
    </div>
</section>

<section class="py-24 bg-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
        <h2 class="font-serif text-4xl md:text-5xl text-oxford mb-4">Sekilas Tentang Kami</h2>
        <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>

        <div class="max-w-3xl mx-auto">
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                PT. Urban Mobilitas Indragiri adalah perusahaan penerbit yang bergerak di bidang publikasi buku akademik dan umum. Kami berkomitmen untuk mendukung pengembangan ilmu pengetahuan dan meningkatkan literasi nasional melalui penerbitan karya-karya berkualitas.
            </p>
            <a href="{{ route('about') }}" class="inline-flex items-center text-oxford hover:text-gold font-serif italic text-lg transition-colors group">
                <span>Pelajari Lebih Lanjut</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="py-24 bg-paper-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl md:text-5xl text-oxford mb-4">Mengapa Memilih Kami?</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($features as $feature)
            <div class="bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-gold/50 transition-all duration-300 group relative overflow-hidden rounded-sm p-8">
                <div class="gold-line"></div>
                <div class="text-gold mb-4 w-8 h-8">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $feature['icon'] !!}
                    </svg>
                </div>
                <h3 class="font-sans text-xl md:text-2xl font-semibold text-oxford/90 mb-3">
                    {{ $feature['title'] }}
                </h3>
                <p class="font-sans text-base leading-relaxed text-gray-600">
                    {{ $feature['description'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-oxford text-white text-center fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <h2 class="font-serif text-4xl md:text-5xl font-normal tracking-tight mb-6">
            Siap Menerbitkan Karya Anda?
        </h2>
        <p class="font-sans text-base md:text-lg leading-relaxed text-white/80 mb-8 max-w-2xl mx-auto">
            Bergabunglah dengan ratusan penulis yang telah mempercayakan karya mereka kepada kami. Mari wujudkan ide Anda menjadi buku yang menginspirasi.
        </p>
        <a href="https://wa.me/6281275392906?text=Halo%20Admin%20Urban%20Indragiri%20Press,%20saya%20ingin%20konsultasi%20tentang%20penerbitan%20buku"
            target="_blank"
            class="inline-block bg-gold text-oxford hover:bg-gold/90 rounded-sm px-8 py-6 font-sans font-medium tracking-wide shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[0.98]">
            Konsultasi Sekarang
        </a>
    </div>
</section>
@endsection