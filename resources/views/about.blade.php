@extends('layouts.app')

@section('content')
<section class="relative py-24 bg-gradient-to-br from-paper-white to-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
        <div class="font-mono text-xs tracking-widest uppercase text-oxford/70 mb-4">Company Profile</div>
        <h1 class="font-serif text-5xl md:text-7xl font-medium tracking-tight text-oxford mb-6">Tentang Kami</h1>
        <div class="w-24 h-1 bg-gold mx-auto"></div>
    </div>
</section>

<section class="py-16 bg-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative rounded-sm overflow-hidden shadow-lg border border-gray-100">
                <img src="https://images.unsplash.com/photo-1488748809185-53ad203ca5cf?q=80&w=800&auto=format&fit=crop" 
                     alt="Professional Writing" 
                     class="w-full h-[500px] object-cover hover:scale-105 transition-transform duration-700">
            </div>

            <div>
                <h2 class="font-serif text-4xl text-oxford mb-6">Profil Perusahaan</h2>
                <div class="space-y-4 text-lg text-gray-600 leading-relaxed font-sans">
                    <p>
                        <strong>PT. Urban Mobilitas Indragiri</strong> adalah perusahaan penerbit profesional yang berkomitmen untuk mendukung pengembangan ilmu pengetahuan dan literasi nasional. Kami hadir sebagai mitra terpercaya bagi para akademisi, dosen, dan penulis dalam mewujudkan karya-karya ilmiah berkualitas.
                    </p>
                    <p>
                        Dengan pengalaman dan dedikasi tinggi, kami menyediakan layanan penerbitan yang komprehensif, mulai dari editing, layout, hingga pengurusan legalitas seperti ISBN dan HKI. Setiap buku yang kami terbitkan mencerminkan standar profesional dan komitmen kami terhadap kualitas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-paper-white fade-in-section">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="font-serif text-4xl md:text-5xl text-oxford mb-4">Visi & Misi</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
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

<section class="py-24 bg-white fade-in-section">
    <div class="max-w-4xl mx-auto px-6 md:px-12">
        <div class="bg-paper-white border border-gold/30 rounded-sm p-10 shadow-lg">
            <h2 class="font-serif text-3xl text-oxford mb-8 text-center">Legalitas & Identitas</h2>
            <div class="space-y-8">
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-oxford flex items-center justify-center rounded-sm flex-shrink-0">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-oxford text-xl mb-1">Nama Resmi</h3>
                        <p class="text-gray-600">PT. Urban Mobilitas Indragiri</p>
                    </div>
                </div>
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-oxford flex items-center justify-center rounded-sm flex-shrink-0">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-oxford text-xl mb-1">Alamat Kantor</h3>
                        <p class="text-gray-600">Perum Griya Palas Mekar Blok K13, Kota Pekanbaru, Riau, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection