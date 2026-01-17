@extends('layouts.app')

@section('content')
<section class="relative py-24 bg-gradient-to-br from-paper-white to-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
        <div class="font-mono text-xs tracking-widest uppercase text-oxford/70 mb-4">Publishing Process</div>
        <h1 class="font-serif text-5xl md:text-7xl font-medium tracking-tight text-oxford mb-6">Prosedur Penerbitan</h1>
        <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>
        <p class="font-sans text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Proses penerbitan yang transparan dan terstruktur untuk memastikan karya Anda terbit dengan kualitas terbaik.
        </p>
    </div>
</section>

<section class="py-16 bg-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="hidden lg:block relative">
            <div class="absolute top-8 left-0 right-0 h-1 bg-oxford/10 z-0"></div>

            <div class="grid grid-cols-5 gap-4 relative z-10">
                @foreach($procedures as $index => $proc)
                <div class="text-center group" style="transition-delay: {{ $index * 150 }}ms">
                    <div class="w-16 h-16 bg-oxford rounded-full flex items-center justify-center mx-auto mb-8 border-4 border-white shadow-lg transition-transform group-hover:scale-110 group-hover:bg-gold">
                        <span class="text-gold font-serif font-bold text-xl group-hover:text-oxford">{{ $proc['step'] }}</span>
                    </div>
                    
                    <div class="bg-paper-white border border-gray-100 p-6 rounded-sm shadow-sm hover:shadow-md hover:border-gold/50 transition-all h-full">
                        <h3 class="font-serif text-lg font-bold text-oxford mb-3">{{ $proc['title'] }}</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">{{ $proc['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="lg:hidden space-y-8 relative">
            <div class="absolute left-8 top-0 bottom-0 w-1 bg-oxford/10 z-0"></div>

            @foreach($procedures as $proc)
            <div class="relative z-10 flex items-start space-x-6">
                <div class="w-16 h-16 bg-oxford rounded-full flex items-center justify-center border-4 border-white shadow-lg flex-shrink-0">
                    <span class="text-gold font-serif font-bold text-xl">{{ $proc['step'] }}</span>
                </div>
                <div class="flex-1 bg-paper-white border border-gray-100 p-6 rounded-sm shadow-sm">
                    <h3 class="font-serif text-lg font-bold text-oxford mb-2">{{ $proc['title'] }}</h3>
                    <p class="text-sm text-gray-600">{{ $proc['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-paper-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl text-oxford mb-4">Informasi Penting</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 border border-gray-100 shadow-sm text-center rounded-sm hover:shadow-md transition-all group">
                <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center mx-auto mb-4 group-hover:bg-gold transition-colors text-gold group-hover:text-oxford">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                </div>
                <h3 class="font-bold text-oxford text-xl mb-2">Format Naskah</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Naskah dapat dikirim dalam format Word (.docx) atau PDF dengan struktur yang rapi.</p>
            </div>
            <div class="bg-white p-8 border border-gray-100 shadow-sm text-center rounded-sm hover:shadow-md transition-all group">
                <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center mx-auto mb-4 group-hover:bg-gold transition-colors text-gold group-hover:text-oxford">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3 class="font-bold text-oxford text-xl mb-2">Timeline</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Proses penerbitan memakan waktu 4-8 minggu tergantung kompleksitas naskah.</p>
            </div>
            <div class="bg-white p-8 border border-gray-100 shadow-sm text-center rounded-sm hover:shadow-md transition-all group">
                <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center mx-auto mb-4 group-hover:bg-gold transition-colors text-gold group-hover:text-oxford">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                </div>
                <h3 class="font-bold text-oxford text-xl mb-2">Konsultasi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Tim kami siap memberikan konsultasi gratis sebelum Anda memulai proses penerbitan.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-oxford text-white text-center fade-in-section">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="font-serif text-4xl md:text-5xl font-normal tracking-tight mb-6">
            Siap Memulai Proses Penerbitan?
        </h2>
        <p class="font-sans text-lg text-white/80 mb-8 max-w-2xl mx-auto">
            Kirimkan naskah Anda sekarang dan wujudkan impian menjadi penulis yang dipublikasikan.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-gold text-oxford hover:bg-gold/90 rounded-sm px-8 py-4 font-sans font-bold tracking-wide shadow-lg transition-transform hover:scale-105">
            Kirim Naskah Sekarang
        </a>
    </div>
</section>
@endsection