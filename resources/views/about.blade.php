@extends('layouts.app')

@section('content')
{{-- BAGIAN 1: HEADER --}}
<section class="relative py-24 bg-gradient-to-br from-paper-white to-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
        <div class="font-mono text-xs tracking-widest uppercase text-oxford/70 mb-4">Company Profile</div>
        <h1 class="font-serif text-5xl md:text-7xl font-medium tracking-tight text-oxford mb-6">Tentang Kami</h1>
        <div class="w-24 h-1 bg-gold mx-auto"></div>
    </div>
</section>

{{-- BAGIAN 2: PROFIL PERUSAHAAN (VERSI STARTUP / HUMBLE) --}}
<section class="py-16 bg-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Gambar Ilustrasi --}}
            <div class="relative rounded-sm overflow-hidden shadow-lg border border-gray-100">
                <img src="https://images.unsplash.com/photo-1488748809185-53ad203ca5cf?q=80&w=800&auto=format&fit=crop"
                    alt="Professional Writing"
                    class="w-full h-[500px] object-cover hover:scale-105 transition-transform duration-700">
            </div>

            {{-- Teks Profil --}}
            <div>
                <h2 class="font-serif text-4xl text-oxford mb-6">Profil Perusahaan</h2>
                <div class="space-y-4 text-lg text-gray-600 leading-relaxed font-sans">
                    <p>
                        <STRONG>Urban Indragiri Press</STRONG> adalah divisi penerbitan resmi di bawah naungan <strong>PT. Urban Mobilitas Indragiri</strong> hadir sebagai penerbit yang bergerak di bidang publikasi buku akademik, buku ajar, monograf, prosiding, dan buku umum.
                    </p>
                    <p>
                        Kami berkomitmen untuk mendukung pengembangan literasi nasional dengan menyediakan layanan penerbitan yang rapi dan terstruktur, mulai dari penyuntingan naskah, tata letak (layout), hingga pengurusan legalitas seperti ISBN dan HKI. Kami berupaya memberikan hasil terbaik bagi setiap karya yang diterbitkan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BAGIAN 3: VISI & MISI --}}
<section class="py-24 bg-paper-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl md:text-5xl text-oxford mb-4">Visi & Misi</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {{-- Kartu Visi --}}
            <div class="bg-white border border-gray-100 shadow-sm p-10 rounded-sm hover:shadow-md transition-all group">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center mr-4 group-hover:bg-gold transition-colors">
                        <span class="text-gold font-serif font-bold text-xl group-hover:text-oxford">V</span>
                    </div>
                    <h3 class="font-serif text-3xl font-semibold text-oxford">Visi</h3>
                </div>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Menjadi penerbit profesional dan terpercaya dalam mendukung pengembangan ilmu pengetahuan dan literasi nasional.
                </p>
            </div>

            {{-- Kartu Misi --}}
            <div class="bg-white border border-gray-100 shadow-sm p-10 rounded-sm hover:shadow-md transition-all group">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-oxford rounded-sm flex items-center justify-center mr-4 group-hover:bg-gold transition-colors">
                        <span class="text-gold font-serif font-bold text-xl group-hover:text-oxford">M</span>
                    </div>
                    <h3 class="font-serif text-3xl font-semibold text-oxford">Misi</h3>
                </div>
                <ul class="space-y-4">
                    @foreach([
                    "Menyediakan layanan penerbitan berkualitas dan berstandar nasional",
                    "Mendukung dosen dan penulis dalam menghasilkan karya ilmiah bermutu",
                    "Meningkatkan akses publik terhadap buku akademik dan ilmiah",
                    "Membangun ekosistem literasi yang berkelanjutan di Indonesia"
                    ] as $misi)
                    <li class="flex items-start space-x-3">
                        <svg class="w-6 h-6 text-gold mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-600">{{ $misi }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- BAGIAN 4: TIM REDAKSI (STRUKTUR ORGANISASI) --}}
