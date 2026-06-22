@extends('layouts.app')

@section('title', 'Sejarah Masjid Raya Baiturrahman | Warisan Peradaban Aceh')

@section('meta_description', 'Jelajahi garis waktu sejarah Masjid Raya Baiturrahman Banda Aceh dari abad ke-17 era Kesultanan, agresi kolonial, mukjizat Tsunami 2004, hingga revitalisasi modern.')

@section('content')

<div id="sejarah-scroll-progress" class="fixed top-0 left-0 h-[3px] bg-gold z-[60] transition-all duration-150 ease-out" style="width: 0%"></div>

{{-- SECTION 1 — HERO STORYTELLING BANNER --}}
<section id="sejarah-hero" class="relative w-full h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0 flex">
        <div class="w-full h-full bg-cover bg-center brightness-90"
             style="background-image: url('{{ asset('assets/img/sejarah-hero-split.png') }}');"></div>
    </div>
    <div class="absolute inset-0 z-10 bg-gradient-to-t from-charcoal via-charcoal/85 to-emerald-dark/40"></div>
    <div class="bg-geo-pattern absolute inset-0 z-20 opacity-5 pointer-events-none"></div>

    <div class="relative z-30 text-center max-w-4xl px-6 md:px-12 flex flex-col items-center">
        <span class="inline-flex items-center gap-2 bg-gold/15 border border-gold/45 text-gold font-sans font-bold text-[11px] px-5 py-2 rounded-full mb-8 tracking-[3px] uppercase">
            <iconify-icon icon="ph:star-four" class="animate-spin-slow text-gold"></iconify-icon>
            Warisan Islam Aceh
        </span>
        <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-white font-bold leading-tight tracking-tight mb-6 max-w-3xl">
            {{ $history?->hero_title }}
        </h1>
        <p class="font-sans text-sm sm:text-base md:text-lg text-white/80 max-w-2xl leading-relaxed mb-10">
            {{ $history?->hero_subtitle }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 items-center w-full sm:w-auto">
            <a href="#pengantar" class="w-full sm:w-auto bg-gold hover:bg-gold-light text-emerald-dark font-sans font-bold text-xs px-8 py-4 rounded-md shadow-lg shadow-gold/15 transition-all duration-300 uppercase tracking-wider flex items-center justify-center gap-2">
                Jelajahi Sejarah
                <iconify-icon icon="ph:caret-double-down" width="14"></iconify-icon>
            </a>
            <a href="#historical-gallery" class="w-full sm:w-auto bg-white/10 hover:bg-white/15 border border-white/20 text-white font-sans font-semibold text-xs px-8 py-4 rounded-md transition-all duration-300 uppercase tracking-wider flex items-center justify-center">
                Lihat Galeri Tempo Dulu
            </a>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-30 flex flex-col items-center gap-1.5 text-white/50 text-[10px] tracking-widest uppercase animate-bounce cursor-pointer">
        <span>Gulir</span>
        <iconify-icon icon="ph:arrow-down" class="text-gold" width="14"></iconify-icon>
    </div>
</section>

{{-- SECTION 2 — PENGANTAR --}}
<section id="pengantar" class="py-24 relative overflow-hidden bg-ivory">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <div class="lg:col-span-7 flex flex-col reveal-on-scroll">
                <div class="w-16 h-1 bg-gold mb-8"></div>
                <div class="relative">
                    <span class="text-gold/25 font-serif text-[180px] leading-none absolute -left-6 -top-20 select-none">&ldquo;</span>
                    <blockquote class="font-serif italic text-2xl md:text-3xl text-emerald-dark leading-relaxed relative z-10 pt-4">
                        {{ $history?->quote_text }}
                    </blockquote>
                </div>
                <p class="font-sans font-bold text-xs uppercase tracking-widest text-gold mt-6 flex items-center gap-2">
                    <span class="w-4 h-[1px] bg-gold"></span>
                    Simbol Kekuatan Rakyat Aceh
                </p>
            </div>

            <div class="lg:col-span-5 flex flex-col reveal-on-scroll delay-200">
                <h3 class="font-serif text-3xl font-bold text-charcoal mb-6 leading-tight">
                    {{ $history?->intro_title }}
                </h3>
                <p class="font-sans text-sm text-charcoal-light leading-relaxed mb-8">
                    {{ $history?->intro_description }}
                </p>

                <ul class="flex flex-col gap-4 font-sans text-sm text-charcoal">
                    <li class="flex items-center gap-3.5 pb-3 border-b border-gold/10">
                        <span class="w-7 h-7 rounded-full bg-emerald/10 border border-gold/30 flex items-center justify-center text-gold"><iconify-icon icon="ph:map-pin"></iconify-icon></span>
                        <span class="font-semibold text-emerald-dark">Berdiri di pusat Kota Banda Aceh</span>
                    </li>
                    <li class="flex items-center gap-3.5 pb-3 border-b border-gold/10">
                        <span class="w-7 h-7 rounded-full bg-emerald/10 border border-gold/30 flex items-center justify-center text-gold"><iconify-icon icon="ph:sword"></iconify-icon></span>
                        <span class="font-semibold text-emerald-dark">Bertahan dari gempuran perang kolonial</span>
                    </li>
                    <li class="flex items-center gap-3.5 pb-3 border-b border-gold/10">
                        <span class="w-7 h-7 rounded-full bg-emerald/10 border border-gold/30 flex items-center justify-center text-gold"><iconify-icon icon="ph:shield-check"></iconify-icon></span>
                        <span class="font-semibold text-emerald-dark">Selamat dari Tsunami dahsyat 2004</span>
                    </li>
                    <li class="flex items-center gap-3.5">
                        <span class="w-7 h-7 rounded-full bg-emerald/10 border border-gold/30 flex items-center justify-center text-gold"><iconify-icon icon="ph:crown"></iconify-icon></span>
                        <span class="font-semibold text-emerald-dark">Ikon peradaban dan kebanggaan rakyat Aceh</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="absolute right-0 bottom-0 w-full h-full opacity-10 bg-no-repeat bg-cover pointer-events-none"
         style="background-image: url('{{ asset('assets/img/koridor-bg.jpg') }}'); mix-blend-mode: multiply;"></div>
</section>

{{-- SECTION 3 — INTERACTIVE TIMELINE HISTORY --}}
<section id="timeline" class="pt-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 text-center mb-20 reveal-on-scroll">
        <span class="text-gold font-sans font-bold text-xs uppercase tracking-widest block mb-3">Garis Waktu Sejarah</span>
        <h2 class="font-serif text-3xl md:text-4xl text-emerald-dark font-bold">Menelusuri Perjalanan Abadi Baiturrahman</h2>
        <div class="w-24 h-1 bg-gold mx-auto mt-4"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 relative">
        <div class="timeline-axis relative">
            <div class="flex flex-col gap-16 md:gap-24">

                @forelse($timelines as $index => $timeline)
                    @php $isEven = $index % 2 === 0; @endphp
                    <div class="relative flex flex-col {{ $isEven ? 'md:flex-row' : 'md:flex-row-reverse' }} items-center md:justify-between reveal-on-scroll">
                        <div class="md:w-[45%] {{ $isEven ? 'md:text-right flex flex-col md:items-end' : 'flex flex-col items-start' }}">
                            <span class="inline-block {{ $isEven ? 'bg-gold text-emerald-dark' : 'bg-emerald text-white' }} px-4 py-1.5 rounded-full font-sans font-extrabold text-sm tracking-wider shadow-sm mb-3">{{ $timeline->year_period }}</span>
                        </div>
                        <div class="absolute left-[20px] md:left-1/2 md:-translate-x-1/2 top-1 w-5 h-5 rounded-full bg-emerald border-4 border-gold shadow-[0_0_12px_rgba(212,175,55,0.7)] z-10"></div>
                        <div class="md:w-[45%] mt-6 md:mt-0 rounded-lg overflow-hidden">
                            <h3 class="font-serif text-xl md:text-2xl text-emerald-dark font-semibold mb-2">{{ $timeline->title }}</h3>
                            <p class="font-sans text-xs md:text-sm text-charcoal-light leading-relaxed">
                                {{ $timeline->description }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-charcoal-light py-12">
                        <p class="font-sans text-sm">Belum ada data timeline.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>

    {{-- Tsunami Block --}}
    <div class="w-full mt-24 relative overflow-hidden bg-cover bg-center py-28 px-6 md:px-20 parallax-bg-effect"
         style="background-image: url('{{ asset('assets/img/sejarah-tsunami-miracle.png') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-dark/95 via-emerald-dark/85 to-transparent z-0"></div>

        <div class="max-w-7xl mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center text-white">
            <div class="lg:col-span-7 flex flex-col reveal-on-scroll">
                <span class="text-gold font-sans font-bold text-xs uppercase tracking-[3px] mb-3 block">MUKJIZAT 26 DESEMBER 2004</span>
                <h2 class="font-serif text-3xl md:text-5xl font-bold leading-tight mb-6 max-w-xl">
                    {{ $history?->tsunami_stat_title }}
                </h2>
                <p class="font-sans text-sm sm:text-base text-white/80 leading-relaxed max-w-2xl mb-8">
                    {{ $history?->tsunami_stat_description }}
                </p>
            </div>

            <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-6 reveal-on-scroll delay-200">
                <div class="p-6 bg-white/10 backdrop-blur-md rounded-xl border border-white/15">
                    <span class="block font-display text-4xl md:text-5xl text-gold font-extrabold mb-1">9,1</span>
                    <span class="font-sans text-[10px] text-white/60 tracking-wider uppercase font-semibold">SKALA RICHTER</span>
                    <p class="font-sans text-xs text-white/70 mt-2">Daya guncang gempa terdahsyat abad ke-21.</p>
                </div>
                <div class="p-6 bg-white/10 backdrop-blur-md rounded-xl border border-white/15">
                    <span class="block font-display text-4xl md:text-5xl text-gold font-extrabold mb-1">200k+</span>
                    <span class="font-sans text-[10px] text-white/60 tracking-wider uppercase font-semibold">PENYINTAS</span>
                    <p class="font-sans text-xs text-white/70 mt-2">Ribuan jiwa berlindung dengan selamat di dalam masjid.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SECTION 4 — ARSITEKTUR BERSEJARAH --}}
<section id="arsitektur" class="py-24 bg-soft-gray border-b border-soft-gray-2">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="text-center mb-16 reveal-on-scroll">
            <span class="text-gold font-sans font-bold text-xs uppercase tracking-widest block mb-3">Detail Estetika</span>
            <h2 class="font-serif text-3xl md:text-4xl text-emerald-dark font-bold">Jejak Sejarah dalam Setiap Detail</h2>
            <div class="w-24 h-1 bg-gold mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($featuresEstetika as $index => $feature)
                <div class="reveal-on-scroll bg-white p-4 rounded-xl border border-gold/15 flex flex-col shadow-md card-hover-lift group" @if($index > 0) style="transition-delay: {{ $index * 100 }}ms" @endif>
                    <div class="overflow-hidden rounded-lg mb-6 h-64 img-zoom-hover">
                        <img src="{{ $feature->getFirstMediaUrl('images', 'thumb') }}" alt="{{ $feature->title }}" class="w-full h-full object-cover">
                    </div>
                    <div class="px-2 pb-2">
                        @if($feature->tagline)
                            <span class="text-gold font-sans font-bold text-[10px] tracking-wider uppercase block mb-1">{{ $feature->tagline }}</span>
                        @endif
                        <h3 class="font-serif text-xl text-emerald-dark font-bold mb-3 group-hover:text-gold transition-colors">{{ $feature->title }}</h3>
                        <p class="font-sans text-xs text-charcoal-light leading-relaxed">
                            {{ $feature->description }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-charcoal-light py-12">
                    <p class="font-sans text-sm">Belum ada data estetika.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- SECTION 5 — BAITURRAHMAN MASA KINI --}}
<section id="baiturrahman-masa-kini" class="py-24 bg-emerald text-white relative overflow-hidden">
    <div class="bg-geo-pattern absolute inset-0 z-0 opacity-5 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 relative z-10">
        <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
            <div class="reveal-on-scroll">
                <span class="text-gold font-sans font-bold text-xs uppercase tracking-widest block mb-2">Keagungan Modern</span>
                <h2 class="font-serif text-3xl md:text-5xl font-bold text-white leading-tight">Wajah Baru, Ruh yang Tetap Sama</h2>
                <p class="font-sans text-sm text-white/70 max-w-xl mt-4 leading-relaxed">
                    Transformasi pekarangan dengan memasang 12 payung elektrik raksasa menyulap suasana masjid menyerupai kompleks Masjid Nabawi di Madinah, menyejukkan jamaah dan mengundang jutaan wisatawan religi.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($featuresModern as $index => $feature)
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-xl border border-white/10 shadow-lg reveal-on-scroll" @if($index > 0) style="transition-delay: {{ ($index % 3) * 100 }}ms" @endif>
                    @if($feature->icon)
                        <div class="w-12 h-12 bg-gold/10 border border-gold/30 rounded-md flex items-center justify-center text-gold mb-6">
                            <iconify-icon icon="{{ $feature->icon }}" width="24"></iconify-icon>
                        </div>
                    @endif
                    <h4 class="font-serif text-lg font-bold mb-3 text-white">{{ $feature->title }}</h4>
                    <p class="font-sans text-xs text-white/70 leading-relaxed">
                        {{ $feature->description }}
                    </p>
                </div>
            @empty
                <div class="col-span-3 text-center text-white/50 py-12">
                    <p class="font-sans text-sm">Belum ada data fasilitas modern.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- SECTION 6 — BEFORE & AFTER COMPARISON --}}
<section id="comparison" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 text-center mb-16 reveal-on-scroll">
        <span class="text-gold font-sans font-bold text-xs uppercase tracking-widest block mb-3">Dulu & Sekarang</span>
        <h2 class="font-serif text-3xl md:text-4xl text-emerald-dark font-bold">Interaktif: Sebelum & Sesudah Revitalisasi</h2>
        <p class="font-sans text-sm text-charcoal-light mt-3 max-w-xl mx-auto">
            Geser garis kuning pada gambar di bawah untuk melihat transformasi menakjubkan wajah Baiturrahman dari era vintage abad ke-19 hingga era modern digital.
        </p>
        <div class="w-24 h-1 bg-gold mx-auto mt-4"></div>
    </div>

    <div class="max-w-4xl mx-auto px-6 reveal-on-scroll">
        <div id="before-after-slider" class="before-after-container aspect-[16/10] md:aspect-[16/9]">
            <img src="{{ asset('assets/img/after.png') }}" alt="Baiturrahman Pasca Tsunami" class="before-image">
            <div class="after-image overflow-hidden">
                <img src="{{ asset('assets/img/before.png') }}" alt="Baiturrahman Masa Kini" class="w-full h-full object-cover">
            </div>
            <div class="slider-handle">
                <div class="slider-handle-circle">
                    <iconify-icon icon="ph:arrows-left-right" class="text-gold"></iconify-icon>
                </div>
            </div>
            <span class="absolute bottom-4 left-4 bg-charcoal/80 text-white text-[10px] tracking-widest font-sans font-bold px-3.5 py-1.5 rounded uppercase z-20">Pasca Tsunami</span>
            <span class="absolute bottom-4 right-4 bg-emerald-dark/80 text-gold text-[10px] tracking-widest font-sans font-bold px-3.5 py-1.5 rounded uppercase z-20 font-bold">Masa Kini</span>
        </div>
    </div>
</section>

