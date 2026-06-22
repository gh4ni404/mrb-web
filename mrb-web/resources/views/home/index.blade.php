@extends('layouts.app')

@section('title', 'Masjid Raya Baiturrahman Banda Aceh - Portal Resmi')

@section('content')

        {{-- HERO SECTION --}}
        <section id="hero" class="relative min-h-screen flex items-center justify-between overflow-hidden bg-emerald-dark">
            <div id="hero-bg" class="absolute inset-0 z-0">
                <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Masjid Raya Baiturrahman Banda Aceh saat Golden Hour"
                    class="w-full h-full object-cover object-center" />
            </div>

            <div id="hero-overlay"
                class="absolute inset-0 z-10 bg-gradient-to-r from-emerald-dark/95 via-emerald-dark/80 to-emerald-dark/50">
            </div>
            <div id="hero-geo-pattern" class="bg-geo-pattern absolute inset-0 z-20 pointer-events-none"></div>

            <div
                class="relative z-30 w-full max-w-7xl mx-auto px-6 md:px-12 lg:px-20 py-32 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div id="hero-content" class="lg:col-span-7 flex flex-col items-start animate-fade-in-up">
                    <span id="hero-badge"
                        class="inline-flex items-center gap-2 bg-gold/10 border border-gold/45 text-gold font-sans font-bold text-[10px] md:text-[11px] px-4 py-1.5 rounded-full mb-6 tracking-[2px] uppercase">
                        <iconify-icon icon="ph:star-four" class="animate-spin-slow text-gold"></iconify-icon>
                        Simbol Peradaban Aceh
                    </span>
                    <h1 id="hero-title"
                        class="font-display font-black text-4xl sm:text-5xl md:text-6xl text-white leading-[1.1] mb-6 tracking-tight">
                        Masjid Raya <br /><span class="text-gold">Baiturrahman</span>
                    </h1>
                    <h2 id="hero-subtitle" class="font-serif italic text-lg md:text-2xl text-white/90 mb-4 font-normal">
                        &ldquo;Simbol Keagungan Islam di Serambi Mekkah&rdquo;
                    </h2>
                    <p id="hero-desc" class="font-sans text-sm md:text-base text-white/70 max-w-lg mb-8 leading-relaxed">
                        Masjid bersejarah yang kokoh berdiri sejak era Kesultanan Aceh, melewati kolonialisme, hingga menjadi
                        saksi bisu kebesaran Allah SWT saat tsunami melanda tahun 2004. Kini menjadi episentrum dakwah,
                        spiritualitas, dan destinasi wisata religi terkemuka.
                    </p>

                    <div id="hero-actions" class="flex flex-wrap gap-4 items-center">
                        <a href="#history"
                            class="hero-btn-primary bg-gradient-to-r from-gold to-gold-dim hover:from-gold-light hover:to-gold text-emerald-dark font-sans font-bold text-sm px-8 py-3.5 rounded-md shadow-lg shadow-gold/20 flex items-center gap-2 hover:scale-105 transition-all duration-300">
                            Jelajahi Sejarah
                            <iconify-icon icon="ph:arrow-right" width="16"></iconify-icon>
                        </a>
                        <a href="#events"
                            class="hero-btn-secondary bg-white/8 hover:bg-white/15 border border-white/25 text-white font-sans font-semibold text-sm px-8 py-3.5 rounded-md flex items-center gap-2 transition-all duration-300">
                            Lihat Jadwal Kajian
                        </a>
                    </div>
                </div>

                {{-- Prayer Widget --}}
                <div class="lg:col-span-5 flex justify-center lg:justify-end animate-fade-in-up animation-delay-200">
                    <div id="prayer-widget"
                        class="glass-panel rounded-xl p-6 md:p-8 w-full max-w-[360px] text-white shadow-2xl relative border border-gold/30 gold-glow">

                        <div id="prayer-widget-top" class="flex justify-between items-start mb-6 pb-4 border-b border-white/10">
                            <div id="prayer-dates">
                                <p id="prayer-greg" class="text-[11px] text-white/60 font-sans tracking-wide uppercase"></p>
                                <h3 id="prayer-hijri" class="text-sm font-bold text-gold tracking-wide mt-1"></h3>
                            </div>
                            <div id="prayer-countdown-box" class="text-right">
                                <p id="prayer-next-txt" class="text-[9px] text-gold/80 tracking-wider uppercase font-semibold">
                                    HITUNG MUNDUR</p>
                                <p id="prayer-countdown"
                                    class="text-2xl font-display font-extrabold text-gold tracking-widest mt-1">00:00:00</p>
                                <p id="prayer-next-name" class="text-[10px] text-white/50 italic mt-0.5">Menuju Dzuhur</p>
                            </div>
                        </div>

                        <div id="prayer-rows" class="flex flex-col gap-2.5">
                            @php
    $prayerSchedule = [
        ['id' => 'subuh', 'name' => 'Subuh', 'time' => '05:02'],
        ['id' => 'syuruq', 'name' => 'Syuruq', 'time' => '06:22'],
        ['id' => 'dzuhur', 'name' => 'Dzuhur', 'time' => '12:38'],
        ['id' => 'ashar', 'name' => 'Ashar', 'time' => '16:04'],
        ['id' => 'maghrib', 'name' => 'Maghrib', 'time' => '18:49'],
        ['id' => 'isya', 'name' => 'Isya', 'time' => '20:04'],
    ];
                            @endphp

                            @foreach($prayerSchedule as $prayer)
                                <div id="row-{{ $prayer['id'] }}"
                                    class="prayer-row flex items-center justify-between p-3 rounded-md bg-white/5 border border-white/5 transition-all duration-300">
                                    <div class="prayer-row-left flex items-center gap-3">
                                        <span class="prayer-indicator w-2 h-2 rounded-full bg-white/20 transition-all"></span>
                                        <span
                                            class="prayer-name-text font-sans font-semibold text-[13px] text-white/75">{{ $prayer['name'] }}</span>
                                    </div>
                                    <span id="prayer-time-{{ $prayer['id'] }}"
                                        class="prayer-time-text font-display font-bold text-[14px] text-white">{{ $prayer['time'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div id="hero-scroll"
                class="absolute bottom-8 left-6 md:left-20 z-30 hidden sm:flex items-center gap-3 text-white/40 font-sans text-[11px] tracking-[2px] uppercase">
                <span>Scroll Down</span>
                <div id="hero-scroll-line" class="w-10 h-[1px] bg-white/30 animate-pulse"></div>
            </div>
        </section>

        {{-- HISTORY SECTION --}}
        <section id="history" class="py-24 bg-white border-b border-soft-gray-2 relative">
            <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">

                <div id="history-wrap" class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-stretch">

                    <div id="history-img-col"
                        class="reveal-on-scroll relative rounded-2xl overflow-hidden min-h-[400px] lg:min-h-[550px] shadow-2xl group border border-emerald-dark/10 img-zoom-hover">
                        <img src="{{ asset('assets/img/sejarah-bg.jpg') }}"
                            alt="Detail Arsitektur Kubah Masjid Raya Baiturrahman" class="w-full h-full object-cover" />
                        <div id="history-img-shade"
                            class="absolute inset-0 bg-gradient-to-t from-emerald-dark/80 via-transparent to-transparent"></div>
                        <div id="history-img-label" class="absolute bottom-8 left-8 text-white">
                            <span class="text-gold font-sans font-bold text-xs uppercase tracking-widest">Kubah Utama MRB</span>
                            <p class="text-sm text-white/80 mt-1 font-light font-sans">Megah berlatar langit Banda Aceh</p>
                        </div>
                    </div>

                    <div id="history-content-col" class="reveal-on-scroll delay-200 flex flex-col justify-center">
                        <span
                            class="section-eyebrow inline-flex items-center gap-3 text-gold font-sans font-bold text-xs uppercase tracking-widest mb-4">
                            Sejarah Singkat
                        </span>
                        <h2
                            class="section-heading font-display font-black text-3xl md:text-4xl text-charcoal leading-tight mb-6">
                            Jejak Sejarah yang <br /><span class="text-emerald font-extrabold">Menginspirasi Peradaban</span>
                        </h2>
                        <p class="font-sans text-sm md:text-base text-charcoal-light/80 leading-relaxed mb-8">
                            Pertama kali didirikan pada tahun 1612 oleh Sultan Iskandar Muda, Masjid Raya Baiturrahman bukan
                            sekadar rumah ibadah, melainkan saksi tangguh gejolak sejarah bangsa Indonesia dan perjuangan rakyat
                            Aceh.
                        </p>

                        <div id="history-timeline" class="flex flex-col gap-6 relative pl-6 border-l-2 border-gold/30">
                            @php
    $timeline = [
        ['year' => 'Era 1612 M', 'title' => 'Pondasi Awal Kesultanan', 'desc' => 'Dibangun oleh Sultan Iskandar Muda sebagai pusat administrasi, pendidikan, dan pertahanan Kerajaan Aceh Darussalam.'],
        ['year' => 'Era 1879 M', 'title' => 'Rekonstruksi Kolonial Belanda', 'desc' => 'Sempat dibakar, namun dibangun kembali oleh Gubernur Jenderal Van Lansberge sebagai simbol pemulihan perdamaian.'],
        ['year' => 'Era 2004 M', 'title' => 'Mukjizat Tsunami Aceh', 'desc' => 'Berdiri kokoh saat gelombang tsunami menyapu pesisir kota, menjadi tempat perlindungan ribuan warga di tengah kedahsyatan bencana.'],
    ];
                            @endphp
                            @foreach($timeline as $item)
                                <div class="tl-item relative">
                                    <span
                                        class="tl-dot absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-gold border-[3px] border-white ring-2 ring-gold/50 shadow-md"></span>
                                    <p class="tl-year font-sans font-extrabold text-[11px] text-gold uppercase tracking-wider">
                                        {{ $item['year'] }}</p>
                                    <h4 class="tl-title font-sans font-bold text-base text-charcoal mt-1">{{ $item['title'] }}</h4>
                                    <p class="tl-desc font-sans text-xs text-charcoal-light/75 leading-relaxed mt-1">
                                        {{ $item['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>

                        <a href="{{ route('sejarah') }}"
                            class="btn-emerald inline-flex items-center gap-3 bg-emerald hover:bg-emerald-light font-sans font-bold text-sm text-white px-8 py-3.5 rounded-md mt-10 shadow-lg shadow-emerald/15 hover:scale-105 transition-all duration-300 self-start">
                            Baca Sejarah Lengkap
                            <iconify-icon icon="ph:book" width="16"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- SERVICES SECTION --}}
        <section id="services" class="py-24 bg-soft-gray border-b border-soft-gray-2">
            <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 text-center">

                <div class="reveal-on-scroll">
                    <span
                        class="section-eyebrow inline-flex items-center gap-3 text-gold font-sans font-bold text-xs uppercase tracking-widest mb-4">
                        Khidmat & Kemudahan
                    </span>
                    <h2 class="section-heading font-display font-black text-3xl md:text-4xl text-charcoal leading-tight mb-4">
                        Layanan & Fasilitas Jamaah
                    </h2>
                    <p class="font-sans text-sm md:text-base text-charcoal-light/80 max-w-xl mx-auto leading-relaxed mb-16">
                        Masjid Raya Baiturrahman menyediakan berbagai fasilitas dan layanan kemaslahatan untuk menunjang
                        aktivitas keagamaan dan pelayanan publik secara profesional.
                    </p>
                </div>

                <div id="services-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
                    @php
    $services = [
        ['icon' => 'ph:building-tower', 'title' => 'Menara Utama & Turis', 'desc' => 'Nikmati keindahan lanskap kota Banda Aceh dari menara setinggi 85 meter yang dapat diakses oleh wisatawan.', 'link' => '#', 'link_text' => 'Info Kunjungan Menara'],
        ['icon' => 'ph:book-open', 'title' => 'Perpustakaan Islam', 'desc' => 'Menyediakan ribuan koleksi literatur keislaman, manuskrip sejarah Aceh, dan ruang baca digital yang nyaman.', 'link' => '#', 'link_text' => 'Kunjungi Perpustakaan'],
        ['icon' => 'ph:radio', 'title' => 'Radio Baiturrahman', 'desc' => 'Frekuensi radio dakwah resmi penyiaran kajian, tilawah Al-Quran, dan syiar islam terkemuka untuk wilayah Banda Aceh.', 'link' => '#', 'link_text' => 'Dengar Radio Live'],
        ['icon' => 'ph:heart', 'title' => 'Layanan Akad Nikah', 'desc' => 'Fasilitasi pencatatan pernikahan syar\'i di aula masjid utama dengan panduan administrasi dan pranatacara lengkap.', 'link' => '#', 'link_text' => 'Pendaftaran Akad'],
        ['icon' => 'ph:hand-heart', 'title' => 'Rukun Jenazah', 'desc' => 'Pelayanan terpadu fardu kifayah penyelenggaraan jenazah mulai dari pemandian, kafan, ambulans hingga liang lahat.', 'link' => '#', 'link_text' => 'Hubungi Call Center'],
        ['icon' => 'ph:chats', 'title' => 'Konsultasi Syariah', 'desc' => 'Layanan tanya jawab keislaman interaktif bersama jajaran asatidzah dan imam besar Masjid Raya Baiturrahman.', 'link' => '#', 'link_text' => 'Mulai Konsultasi'],
    ];
                    @endphp

                    @foreach($services as $i => $svc)
                        <div
                            class="reveal-on-scroll delay-{{ min(($i % 3) * 100 + 100, 300) }} svc-card bg-white p-8 rounded-xl border border-soft-gray-2 relative overflow-hidden transition-all duration-300 card-hover-lift group">
                            <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-emerald to-gold"></div>
                            <div
                                class="svc-icon w-14 h-14 bg-emerald/5 border border-gold/18 rounded-md flex items-center justify-center text-gold mb-6 group-hover:scale-110 transition-transform">
                                <iconify-icon icon="{{ $svc['icon'] }}" width="28"></iconify-icon>
                            </div>
                            <h3 class="svc-title font-sans font-bold text-lg text-charcoal mb-3">{{ $svc['title'] }}</h3>
                            <p class="svc-desc font-sans text-xs md:text-sm text-charcoal-light/75 leading-relaxed">
                                {{ $svc['desc'] }}</p>
                            <a href="{{ $svc['link'] }}"
                                class="svc-link inline-flex items-center gap-2 font-sans font-bold text-xs text-emerald mt-6 hover:text-gold transition-colors">
                                {{ $svc['link_text'] }}
                                <iconify-icon icon="ph:arrow-right" width="12"></iconify-icon>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- EVENTS SECTION --}}
        <section id="events" class="py-24 bg-white border-b border-soft-gray-2">
            <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">

                <div class="text-center mb-16 reveal-on-scroll">
                    <span
                        class="section-eyebrow inline-flex items-center gap-3 text-gold font-sans font-bold text-xs uppercase tracking-widest mb-4">
                        Agenda Masjid
                    </span>
                    <h2 class="section-heading font-display font-black text-3xl md:text-4xl text-charcoal leading-tight mb-4">
                        Kajian & Kegiatan Terdekat
                    </h2>
                    <p class="font-sans text-sm md:text-base text-charcoal-light/80 max-w-xl mx-auto leading-relaxed">
                        Ikuti majelis taklim, halaqah keislaman, dan agenda rutin sosial-budaya di lingkungan Masjid Raya
                        Baiturrahman.
                    </p>
                </div>

                <div id="events-featured-banner"
                    class="reveal-on-scroll bg-gradient-to-br from-emerald-dark to-emerald p-8 md:p-12 rounded-2xl text-white mb-12 relative overflow-hidden shadow-xl border border-gold/20">
                    <div class="relative z-10">
                        <span
                            class="event-badge inline-block bg-gold text-emerald-dark font-sans font-bold text-[10px] tracking-wider px-3.5 py-1 rounded-full mb-4">
                            KAJIAN AKBAR MINGGUAN
                        </span>
                        <h3 id="events-banner-title"
                            class="font-display font-extrabold text-2xl md:text-4xl leading-tight mb-6 max-w-2xl">
                            Tafsir Al-Azhar: Rekonstruksi Ukhuwah Islamiyah di Tengah Modernitas Global
                        </h3>

                        <div class="event-meta-row flex flex-wrap gap-6 text-sm text-white/80">
                            <div class="event-meta flex items-center gap-2">
                                <iconify-icon icon="ph:user-circle" width="18" class="text-gold"></iconify-icon>
                                <span>Narasumber: Prof. Dr. KH. Azman Syah, MA</span>
                            </div>
                            <div class="event-meta flex items-center gap-2">
                                <iconify-icon icon="ph:calendar-blank" width="18" class="text-gold"></iconify-icon>
                                <span>Ahad, 7 Juni 2026</span>
                            </div>
                            <div class="event-meta flex items-center gap-2">
                                <iconify-icon icon="ph:clock" width="18" class="text-gold"></iconify-icon>
                                <span>Ba'da Maghrib - Selesai</span>
                            </div>
                            <div class="event-meta flex items-center gap-2">
                                <iconify-icon icon="ph:map-pin" width="18" class="text-gold"></iconify-icon>
                                <span>Ruang Utama Masjid</span>
                            </div>
                        </div>

                        <a href="#"
                            class="event-cta inline-flex items-center gap-2 bg-gold hover:bg-gold-light text-emerald-dark font-sans font-bold text-xs px-6 py-3 rounded-md mt-8 hover:scale-105 transition-all">
                            Masukkan ke Kalender
                            <iconify-icon icon="ph:calendar-plus" width="16"></iconify-icon>
                        </a>
                    </div>
                    <div
                        class="absolute -right-12 -top-16 text-gold/5 font-display text-[300px] pointer-events-none select-none">
                        &#9754;</div>
                </div>

                <div id="events-two-col" class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                    <div class="lg:col-span-8 flex flex-col gap-6 reveal-on-scroll">
                        <div class="events-card bg-white p-6 md:p-8 rounded-xl border border-soft-gray-2">
                            <h3
                                class="events-card-title font-sans font-bold text-lg text-charcoal pb-4 border-b border-soft-gray-2 mb-6 flex items-center gap-2">
                                <iconify-icon icon="ph:list-bullets" class="text-emerald"></iconify-icon>
                                Jadwal Majelis & Kajian Pekan Ini
                            </h3>

                            <div class="agenda-list flex flex-col gap-2">
                                @php
    $agenda = [
        ['day' => '06', 'month' => 'Jun', 'title' => 'Halaqah Qur\'ani: Tahsin & Pemahaman Makna Juz Amma', 'time' => 'Ba\'da Subuh', 'speaker' => 'Ustadz Harun Al-Rasyid'],
        ['day' => '08', 'month' => 'Jun', 'title' => 'Kajian Fiqih Muamalah Kontemporer: Hukum Transaksi Digital', 'time' => '16:30 WIB', 'speaker' => 'Dr. Fauzan Syarif, MA'],
        ['day' => '10', 'month' => 'Jun', 'title' => 'Bimbingan Akhlak & Tazkiyatun Nafs untuk Pemuda', 'time' => 'Ba\'da Maghrib', 'speaker' => 'Tgk. H. Fakhruddin Lahmuddin'],
    ];
                                @endphp

                                @foreach($agenda as $a)
                                    <div class="agenda-item flex gap-5 py-4 border-b border-soft-gray-2/70 last:border-b-0">
                                        <div
                                            class="agenda-date-box w-14 h-14 bg-gradient-to-br from-emerald to-emerald-light rounded-md flex flex-col items-center justify-center text-white flex-shrink-0">
                                            <span
                                                class="agenda-day font-display font-extrabold text-lg leading-none">{{ $a['day'] }}</span>
                                            <span
                                                class="agenda-month font-sans text-[9px] uppercase tracking-wider mt-1 font-semibold text-white/80">{{ $a['month'] }}</span>
                                        </div>
                                        <div class="agenda-text">
                                            <h4
                                                class="agenda-title font-sans font-bold text-[14px] md:text-[15px] text-charcoal leading-tight">
                                                {{ $a['title'] }}</h4>
                                            <p
                                                class="agenda-detail font-sans text-xs text-charcoal-light/70 mt-1 flex flex-wrap gap-x-4 gap-y-1">
                                                <span class="flex items-center gap-1"><iconify-icon icon="ph:clock"></iconify-icon>
                                                    {{ $a['time'] }}</span>
                                                <span class="flex items-center gap-1"><iconify-icon icon="ph:user"></iconify-icon>
                                                    {{ $a['speaker'] }}</span>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col gap-6 reveal-on-scroll delay-200">
                        <div class="events-card bg-white p-6 md:p-8 rounded-xl border border-soft-gray-2 flex-1 shadow-sm">
                            <h3
                                class="events-card-title font-sans font-bold text-lg text-charcoal pb-4 border-b border-soft-gray-2 mb-6 flex items-center gap-2">
                                <iconify-icon icon="ph:user-list" class="text-emerald"></iconify-icon>
                                Petugas Jumat Pekan Ini
                            </h3>

                            <div class="imam-rows flex flex-col gap-2">
                                @php
    $imams = [
        ['img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150', 'name' => 'Prof. Dr. Tgk. H. Gunawan, MA', 'role' => 'Khatib Jumat Utama', 'badge' => 'Khatib'],
        ['img' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=150', 'name' => 'Syeikh H. Azhari Asyi', 'role' => 'Imam Jumat & Rawatib', 'badge' => 'Imam'],
        ['img' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=150', 'name' => 'Tgk. Syarifuddin M. Yusuf', 'role' => 'Muadzin Jumat Utama', 'badge' => 'Muadzin'],
    ];
                                @endphp

                                @foreach($imams as $imam)
                                    <div class="imam-row flex items-center gap-4 py-3 border-b border-soft-gray-2 last:border-b-0">
                                        <img src="{{ $imam['img'] }}" alt="Foto {{ $imam['name'] }}"
                                            class="w-11 h-11 rounded-full object-cover border border-gold" />
                                        <div class="imam-row-info">
                                            <h4 class="imam-row-name font-sans font-bold text-[13.5px] text-charcoal">
                                                {{ $imam['name'] }}</h4>
                                            <p class="imam-row-day font-sans text-xs text-charcoal-light/75">{{ $imam['role'] }}</p>
                                        </div>
                                        <span
                                            class="imam-badge ml-auto font-sans font-semibold text-[10px] text-emerald bg-emerald/10 px-3 py-1 rounded-full">{{ $imam['badge'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- NEWS SECTION --}}
        <section id="news" class="py-24 bg-soft-gray border-b border-soft-gray-2">
            <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">

                <div class="text-center mb-16 reveal-on-scroll">
                    <span
                        class="section-eyebrow inline-flex items-center gap-3 text-gold font-sans font-bold text-xs uppercase tracking-widest mb-4">
                        Publikasi MRB
                    </span>
                    <h2 class="section-heading font-display font-black text-3xl md:text-4xl text-charcoal leading-tight mb-4">
                        Kabar Utama, Artikel & Khutbah Jumat
                    </h2>
                    <p class="font-sans text-sm md:text-base text-charcoal-light/80 max-w-xl mx-auto leading-relaxed">
                        Ikuti pemberitaan seputar renovasi, kunjungan kehormatan, artikel dakwah resmi, dan arsip naskah khutbah
                        jumat lengkap.
                    </p>
                </div>

                <div id="news-grid" class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-16">

                    @if($latestNews->count())
                    {{-- Featured News --}}
                    <div
                        class="reveal-on-scroll lg:col-span-6 news-card bg-white rounded-xl overflow-hidden border border-soft-gray-2 flex flex-col shadow-md card-hover-lift group">
                        @php
                            $featured = $latestNews->first();
                        @endphp
                        <div class="news-card-featured h-64 md:h-80 overflow-hidden relative img-zoom-hover">
                            @if($featured?->getFirstMediaUrl('thumbnail'))
                                <img src="{{ $featured->getFirstMediaUrl('thumbnail') }}" alt="{{ $featured->title }}" class="w-full h-full object-cover" />
                            @endif
                            <span class="absolute top-4 left-4 bg-emerald text-white text-[10px] tracking-wider uppercase font-bold px-3.5 py-1 rounded-full">UTAMA</span>
                        </div>
                        <div class="news-body p-8 flex-1 flex flex-col">
                            <span class="news-cat font-sans font-extrabold text-[10px] text-gold uppercase tracking-wider">{{ $featured?->categories?->pluck('name')->join(', ') }}</span>
                            <h3
                                class="news-title font-sans font-bold text-xl md:text-2xl text-charcoal mt-2 mb-3 leading-tight group-hover:text-emerald transition-colors">
                                {{ $featured?->title }}
                            </h3>
                            <p
                                class="news-excerpt font-sans text-xs md:text-sm text-charcoal-light/75 leading-relaxed mb-6 flex-1">
                                {{ str($featured?->excerpt)->limit(110) }}
                            </p>
                            <div
                                class="news-date font-sans text-[11px] text-charcoal-light/50 flex items-center gap-1.5 mt-auto">
                                <iconify-icon icon="ph:calendar-blank"></iconify-icon>
                                <span>{{ $featured?->published_at?->format('d M Y H:m') }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Supporting News Cards --}}
                    <div class="lg:col-span-6 flex flex-col gap-6 reveal-on-scroll delay-200">
                        @foreach($latestNews->skip(1) as $news)
                            <div
                                class="bg-white rounded-xl overflow-hidden border border-soft-gray-2 p-6 flex gap-4 md:gap-6 shadow-sm card-hover-lift group cursor-pointer">
                                <div class="w-24 h-24 md:w-32 md:h-32 rounded-lg overflow-hidden flex-shrink-0 img-zoom-hover">
                                    @if($news->getFirstMediaUrl('thumbnail'))
                                        <img src="{{ $news->getFirstMediaUrl('thumbnail', 'thumb') }}" alt="{{ $news->title }}"
                                            class="w-full h-full object-cover" />
                                    @endif
                                </div>
                                <div class="flex flex-col justify-between flex-1">
                                    <div>
                                        <span
                                            class="news-cat font-sans font-extrabold text-[9px] text-gold uppercase tracking-wider">{{ $news?->categories?->first()?->name ?? 'Berita' }}</span>
                                        <h4
                                            class="news-title font-sans font-bold text-sm md:text-base text-charcoal mt-1 line-clamp-2 leading-snug group-hover:text-emerald transition-colors">
                                            {{ $news->title }}
                                        </h4>
                                    </div>
                                    <p
                                        class="news-date font-sans text-[11px] text-charcoal-light/50 flex items-center gap-1.5 mt-2">
                                        <iconify-icon icon="ph:calendar-blank"></iconify-icon>
                                        <span>{{ $news->published_at?->format('d M Y H:m') ?? '' }}</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="lg:col-span-12 flex flex-col items-center justify-center py-16 text-charcoal-light/60">
                        <iconify-icon icon="ph:newspaper-duotone" class="text-5xl mb-4"></iconify-icon>
                        <p class="font-sans text-lg">Belum ada berita.</p>
                    </div>
                @endif
                </div>

                {{-- Article Grid --}}
                @if($latestArticle->count())
                <div id="article-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 reveal-on-scroll">
                    @foreach($latestArticle as $article)
                    <div
                        class="article-card bg-white rounded-xl overflow-hidden border border-soft-gray-2 shadow-sm card-hover-lift group cursor-pointer">
                        <div class="overflow-hidden img-zoom-hover">
                            @if($article->getFirstMediaUrl('thumbnail'))
                            <img src="{{ $article->getFirstMediaUrl('thumbnail', 'thumb') }}" alt="{{ $article->title }}"
                                class="w-full h-48 object-cover" />
                            @endif
                        </div>
                        <div class="p-5">
                            <span
                                class="article-cat font-sans font-extrabold text-[9px] text-gold uppercase tracking-wider">{{ $article->categories?->pluck('name')->join(', ') }}</span>
                            <h4
                                class="article-title font-sans font-bold text-sm md:text-base text-charcoal mt-1.5 line-clamp-2 leading-snug group-hover:text-emerald transition-colors">
                                {{ $article->title }}
                            </h4>
                            <p class="article-excerpt font-sans text-xs text-charcoal-light/75 mt-2 line-clamp-2">
                                {{ str($article->excerpt)->limit(80) }}
                            </p>
                            <p
                                class="article-date font-sans text-[11px] text-charcoal-light/50 flex items-center gap-1.5 mt-3">
                                <iconify-icon icon="ph:calendar-blank"></iconify-icon>
                                <span>{{ $article->published_at?->format('d M Y H:m') ?? '' }}</span>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <div id="khutbah-archive-anchor"></div>

                {{-- Khutbah Archive --}}
                <div id="khutbah-archive"
                    class="reveal-on-scroll bg-white border border-soft-gray-2 rounded-2xl p-6 md:p-10 shadow-md">

                    <div id="khutbah-top"
                        class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8 pb-6 border-b border-soft-gray-2/65">
                        <h3 id="khutbah-archive-title"
                            class="font-sans font-extrabold text-xl md:text-2xl text-charcoal flex items-center gap-2">
                            <iconify-icon icon="ph:scroll" class="text-gold"></iconify-icon>
                            Arsip Khutbah Jumat
                        </h3>

                        <div id="khutbah-controls" class="flex flex-wrap items-center gap-3">
                            <div
                                class="khutbah-search-box flex items-center gap-2.5 bg-soft-gray border border-soft-gray-2 px-4 py-2 rounded-md w-full md:w-64 focus-within:border-gold transition-colors duration-300">
                                <span class="text-charcoal-light/50 flex items-center"><iconify-icon icon="ph:magnifying-glass"
                                        width="16"></iconify-icon></span>
                                <input type="text" id="khutbah-search" placeholder="Cari Tema atau Khatib..."
                                    class="bg-transparent border-0 outline-none text-xs md:text-sm font-sans w-full text-charcoal" />
                            </div>

                            <select id="khutbah-month"
                                class="khutbah-filter-btn bg-soft-gray border border-soft-gray-2 px-4 py-2 rounded-md text-xs md:text-sm font-sans text-charcoal outline-none cursor-pointer hover:border-gold transition-colors duration-300">
                                <option value="">Semua Bulan</option>
                                <option value="06">Juni</option>
                                <option value="05">Mei</option>
                                <option value="04">April</option>
                            </select>

                            <select id="khutbah-year"
                                class="khutbah-filter-btn bg-soft-gray border border-soft-gray-2 px-4 py-2 rounded-md text-xs md:text-sm font-sans text-charcoal outline-none cursor-pointer hover:border-gold transition-colors duration-300">
                                <option value="">Semua Tahun</option>
                                <option value="2026">2026</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                    </div>

                    <div id="khutbah-rows" class="flex flex-col gap-3">
                        @forelse($latestKhutbah as $khutbah)
                            <div class="khutbah-row flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 p-4 bg-soft-gray/60 hover:bg-soft-gray/80 border border-soft-gray-2/65 hover:border-gold/30 rounded-md cursor-pointer transition-all duration-300"
                                data-topic="{{ $khutbah->title }}" data-speaker="{{ $khutbah->author?->name ?? '' }}"
                                data-month="{{ $khutbah->published_at?->format('m') ?? '' }}"
                                data-year="{{ $khutbah->published_at?->format('Y') ?? '' }}">
                                <div
                                    class="kh-date w-12 h-12 bg-gradient-to-br from-emerald to-emerald-light rounded-md flex flex-col items-center justify-center text-white flex-shrink-0 shadow-sm">
                                    <span
                                        class="kh-day font-display font-extrabold text-sm leading-none">{{ $khutbah->published_at?->format('d') ?? '' }}</span>
                                    <span
                                        class="kh-mon font-sans text-[8px] uppercase tracking-wider mt-0.5">{{ $khutbah->published_at?->format('M') ?? '' }}</span>
                                </div>
                                <div class="kh-info flex-1">
                                    <span
                                        class="kh-speaker font-sans font-semibold text-[11px] text-gold tracking-wide">{{ $khutbah->author?->name ?? 'Khatib' }}</span>
                                    <h4 class="kh-topic font-sans font-bold text-sm md:text-base text-charcoal mt-0.5">
                                        {{ $khutbah->title }}</h4>
                                </div>
                                <div class="kh-btns flex gap-2 sm:ml-auto">
                                    <button
                                        class="kh-btn kh-btn-watch flex items-center gap-1.5 bg-emerald hover:bg-emerald-light text-white font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        <iconify-icon icon="ph:play-circle" width="14"></iconify-icon>
                                        Tonton Video
                                    </button>
                                    <button
                                        class="kh-btn kh-btn-dl flex items-center gap-1.5 bg-gold/10 hover:bg-gold/20 text-gold-dim border border-gold/25 font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        <iconify-icon icon="ph:download-simple" width="14"></iconify-icon>
                                        Unduh PDF
                                    </button>
                                </div>
                            </div>
                        @empty
                            <div class="khutbah-row flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 p-4 bg-soft-gray/60 hover:bg-soft-gray/80 border border-soft-gray-2/65 hover:border-gold/30 rounded-md transition-all duration-300"
                                data-topic="Tauhid dan Kepedulian Sosial di Era Transisi Digital"
                                data-speaker="Prof. Dr. Tgk. H. Gunawan, MA" data-month="06" data-year="2026">
                                <div
                                    class="kh-date w-12 h-12 bg-gradient-to-br from-emerald to-emerald-light rounded-md flex flex-col items-center justify-center text-white flex-shrink-0 shadow-sm">
                                    <span class="kh-day font-display font-extrabold text-sm leading-none">05</span>
                                    <span class="kh-mon font-sans text-[8px] uppercase tracking-wider mt-0.5">Jun</span>
                                </div>
                                <div class="kh-info flex-1">
                                    <span class="kh-speaker font-sans font-semibold text-[11px] text-gold tracking-wide">Prof. Dr.
                                        Tgk. H. Gunawan, MA</span>
                                    <h4 class="kh-topic font-sans font-bold text-sm md:text-base text-charcoal mt-0.5">Tauhid dan
                                        Kepedulian Sosial di Era Transisi Digital</h4>
                                </div>
                                <div class="kh-btns flex gap-2 sm:ml-auto">
                                    <button
                                        class="kh-btn kh-btn-watch flex items-center gap-1.5 bg-emerald hover:bg-emerald-light text-white font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        <iconify-icon icon="ph:play-circle" width="14"></iconify-icon>
                                        Tonton Video
                                    </button>
                                    <button
                                        class="kh-btn kh-btn-dl flex items-center gap-1.5 bg-gold/10 hover:bg-gold/20 text-gold-dim border border-gold/25 font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        <iconify-icon icon="ph:download-simple" width="14"></iconify-icon>
                                        Unduh PDF
                                    </button>
                                </div>
                            </div>

                            <div class="khutbah-row flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 p-4 bg-soft-gray/60 hover:bg-soft-gray/80 border border-soft-gray-2/65 hover:border-gold/30 rounded-md transition-all duration-300"
                                data-topic="Menjaga Keikhlasan dalam Beramal: Kunci Keberkahan Hidup"
                                data-speaker="Dr. Fauzan Syarif, MA" data-month="05" data-year="2026">
                                <div
                                    class="kh-date w-12 h-12 bg-gradient-to-br from-emerald to-emerald-light rounded-md flex flex-col items-center justify-center text-white flex-shrink-0 shadow-sm">
                                    <span class="kh-day font-display font-extrabold text-sm leading-none">29</span>
                                    <span class="kh-mon font-sans text-[8px] uppercase tracking-wider mt-0.5">Mei</span>
                                </div>
                                <div class="kh-info flex-1">
                                    <span class="kh-speaker font-sans font-semibold text-[11px] text-gold tracking-wide">Dr. Fauzan
                                        Syarif, MA</span>
                                    <h4 class="kh-topic font-sans font-bold text-sm md:text-base text-charcoal mt-0.5">Menjaga
                                        Keikhlasan dalam Beramal: Kunci Keberkahan Hidup</h4>
                                </div>
                                <div class="kh-btns flex gap-2 sm:ml-auto">
                                    <button
                                        class="kh-btn kh-btn-watch flex items-center gap-1.5 bg-emerald hover:bg-emerald-light text-white font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        Tonton Video
                                    </button>
                                    <button
                                        class="kh-btn kh-btn-dl flex items-center gap-1.5 bg-gold/10 hover:bg-gold/20 text-gold-dim border border-gold/25 font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        Unduh PDF
                                    </button>
                                </div>
                            </div>

                            <div class="khutbah-row flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 p-4 bg-soft-gray/60 hover:bg-soft-gray/80 border border-soft-gray-2/65 hover:border-gold/30 rounded-md transition-all duration-300"
                                data-topic="Zakat sebagai Instrumen Pengentasan Kemiskinan Umat"
                                data-speaker="Tgk. H. Fakhruddin Lahmuddin" data-month="05" data-year="2026">
                                <div
                                    class="kh-date w-12 h-12 bg-gradient-to-br from-emerald to-emerald-light rounded-md flex flex-col items-center justify-center text-white flex-shrink-0 shadow-sm">
                                    <span class="kh-day font-display font-extrabold text-sm leading-none">22</span>
                                    <span class="kh-mon font-sans text-[8px] uppercase tracking-wider mt-0.5">Mei</span>
                                </div>
                                <div class="kh-info flex-1">
                                    <span class="kh-speaker font-sans font-semibold text-[11px] text-gold tracking-wide">Tgk. H.
                                        Fakhruddin Lahmuddin</span>
                                    <h4 class="kh-topic font-sans font-bold text-sm md:text-base text-charcoal mt-0.5">Zakat sebagai
                                        Instrumen Pengentasan Kemiskinan Umat</h4>
                                </div>
                                <div class="kh-btns flex gap-2 sm:ml-auto">
                                    <button
                                        class="kh-btn kh-btn-watch flex items-center gap-1.5 bg-emerald hover:bg-emerald-light text-white font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        Tonton Video
                                    </button>
                                    <button
                                        class="kh-btn kh-btn-dl flex items-center gap-1.5 bg-gold/10 hover:bg-gold/20 text-gold-dim border border-gold/25 font-sans font-bold text-[11px] px-4 py-2 rounded-md transition-all duration-300 hover:scale-105">
                                        Unduh PDF
                                    </button>
                                </div>
                            </div>
                        @endforelse

                        <div id="khutbah-no-matches" class="hidden text-center py-8 text-charcoal-light/60 font-sans text-sm">
                            <iconify-icon icon="ph:warning-circle" width="28" class="text-gold mx-auto mb-2"></iconify-icon>
                            Tidak ada arsip khutbah yang cocok dengan filter pencarian Anda.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- GALLERY SECTION --}}
        <section id="gallery" class="py-24 bg-gray-900 border-b border-white/5 relative">
            <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">

                <div id="gallery-header-row"
                    class="reveal-on-scroll flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-12">
                    <div class="text-left">
                        <span
                            class="section-eyebrow inline-flex items-center gap-3 text-gold font-sans font-bold text-xs uppercase tracking-widest mb-4">
                            Dokumentasi Visual
                        </span>
                        <h2
                            class="section-heading section-heading-light font-display font-black text-3xl md:text-4xl text-white leading-tight">
                            Galeri Keindahan Baiturrahman
                        </h2>
                    </div>

                    <div id="gallery-tabs" class="flex flex-wrap gap-2.5">
                        <button
                            class="g-tab active bg-gold text-charcoal font-sans font-bold text-xs px-5 py-2.5 rounded-full cursor-pointer hover:scale-105 transition-transform duration-300"
                            data-filter="all">Semua</button>
                        <button
                            class="g-tab bg-white/7 text-white/65 font-sans font-bold text-xs px-5 py-2.5 rounded-full hover:bg-white/10 hover:text-white cursor-pointer hover:scale-105 transition-transform duration-300"
                            data-filter="arsitektur">Arsitektur</button>
                        <button
                            class="g-tab bg-white/7 text-white/65 font-sans font-bold text-xs px-5 py-2.5 rounded-full hover:bg-white/10 hover:text-white cursor-pointer hover:scale-105 transition-transform duration-300"
                            data-filter="jamaah">Kegiatan Jamaah</button>
                        <button
                            class="g-tab bg-white/7 text-white/65 font-sans font-bold text-xs px-5 py-2.5 rounded-full hover:bg-white/10 hover:text-white cursor-pointer hover:scale-105 transition-transform duration-300"
                            data-filter="wisata">Wisata Religi</button>
                    </div>
                </div>

                <div id="gallery-masonry"
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 reveal-on-scroll delay-200">
                    @php
                    $galleryItems = [
                        ['img' => asset('assets/img/koridor-bg.jpg'), 'caption' => 'Pemandangan Udara Masjid Raya Baiturrahman', 'cols' => 'col-span-1 sm:col-span-2 row-span-1 sm:row-span-2', 'h' => 'h-full min-h-[350px]', 'cat' => 'arsitektur'],
                        ['img' => asset('assets/img/ornamen-kubah-bg.jpg'), 'caption' => 'Halaqah Tilawatil Quran Jamaah', 'cols' => '', 'h' => 'h-48 min-h-[350px] md:h-56', 'cat' => 'jamaah'],
                        ['img' => 'https://images.unsplash.com/photo-1542856391-010fb87dcfed?q=80&w=800&auto=format&fit=crop', 'caption' => 'Wisatawan Berpose di Bawah Payung Elektrik', 'cols' => '', 'h' => 'h-48 min-h-[350px] md:h-56', 'cat' => 'wisata'],
                        ['img' => asset('assets/img/shalat-idul-adha-bg.jpg'), 'caption' => 'Kemegahan Fasad Masjid Terpapar Sinar Senja', 'cols' => 'col-span-1 sm:col-span-2', 'h' => 'h-48 md:h-56', 'cat' => 'arsitektur'],
                    ];
                    @endphp

                    @foreach($galleryItems as $item)
                        <div class="g-item {{ $item['cols'] }} relative rounded-xl overflow-hidden group shadow-lg cursor-pointer img-zoom-hover"
                            data-category="{{ $item['cat'] }}">
                            <img src="{{ $item['img'] }}" alt="{{ $item['caption'] }}"
                                class="w-full {{ $item['h'] }} object-cover" />
                            <div
                                class="g-caption absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-emerald-dark/90 to-transparent text-white font-sans font-semibold text-xs">
                                {{ $item['caption'] }}
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Video Section --}}
                <div id="video-section" class="mt-20 reveal-on-scroll">
                    <h3 id="video-section-title"
                        class="font-display font-extrabold text-xl md:text-2xl text-white mb-8 flex items-center gap-4">
                        <iconify-icon icon="ph:youtube-logo" class="text-red-500"></iconify-icon>
                        Kanal Video Baiturrahman TV
                    </h3>

                    <div id="video-grid" class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div
                            class="md:col-span-2 vid-card relative rounded-xl overflow-hidden group shadow-md cursor-pointer img-zoom-hover">
                            <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523?q=80&w=800"
                                alt="Thumbnail Khutbah Live" class="w-full h-56 md:h-64 object-cover" />
                            <div
                                class="vid-overlay absolute inset-0 bg-black/45 group-hover:bg-black/35 flex items-center justify-center transition-colors">
                                <span
                                    class="vid-play w-14 h-14 rounded-full bg-gold/90 text-emerald-dark flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform">
                                    <iconify-icon icon="ph:play-fill" width="22"></iconify-icon>
                                </span>
                            </div>
                            <span
                                class="vid-label absolute bottom-4 left-4 right-4 text-xs md:text-sm font-sans font-bold text-white leading-tight">
                                Live Siaran Langsung Kajian Fathul Qarib Bersama Imam Besar Baiturrahman
                            </span>
                        </div>

                        <div class="vid-card relative rounded-xl overflow-hidden group shadow-md cursor-pointer img-zoom-hover">
                            <img src="https://images.unsplash.com/photo-1596120236172-231999844ade?q=80&w=600"
                                alt="Thumbnail Wisata" class="w-full h-44 object-cover" />
                            <div
                                class="vid-overlay absolute inset-0 bg-black/45 group-hover:bg-black/35 flex items-center justify-center transition-colors">
                                <span
                                    class="vid-play w-10 h-10 rounded-full bg-gold/90 text-emerald-dark flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform">
                                    <iconify-icon icon="ph:play-fill" width="16"></iconify-icon>
                                </span>
                            </div>
                            <span
                                class="vid-label absolute bottom-3 left-3 right-3 text-[11px] md:text-xs font-sans font-bold text-white leading-tight">
                                Dokumenter Pendek: Keajaiban Masjid saat Tsunami 2004
                            </span>
                        </div>

                        <div class="vid-card relative rounded-xl overflow-hidden group shadow-md cursor-pointer img-zoom-hover">
                            <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?q=80&w=600"
                                alt="Thumbnail Radio" class="w-full h-44 object-cover" />
                            <div
                                class="vid-overlay absolute inset-0 bg-black/45 group-hover:bg-black/35 flex items-center justify-center transition-colors">
                                <span
                                    class="vid-play w-10 h-10 rounded-full bg-gold/90 text-emerald-dark flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform">
                                    <iconify-icon icon="ph:play-fill" width="16"></iconify-icon>
                                </span>
                            </div>
                            <span
                                class="vid-label absolute bottom-3 left-3 right-3 text-[11px] md:text-xs font-sans font-bold text-white leading-tight">
                                Simposium Kebudayaan Islami Melayu Aceh & Timur Tengah
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- VISITOR & DONATION SECTION --}}
        <section id="visitor-donation" class="py-24 bg-white relative">
            <div class="bg-geo-pattern absolute inset-0 opacity-2 pointer-events-none"></div>

            <div
                class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">

                <div
                    class="reveal-on-scroll vd-card bg-white border border-soft-gray-2 rounded-2xl p-8 md:p-12 shadow-lg flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-[4px] bg-gradient-to-r from-emerald to-gold"></div>

                    <h3 id="visitor-card-title" class="font-display font-black text-2xl md:text-3xl text-charcoal mb-2">Panduan
                        Berkunjung</h3>
                    <p id="visitor-card-sub"
                        class="font-sans text-xs md:text-sm text-charcoal-light/70 mb-8 pb-4 border-b border-soft-gray-2">
                        Informasi panduan penting dan adab ziarah bagi jamaah serta wisatawan mancanegara.
                    </p>

                    <div class="vinfo-list flex flex-col gap-5">
                        @php
    $visitorInfo = [
        ['icon' => 'ph:clock', 'label' => 'Jam Buka Masjid', 'value' => 'Buka 24 Jam untuk ibadah shalat fardu. Area pelataran ditutup pukul 22:00 WIB untuk sterilisasi pembersihan.'],
        ['icon' => 'ph:t-shirt', 'label' => 'Adab Berbusana (Dresscode)', 'value' => 'Wajib menggunakan busana sopan dan menutup aurat secara islami. Wisatawan non-muslim dipersilakan meminjam jubah luar gratis di sekretariat.'],
        ['icon' => 'ph:users-three', 'label' => 'Pendaftaran Rombongan', 'value' => 'Kunjungan instansi, studi banding, atau turis asing di atas 10 orang wajib registrasi minimal H-3 untuk pendampingan pemandu resmi.'],
    ];
                        @endphp

                        @foreach($visitorInfo as $info)
                            <div class="vinfo-item flex gap-4 items-start">
                                <div
                                    class="vinfo-icon w-10 h-10 bg-emerald/5 border border-gold/18 rounded-md flex items-center justify-center text-gold flex-shrink-0">
                                    <iconify-icon icon="{{ $info['icon'] }}" width="20"></iconify-icon>
                                </div>
                                <div>
                                    <p class="vinfo-lbl font-sans font-bold text-[9px] text-gold tracking-widest uppercase">
                                        {{ $info['label'] }}</p>
                                    <p class="vinfo-val font-sans font-medium text-xs md:text-sm text-charcoal mt-0.5">
                                        {{ $info['value'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="#"
                        class="btn-emerald inline-flex items-center gap-3 bg-emerald hover:bg-emerald-light font-sans font-bold text-sm text-white px-8 py-3.5 rounded-md mt-10 shadow-lg shadow-emerald/10 self-start hover:scale-105 transition-all">
                        Registrasi Rombongan Wisata
                        <iconify-icon icon="ph:users-three" width="16"></iconify-icon>
                    </a>
                </div>

                <div id="donation-bg-card"
                    class="reveal-on-scroll delay-200 bg-gradient-to-br from-emerald-dark via-emerald-dark to-emerald rounded-2xl p-8 md:p-12 shadow-2xl flex flex-col relative overflow-hidden border border-gold/30">
                    <div class="absolute inset-0 bg-geo-gold-light pointer-events-none opacity-[0.03]"></div>

                    <div class="relative z-10 flex flex-col w-full">
                        <span
                            class="inline-flex items-center gap-2 bg-gold/10 border border-gold/30 text-gold font-sans font-bold text-[10px] tracking-wider px-3 py-1 rounded-full mb-4 uppercase self-start">
                            ZISWAF Online
                        </span>
                        <h3 id="don-title" class="font-display font-black text-2xl md:text-3xl text-white mb-2">Makmurkan
                            Baiturrahman</h3>
                        <p id="don-sub"
                            class="font-sans text-xs md:text-sm text-white/70 mb-8 pb-4 border-b border-white/10 leading-relaxed">
                            Salurkan Zakat, Infaq, Sedekah dan Wakaf (ZISWAF) Anda secara online melalui rekening resmi
                            kepengurusan LAZIS MRB.
                        </p>

                        <div id="don-types" class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-8">
                            @php
    $donations = [
        ['type' => 'zakat', 'icon' => '🌾', 'name' => 'Zakat', 'desc' => 'Harta & Fitrah'],
        ['type' => 'infaq', 'icon' => '💰', 'name' => 'Infaq', 'desc' => 'Operasional'],
        ['type' => 'sedekah', 'icon' => '🤝', 'name' => 'Sedekah', 'desc' => 'Yatim & Sosial'],
        ['type' => 'wakaf', 'icon' => '🌳', 'name' => 'Wakaf', 'desc' => 'Fasilitas Masjid'],
    ];
                            @endphp

                            @foreach($donations as $don)
                                <button
                                    class="don-type @if($loop->first) bg-gradient-to-br from-gold to-gold-dim text-emerald-dark border-transparent shadow-lg shadow-gold/20 scale-105 @else bg-white/5 border border-white/10 text-white/80 @endif rounded-xl p-4 flex flex-col items-center justify-center text-center cursor-pointer transition-all duration-300"
                                    data-type="{{ $don['type'] }}">
                                    <span class="don-type-icon text-xl mb-1">{{ $don['icon'] }}</span>
                                    <span class="don-type-name font-sans font-bold text-[13px]">{{ $don['name'] }}</span>
                                    <span class="don-type-desc font-sans text-[9px] opacity-80 mt-0.5">{{ $don['desc'] }}</span>
                                </button>
                            @endforeach
                        </div>

                        <div id="don-bank"
                            class="bg-gradient-to-r from-white/10 to-white/5 border border-white/15 rounded-2xl p-6 md:p-8 mb-8 text-white backdrop-blur-md shadow-inner">
                            <div class="flex justify-between items-start mb-6">
                                <div class="flex flex-col">
                                    <span class="text-[9px] uppercase tracking-widest text-white/50 font-bold">REKENING
                                        TRANSFER</span>
                                    <span id="bank-acc-name"
                                        class="font-sans font-black text-sm text-gold tracking-wide mt-1">Bank Syariah Indonesia
                                        (BSI)</span>
                                </div>
                                <span
                                    class="font-display font-extrabold text-xs bg-white/10 border border-white/20 text-white px-3 py-1 rounded-md">BSI</span>
                            </div>

                            <div class="mb-6">
                                <span class="text-[9px] uppercase tracking-widest text-white/50 font-bold block mb-1">Nomor
                                    Rekening</span>
                                <span id="bank-acc-no"
                                    class="font-display font-black text-2xl md:text-3xl text-gold tracking-wider">7000 1111
                                    88</span>
                            </div>

                            <div class="flex justify-between items-end border-t border-white/10 pt-4">
                                <div class="flex flex-col">
                                    <span class="text-[9px] uppercase tracking-widest text-white/50 font-bold">Atas Nama
                                        Yayasan</span>
                                    <span id="bank-acc-holder"
                                        class="font-sans font-bold text-xs md:text-sm text-white/95 mt-1">LAZIS Masjid Raya
                                        Baiturrahman Zakat</span>
                                </div>
                                <div
                                    class="w-8 h-6 bg-gold/25 rounded-md border border-gold/45 relative flex items-center justify-center">
                                    <div class="w-4 h-3 bg-gold/10 rounded-sm"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8 bg-white/5 border border-white/10 rounded-xl p-4 flex flex-col gap-2">
                            <div class="flex justify-between text-xs font-semibold text-white/80">
                                <span>Pencapaian Infaq Bulan Ini</span>
                                <span class="text-gold">72% Achieved</span>
                            </div>
                            <div class="w-full bg-white/10 h-2 rounded-full overflow-hidden">
                                <div class="bg-gradient-to-r from-gold to-gold-light h-full rounded-full transition-all duration-[1.5s]"
                                    style="width: 72%"></div>
                            </div>
                            <div class="flex justify-between text-[10px] text-white/50 font-medium">
                                <span>Rp 180.000.000</span>
                                <span>Target: Rp 250.000.000</span>
                            </div>
                        </div>

                        <button id="don-copy-btn"
                            class="w-full bg-gradient-to-r from-gold to-gold-dim hover:from-gold-light hover:to-gold text-emerald-dark font-sans font-bold text-sm px-6 py-4 rounded-xl flex items-center justify-center gap-2.5 cursor-pointer shadow-lg shadow-emerald-950/20 active:scale-[0.98] transition-transform">
                            <iconify-icon icon="ph:copy" width="18"></iconify-icon>
                            Salin Nomor Rekening
                        </button>
                    </div>

                    <div id="don-copy-toast"
                        class="opacity-0 pointer-events-none absolute bottom-4 left-1/2 -translate-x-1/2 bg-gold text-emerald-dark font-sans font-bold text-xs px-4 py-2 rounded-full shadow-lg transition-all duration-300 z-20">
                        Nomor rekening disalin!
                    </div>
                </div>
            </div>
        </section>

        {{-- TESTIMONIALS SECTION --}}
        <section id="testimonials" class="py-24 bg-soft-gray border-b border-soft-gray-2">
            <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 text-center">

                <div class="reveal-on-scroll">
                    <span
                        class="section-eyebrow inline-flex items-center gap-3 text-gold font-sans font-bold text-xs uppercase tracking-widest mb-4">
                        Kesan Pengunjung
                    </span>
                    <h2 class="section-heading font-display font-black text-3xl md:text-4xl text-charcoal leading-tight mb-16">
                        Apa Kata Jamaah & Wisatawan?
                    </h2>
                </div>

                <div id="testimonials-grid" class="reveal-on-scroll delay-200 flex justify-center max-w-2xl mx-auto">
                    @php
    $testimonials = [
        ['quote' => 'Suasana shalat jamaah di Baiturrahman sungguh syahdu dan menggetarkan hati. Halamannya yang megah dilapisi marmer bersih serta ditopang payung elektrik layaknya berada di Masjid Nabawi. Sungguh destinasi wajib saat berkunjung ke Aceh.', 'img' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=150', 'name' => 'Fatimah Zahra', 'loc' => 'Bandung, Jawa Barat'],
        ['quote' => 'Sangat kagum dengan perpustakaan digitalnya yang memiliki koleksi naskah sejarah Islam yang lengkap. Layanan sekretariat akad nikah juga sangat rapi, informatif, dan membantu kepengurusan dokumen kami.', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150', 'name' => 'Ahmad Rinaldi', 'loc' => 'Banda Aceh'],
        ['quote' => 'I was amazed by the majestic architecture and historical strength. Standing there where the Tsunami happened in 2004 was an emotional and deeply spiritual experience. The local guides were extremely welcoming and professional.', 'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150', 'name' => 'John Harrison', 'loc' => 'Kuala Lumpur, Malaysia'],
    ];
                    @endphp

                    @foreach($testimonials as $t)
                        <div
                            class="testi-card bg-white p-8 md:p-12 rounded-xl border border-soft-gray-2 text-center shadow-md relative w-full @if(!$loop->first) hidden @endif">
                            <span
                                class="testi-quote block text-5xl text-gold font-serif leading-none mb-4 font-bold select-none opacity-40">&ldquo;</span>

                            <div class="testi-stars flex justify-center gap-1 mb-6">
                                @for($s = 0; $s < 5; $s++)
                                    <iconify-icon icon="ph:star-fill" class="text-gold" width="16"></iconify-icon>
                                @endfor
                            </div>

                            <p class="testi-body font-sans text-sm md:text-base text-charcoal-light/95 leading-relaxed mb-8 italic">
                                &ldquo;{{ $t['quote'] }}&rdquo;
                            </p>

                            <div class="testi-author flex flex-col items-center gap-2.5">
                                <img src="{{ $t['img'] }}" alt="{{ $t['name'] }}"
                                    class="w-14 h-14 rounded-full object-cover border-2 border-gold/45 shadow-sm" />
                                <div>
                                    <h4 class="testi-name font-sans font-bold text-sm text-charcoal">{{ $t['name'] }}</h4>
                                    <p
                                        class="testi-loc font-sans text-xs text-charcoal-light/50 flex items-center justify-center gap-1 mt-0.5">
                                        <iconify-icon icon="ph:map-pin"></iconify-icon>
                                        {{ $t['loc'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection