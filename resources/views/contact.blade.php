@extends('layouts.app')

@section('content')
<section class="relative py-24 bg-gradient-to-br from-paper-white to-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
        <div class="font-mono text-xs tracking-widest uppercase text-oxford/70 mb-4">Get In Touch</div>
        <h1 class="font-serif text-5xl md:text-7xl font-medium tracking-tight text-oxford mb-6">Hubungi Kami</h1>
        <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>
        <p class="font-sans text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Ada pertanyaan atau ingin berkonsultasi? Tim kami siap membantu Anda.
        </p>
    </div>
</section>

<section class="py-16 bg-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            {{-- KOLOM KIRI: INFO KONTAK --}}
            <div>
                <h2 class="font-serif text-4xl text-oxford mb-8">Informasi Kontak</h2>

                <div class="space-y-8 mb-10">
                    {{-- 1. Alamat --}}
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center flex-shrink-0 text-gold">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-sans text-lg font-bold text-oxford mb-1">Alamat</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Perum Griya Palas Mekar Blok K13<br>
                                Kota Pekanbaru, Riau, Indonesia
                            </p>
                        </div>
                    </div>

                    {{-- 2. Email --}}
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center flex-shrink-0 text-gold">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-sans text-lg font-bold text-oxford mb-1">Email</h3>
                            <a href="mailto:publisher@urbanmobindragiri.co.id" class="text-gray-600 hover:text-gold transition-colors">
                                publisher@urbanmobindragiri.co.id
                            </a>
                        </div>
                    </div>

                    {{-- 3. WhatsApp --}}
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center flex-shrink-0 text-gold">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-sans text-lg font-bold text-oxford mb-1">WhatsApp Admin</h3>
                            {{-- Perbaikan Link WhatsApp dengan pesan otomatis --}}
                            <a href="https://wa.me/6281275392906?text=Halo%20Admin%2C%20saya%20ingin%20berkonsultasi%20mengenai%20penerbitan%20buku%20di%20Urban%20Indragiri%20Press."
                                target="_blank"
                                class="text-gray-600 hover:text-gold transition-colors">
                                +62 812-7539-2906
                            </a>
                        </div>
                    </div>
                </div>

                {{-- MAPS (SUDAH DIPERBAIKI) --}}
                <div class="rounded-sm overflow-hidden shadow-lg border border-oxford/10 h-[300px]">
                    <iframe
                        src="https://maps.google.com/maps?q=Perum+Griya+Palas+Mekar+Blok+K13,+Kota+Pekanbaru,+Riau&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            {{-- KOLOM KANAN: FORM PESAN --}}
            <div>
                <div class="bg-paper-white border border-oxford/10 rounded-sm p-8 shadow-lg">
                    <h2 class="font-serif text-3xl font-semibold text-oxford mb-6">Kirim Pesan</h2>

                    @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-sm">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-bold text-oxford mb-2">Nama Lengkap *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-white border border-oxford/20 rounded-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors" placeholder="Masukkan nama lengkap Anda">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-oxford mb-2">Email *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 bg-white border border-oxford/20 rounded-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors" placeholder="email@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-oxford mb-2">Subjek *</label>
                            <input type="text" name="subject" required class="w-full px-4 py-3 bg-white border border-oxford/20 rounded-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors" placeholder="Kerja sama / Penerbitan / Lainnya">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-oxford mb-2">Pesan *</label>
                            <textarea name="message" rows="6" required class="w-full px-4 py-3 bg-white border border-oxford/20 rounded-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors resize-none" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-oxford text-white hover:bg-oxford/90 rounded-sm px-8 py-4 font-sans font-medium tracking-wide shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[0.98]">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-oxford text-white text-center fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <p class="font-serif italic text-3xl md:text-4xl text-gold mb-6">
            Publishing Ideas That Shape the Future
        </p>
        <p class="font-sans text-lg text-white/80 max-w-2xl mx-auto">
            Mari bersama-sama mewujudkan ide cemerlang Anda menjadi karya yang menginspirasi generasi mendatang.
        </p>
    </div>
</section>
@endsection