{{-- SECTION 7 — HISTORICAL PHOTO GALLERY --}}
<section id="historical-gallery" class="py-24 bg-charcoal text-white relative">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="text-center mb-16 reveal-on-scroll">
            <span class="text-gold font-sans font-bold text-xs uppercase tracking-widest block mb-3">Arsip Visual</span>
            <h2 class="font-serif text-3xl md:text-4xl font-bold">Galeri Foto Tempo Dulu</h2>
            <div class="w-24 h-1 bg-gold mx-auto mt-4"></div>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-12 reveal-on-scroll">
            <button class="hist-tab px-6 py-2.5 rounded-full font-sans text-xs uppercase tracking-wider transition-all bg-gold text-emerald-dark font-bold" data-filter="all">Semua Era</button>
            @foreach($galleryCategories as $key => $label)
                <button class="hist-tab px-6 py-2.5 rounded-full font-sans text-xs uppercase tracking-wider transition-all bg-white/5 text-white/70 border border-white/10 hover:border-gold/30 hover:text-gold" data-filter="{{ $key }}">{{ $label }}</button>
            @endforeach
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($galleries as $index => $gallery)
                <div class="hist-item relative group overflow-hidden rounded-xl border border-white/10 bg-white/5 p-3 cursor-pointer reveal-on-scroll" data-category="{{ $gallery->category?->slug }}" @if($index > 0) style="transition-delay: {{ ($index % 3) * 100 }}ms" @endif>
                    <div class="overflow-hidden rounded-lg aspect-[4/3] img-zoom-hover">
                        <img src="{{ $gallery->getFirstMediaUrl('thumbnail') ?: $gallery->getFirstMediaUrl('images') ?: asset('assets/img/sejarah-bg.jpg') }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover">
                    </div>
                    <div class="mt-4 px-1">
                        <h4 class="hist-item-title font-serif text-gold font-bold text-base">{{ $gallery->title }}</h4>
                        @if($gallery->description)
                            <p class="hist-item-desc font-sans text-[11px] text-white/60 leading-relaxed mt-1">{{ $gallery->description }}</p>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-white/50 py-12">
                    <p class="font-sans text-sm">Belum ada data galeri.</p>
                </div>
            @endforelse
        </div>
    </div>

    <div id="gallery-lightbox" class="lightbox-modal fixed inset-0 z-50 bg-black/85 backdrop-blur-sm items-center justify-center hidden">
        <button id="lightbox-close" class="absolute top-6 right-6 text-white hover:text-gold flex items-center justify-center p-2 rounded bg-black/30 border border-white/10 cursor-pointer" aria-label="Tutup Galeri">
            <iconify-icon icon="ph:x" width="24"></iconify-icon>
        </button>
        <div class="max-w-4xl max-h-[80vh] px-4 flex flex-col items-center">
            <img id="lightbox-img" src="" alt="" class="max-w-full max-h-[70vh] rounded-lg border border-white/10 shadow-2xl object-contain">
            <div id="lightbox-caption" class="text-center mt-6 text-white max-w-xl"></div>
        </div>
    </div>
</section>

{{-- SECTION 8 — HISTORICAL STATISTICS --}}
<section id="historical-stats" class="py-24 bg-ivory">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
            <div class="reveal-on-scroll flex flex-col">
                <span class="block font-display text-4xl md:text-5xl text-emerald font-extrabold mb-1 stats-counter" data-suffix="+" data-target="400">0</span>
                <span class="font-sans text-[10px] text-gold tracking-widest uppercase font-bold">Tahun Sejarah</span>
            </div>
            <div class="reveal-on-scroll delay-100 flex flex-col">
                <span class="block font-display text-4xl md:text-5xl text-emerald font-extrabold mb-1 stats-counter" data-target="7">0</span>
                <span class="font-sans text-[10px] text-gold tracking-widest uppercase font-bold">Kubah Utama</span>
            </div>
            <div class="reveal-on-scroll delay-200 flex flex-col">
                <span class="block font-display text-4xl md:text-5xl text-emerald font-extrabold mb-1 stats-counter" data-target="4">0</span>
                <span class="font-sans text-[10px] text-gold tracking-widest uppercase font-bold">Menara Pendamping</span>
            </div>
            <div class="reveal-on-scroll flex flex-col">
                <span class="block font-display text-4xl md:text-5xl text-emerald font-extrabold mb-1 stats-counter" data-target="1">0</span>
                <span class="font-sans text-[10px] text-gold tracking-widest uppercase font-bold">Menara Induk</span>
            </div>
            <div class="reveal-on-scroll delay-100 flex flex-col">
                <span class="block font-display text-4xl md:text-5xl text-emerald font-extrabold mb-1 stats-counter" data-no-commas="true" data-target="2004">0</span>
                <span class="font-sans text-[10px] text-gold tracking-widest uppercase font-bold">Tsunami Landmark</span>
            </div>
            <div class="reveal-on-scroll delay-200 flex flex-col">
                <span class="block font-display text-4xl md:text-5xl text-emerald font-extrabold mb-1 stats-counter" data-suffix="jt+" data-target="5">0</span>
                <span class="font-sans text-[10px] text-gold tracking-widest uppercase font-bold">Pengunjung / Thn</span>
            </div>
        </div>
    </div>
</section>

{{-- SECTION 9 — CTA --}}
<section id="cta" class="relative pt-32 pb-66 flex items-center justify-center overflow-hidden min-h-[500px] bg-emerald-dark">
    <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/img/ornamen-kubah-bg.jpg') }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-emerald-dark/95 via-emerald-dark/85 to-emerald-dark/95 z-10"></div>
    <div class="absolute inset-0 z-20 opacity-15 bg-geo-pattern pointer-events-none"></div>

    <div class="relative z-30 text-center max-w-3xl px-6 reveal-on-scroll">
        <span class="text-gold font-sans font-bold text-xs uppercase tracking-widest mb-3 block">Ziarah Religi</span>
        <h2 class="font-serif text-3xl md:text-5xl font-bold text-white mb-8 leading-tight">
            Rasakan Sendiri Keagungan Sejarah yang Masih Hidup Hingga Hari Ini
        </h2>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('home') }}#visitor-donation" class="w-full sm:w-auto bg-gold hover:bg-gold-light text-emerald-dark font-sans font-bold text-xs px-8 py-4 rounded-md shadow-lg shadow-gold/20 transition-all flex items-center justify-center gap-2">
                Panduan Kunjungan Wisatawan
                <iconify-icon icon="ph:map-trifold" width="16"></iconify-icon>
            </a>
            <a href="#historical-gallery" class="w-full sm:w-auto border-2 border-white/20 text-white hover:bg-white hover:text-emerald-dark font-sans font-semibold text-xs px-8 py-3.5 rounded-md transition-all">
                Lihat Galeri Lengkap
            </a>
            <a href="#" class="w-full sm:w-auto bg-white/10 hover:bg-white/15 border border-white/25 text-white font-sans font-semibold text-xs px-8 py-3.5 rounded-md transition-all flex items-center justify-center gap-2">
                Virtual Tour 360&deg;
                <iconify-icon icon="ph:compass" width="16" class="text-gold"></iconify-icon>
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<style>
    #sejarah-scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: #d4af37;
        z-index: 60;
        transition: width 0.15s ease-out;
    }
    .timeline-axis::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, transparent, #d4af37 15%, #d4af37 85%, transparent);
        transform: translateX(-50%);
    }
    @media (max-width: 768px) {
        .timeline-axis::before {
            left: 20px;
            transform: none;
        }
    }
    .before-after-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        user-select: none;
        border-radius: 1rem;
        cursor: col-resize;
    }
    .before-after-container .after-image {
        position: absolute;
        inset: 0;
        width: 50%;
        border-right: 3px solid #d4af37;
        overflow: hidden;
    }
    .before-after-container .after-image img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: left;
    }
    .before-after-container .before-image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: left;
    }
    .before-after-container .slider-handle {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: #d4af37;
        transform: translateX(-50%);
        z-index: 10;
        box-shadow: 0 0 12px rgba(212,175,55,0.6);
    }
    .before-after-container .slider-handle-circle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(10, 38, 24, 0.9);
        border: 3px solid #d4af37;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 20px rgba(212,175,55,0.4);
    }
    .before-after-container img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        pointer-events: none;
    }
    .lightbox-modal {
        transition: opacity 0.3s ease;
    }
    .lightbox-modal:not(.hidden) {
        display: flex;
    }
    .hist-tab.active-tab {
        background: #d4af37 !important;
        color: #0a3d26 !important;
        font-weight: 700;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Scroll progress bar
    (function initScrollProgress() {
        const bar = document.getElementById('sejarah-scroll-progress');
        if (!bar) return;
        window.addEventListener('scroll', function () {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
            bar.style.width = progress + '%';
        });
    })();

    // Before/After slider
    (function initBeforeAfterSlider() {
        const container = document.getElementById('before-after-slider');
        if (!container) return;
        const afterImage = container.querySelector('.after-image');
        const handle = container.querySelector('.slider-handle');
        let isDragging = false;

        function setPosition(x) {
            const rect = container.getBoundingClientRect();
            let pos = (x - rect.left) / rect.width;
            pos = Math.max(0.05, Math.min(0.95, pos));
            afterImage.style.width = (pos * 100) + '%';
            handle.style.left = (pos * 100) + '%';
        }

        container.addEventListener('mousedown', function (e) { isDragging = true; setPosition(e.clientX); });
        document.addEventListener('mousemove', function (e) { if (isDragging) setPosition(e.clientX); });
        document.addEventListener('mouseup', function () { isDragging = false; });
        container.addEventListener('touchstart', function (e) { isDragging = true; setPosition(e.touches[0].clientX); });
        document.addEventListener('touchmove', function (e) { if (isDragging) setPosition(e.touches[0].clientX); });
        document.addEventListener('touchend', function () { isDragging = false; });
    })();

    // Gallery tab filtering + lightbox
    (function initHistoryGallery() {
        const tabs = document.querySelectorAll('.hist-tab');
        const items = document.querySelectorAll('.hist-item');
        const lightbox = document.getElementById('gallery-lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const lightboxClose = document.getElementById('lightbox-close');

        tabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                tabs.forEach(function (t) {
                    t.classList.remove('bg-gold', 'text-emerald-dark', 'font-bold');
                    t.classList.add('bg-white/5', 'text-white/70', 'border', 'border-white/10');
                });
                this.classList.add('bg-gold', 'text-emerald-dark', 'font-bold');
                this.classList.remove('bg-white/5', 'text-white/70', 'border', 'border-white/10');

                const filter = this.getAttribute('data-filter');
                items.forEach(function (item) {
                    const cat = item.getAttribute('data-category');
                    if (filter === 'all' || cat === filter) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });

        items.forEach(function (item) {
            item.addEventListener('click', function () {
                const img = this.querySelector('img');
                const title = this.querySelector('.hist-item-title');
                const desc = this.querySelector('.hist-item-desc');
                if (img && lightboxImg) lightboxImg.src = img.src;
                if (lightboxCaption) {
                    lightboxCaption.innerHTML = '';
                    if (title) {
                        var h = document.createElement('h3');
                        h.className = 'font-serif text-xl text-gold font-bold';
                        h.textContent = title.textContent;
                        lightboxCaption.appendChild(h);
                    }
                    if (desc) {
                        var p = document.createElement('p');
                        p.className = 'font-sans text-sm text-white/60 mt-1';
                        p.textContent = desc.textContent;
                        lightboxCaption.appendChild(p);
                    }
                }
                if (lightbox) lightbox.classList.remove('hidden');
            });
        });

        function closeLightbox() {
            if (lightbox) lightbox.classList.add('hidden');
        }
        if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
        if (lightbox) lightbox.addEventListener('click', function (e) {
            if (e.target === this) closeLightbox();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeLightbox();
        });
    })();

    // Stats counter animation
    (function initStatsCounter() {
        const counters = document.querySelectorAll('.stats-counter');
        if (counters.length === 0) return;

        const observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute('data-target'));
                    const suffix = el.getAttribute('data-suffix') || '';
                    const noCommas = el.getAttribute('data-no-commas') !== null;
                    let current = 0;
                    const increment = Math.ceil(target / 60);
                    const timer = setInterval(function () {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        el.textContent = noCommas ? current : current.toLocaleString('id-ID');
                        if (suffix) el.textContent += suffix;
                    }, 25);
                    obs.unobserve(el);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach(function (c) { observer.observe(c); });
    })();
});
</script>
@endpush
