@extends('layouts.app')

@section('content')
<section class="relative py-24 bg-gradient-to-br from-paper-white to-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
        <div class="font-mono text-xs tracking-widest uppercase text-oxford/70 mb-4">Our Services</div>
        <h1 class="font-serif text-5xl md:text-7xl font-medium tracking-tight text-oxford mb-6">Layanan & Paket</h1>
        <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>
        <p class="font-sans text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Solusi penerbitan terpadu untuk menghadirkan karya Anda ke tangan pembaca dengan standar profesional tertinggi.
        </p>
    </div>
</section>

<section class="py-16 bg-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl text-oxford mb-4">Solusi Penerbitan Terpadu</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $index => $service)
            <div class="bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-gold/50 transition-all duration-300 group relative overflow-hidden rounded-sm p-8" style="transition-delay: {{ $index * 100 }}ms">
                <div class="gold-line"></div>
                
                <div class="flex items-center justify-center w-16 h-16 bg-oxford/5 rounded-sm mb-6 group-hover:bg-oxford/10 transition-colors text-oxford">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $service['icon'] !!}
                    </svg>
                </div>

                <h3 class="font-sans text-xl md:text-2xl font-semibold tracking-tight text-oxford/90 mb-4">
                    {{ $service['title'] }}
                </h3>
                
                <p class="font-sans text-base leading-relaxed text-gray-600">
                    {{ $service['description'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-paper-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl md:text-5xl text-oxford mb-4">Keunggulan Layanan Kami</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center flex-shrink-0 text-gold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" /></svg>
                </div>
                <div>
                    <h3 class="font-sans text-xl font-semibold text-oxford mb-2">Standar Nasional</h3>
                    <p class="font-sans text-base text-gray-600">Semua penerbitan mengikuti standar nasional dengan pengurusan ISBN resmi dari Perpustakaan Nasional.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center flex-shrink-0 text-gold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div>
                    <h3 class="font-sans text-xl font-semibold text-oxford mb-2">Proses Cepat</h3>
                    <p class="font-sans text-base text-gray-600">Timeline penerbitan yang efisien dengan komunikasi transparan di setiap tahapan.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center flex-shrink-0 text-gold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <div>
                    <h3 class="font-sans text-xl font-semibold text-oxford mb-2">Tim Profesional</h3>
                    <p class="font-sans text-base text-gray-600">Editor dan desainer berpengalaman siap membantu menyempurnakan karya Anda.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center flex-shrink-0 text-gold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <div>
                    <h3 class="font-sans text-xl font-semibold text-oxford mb-2">Perlindungan HKI</h3>
                    <p class="font-sans text-base text-gray-600">Layanan pengurusan hak cipta untuk melindungi kekayaan intelektual Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-oxford text-white text-center fade-in-section">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="font-serif text-4xl md:text-5xl mb-6">Tertarik dengan Layanan Kami?</h2>
        <p class="font-sans text-lg text-white/80 mb-8 max-w-2xl mx-auto">
            Konsultasikan kebutuhan penerbitan Anda dengan tim profesional kami. Kami siap membantu mewujudkan karya terbaik Anda.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-gold text-oxford hover:bg-gold/90 rounded-sm px-8 py-6 font-sans font-medium tracking-wide shadow-lg hover:shadow-xl transition-all hover:scale-[0.98]">
            Hubungi Kami
        </a>
    </div>
</section>
@endsection