<section class="py-24 bg-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl md:text-5xl text-oxford mb-4">Tim Redaksi</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
            {{-- TEKS YANG ANDA MINTA --}}
            <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto font-sans">
                Profesional yang berdedikasi tinggi dalam menjamin kualitas setiap terbitan.
            </p>
        </div>

        {{-- Level 1: Pemimpin Redaksi --}}
        <div class="flex justify-center mb-16">
            <div class="group relative bg-white border border-gray-100 rounded-sm shadow-sm hover:shadow-xl transition-all duration-500 p-8 text-center max-w-sm w-full">
                <div class="w-32 h-32 mx-auto mb-6 relative">
                    <div class="absolute inset-0 bg-gold rounded-full opacity-0 group-hover:opacity-10 transition-opacity duration-300 scale-110"></div>
                    <img class="w-full h-full rounded-full object-cover border-2 border-gray-100 group-hover:border-gold transition-colors duration-300"
                        src="https://ui-avatars.com/api/?name=Asri+Zulbeni&background=1e293b&color=D4AF37&size=128&font-size=0.33"
                        alt="Asri Zulbeni">
                </div>
                <h3 class="font-serif text-2xl text-oxford mb-2 group-hover:text-gold transition-colors">Asri Zulbeni</h3>
                <p class="font-mono text-xs tracking-widest uppercase text-gray-500 border-t border-gray-100 pt-3 mt-3 inline-block">Pemimpin Redaksi</p>
            </div>
        </div>

        {{-- Level 2: Tim Pendukung --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Editor --}}
            <div class="group bg-paper-white border border-gray-100 rounded-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-8 text-center">
                <div class="w-24 h-24 mx-auto mb-4">
                    <img class="w-full h-full rounded-full object-cover border-2 border-white shadow-sm group-hover:border-gold transition-colors"
                        src="https://ui-avatars.com/api/?name=Pretti+Ristra&background=ffffff&color=1e293b&size=128"
                        alt="Pretti Ristra">
                </div>
                <h3 class="font-serif text-xl text-oxford mb-1">Pretti Ristra</h3>
                <p class="font-mono text-xs tracking-widest uppercase text-gold">Editor</p>
            </div>

            {{-- Reviewer --}}
            <div class="group bg-paper-white border border-gray-100 rounded-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-8 text-center">
                <div class="w-24 h-24 mx-auto mb-4">
                    <img class="w-full h-full rounded-full object-cover border-2 border-white shadow-sm group-hover:border-gold transition-colors"
                        src="https://ui-avatars.com/api/?name=Agnes+Arum&background=ffffff&color=1e293b&size=128"
                        alt="Agnes Arum Budiana">
                </div>
                <h3 class="font-serif text-xl text-oxford mb-1">Agnes Arum Budiana</h3>
                <p class="font-mono text-xs tracking-widest uppercase text-gold">Reviewer</p>
            </div>

            {{-- Cover Desainer --}}
            <div class="group bg-paper-white border border-gray-100 rounded-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 p-8 text-center">
                <div class="w-24 h-24 mx-auto mb-4">
                    <img class="w-full h-full rounded-full object-cover border-2 border-white shadow-sm group-hover:border-gold transition-colors"
                        src="https://ui-avatars.com/api/?name=Desi+Wahana&background=ffffff&color=1e293b&size=128"
                        alt="Desi Wahana">
                </div>
                <h3 class="font-serif text-xl text-oxford mb-1">Desi Wahana</h3>
                <p class="font-mono text-xs tracking-widest uppercase text-gold">Cover Designer</p>
            </div>
        </div>
    </div>
</section>

{{-- BAGIAN 5: LEGALITAS & IDENTITAS --}}
<section class="py-24 bg-paper-white fade-in-section">
    <div class="max-w-4xl mx-auto px-6 md:px-12">
        <div class="bg-white border border-gold/30 rounded-sm p-10 shadow-lg">
            <h2 class="font-serif text-3xl text-oxford mb-8 text-center">Legalitas & Identitas</h2>

            <div class="space-y-8">
                {{-- Nama Resmi --}}
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-oxford flex items-center justify-center rounded-sm flex-shrink-0">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-oxford text-xl mb-1">Nama Resmi</h3>
                        <p class="text-gray-600">PT. Urban Mobilitas Indragiri</p>
                    </div>
                </div>

                {{-- Alamat --}}
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-oxford flex items-center justify-center rounded-sm flex-shrink-0">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-oxford text-xl mb-1">Alamat Kantor</h3>
                        <p class="text-gray-600">Perum Griya Palas Mekar Blok K13, Kota Pekanbaru, Riau, Indonesia</p>
                    </div>
                </div>

                {{-- Dokumen & Perizinan (VERSI NOMOR - AMAN & PROFESIONAL) --}}
                <div class="flex items-start space-x-6 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-oxford flex items-center justify-center rounded-sm flex-shrink-0">
                        {{-- Icon Shield/Dokumen --}}
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="w-full">
                        <h3 class="font-bold text-oxford text-xl mb-4">Dokumen & Izin Resmi</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            {{-- NPWP --}}
                            <div class="p-4 bg-gray-50 rounded-sm border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-center mb-2">
                                    <div class="w-5 h-5 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                        <svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-bold text-sm">NPWP Perusahaan</span>
                                </div>
                                <p class="text-gray-500 text-xs font-mono tracking-wider ml-7">Tersedia & Valid</p>
                            </div>

                            {{-- NIB --}}
                            <div class="p-4 bg-gray-50 rounded-sm border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-center mb-2">
                                    <div class="w-5 h-5 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                        <svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-bold text-sm">NIB (Berusaha)</span>
                                </div>
                                <p class="text-gray-500 text-xs font-mono tracking-wider ml-7">0701260091951</p>
                            </div>

                            {{-- SK Kemenkumham --}}
                            <div class="p-4 bg-gray-50 rounded-sm border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-center mb-2">
                                    <div class="w-5 h-5 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                        <svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-bold text-sm">SK Kemenkumham</span>
                                </div>
                                <p class="text-gray-500 text-xs font-mono tracking-wider ml-7">AHU-001340.AH.01.30.Tahun 2026</p>
                            </div>

                            {{-- Sertifikat Standar --}}
                            <div class="p-4 bg-gray-50 rounded-sm border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-center mb-2">
                                    <div class="w-5 h-5 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                        <svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-bold text-sm">Sertifikat Standar</span>
                                </div>
                                <p class="text-gray-500 text-xs font-mono tracking-wider ml-7">Terverifikasi Pemerintah</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection