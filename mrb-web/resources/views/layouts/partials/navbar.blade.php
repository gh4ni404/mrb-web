<header>
    <nav id="navbar"
        class="navbar-transition absolute top-0 left-0 w-full h-20 px-6 md:px-20 flex items-center justify-between z-50 bg-emerald-dark/20 border-b border-gold/10">

        <a href="{{ route('home') }}" id="navbar-logo" class="flex items-center gap-3">
            <div id="navbar-logo-emblem"
                class="w-10 h-10 md:w-11 md:h-11 rounded-full bg-gradient-to-br from-gold to-gold-light flex items-center justify-center text-emerald-dark font-display font-extrabold text-lg md:text-xl shadow-md">
                🕌
            </div>
            <div id="navbar-logo-text" class="flex flex-col">
                <span id="navbar-logo-title"
                    class="font-display font-bold text-[12px] md:text-[14px] text-white tracking-wide uppercase leading-tight">Baiturrahman</span>
                <span id="navbar-logo-sub"
                    class="text-[9px] md:text-[11px] text-white/60 font-sans tracking-wider uppercase font-medium">Banda
                    Aceh</span>
            </div>
        </a>

        <ul id="navbar-links" class="hidden lg:flex items-center gap-6 text-white/90 text-[13px] font-semibold">
            <li><a href="{{ route('home') }}" class="text-gold nav-link-underline transition-colors hover:text-gold-light">Beranda</a></li>

            <li class="relative group">
                <button class="flex items-center gap-1 nav-link-underline transition-colors hover:text-gold py-7">
                    Profil <iconify-icon icon="ph:caret-down-bold" class="text-[10px]"></iconify-icon>
                </button>
                <div
                    class="absolute top-full left-0 w-56 bg-emerald-dark/95 backdrop-blur-xl border border-gold/20 rounded-b-lg py-3 hidden group-hover:block shadow-xl">
                    <a href="{{ route('sejarah') }}" class="block px-5 py-2 text-gold font-bold bg-gold/10 hover:bg-gold/20 transition-all">Sejarah Masjid</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Visi & Misi</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Struktur Kepengurusan</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Imam & Muadzin</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Arsitektur & Fasilitas</a>
                </div>
            </li>

            <li class="relative group">
                <button class="flex items-center gap-1 nav-link-underline transition-colors hover:text-gold py-7">
                    Layanan & Wisata <iconify-icon icon="ph:caret-down-bold" class="text-[10px]"></iconify-icon>
                </button>
                <div
                    class="absolute top-full left-0 w-64 bg-emerald-dark/95 backdrop-blur-xl border border-gold/20 rounded-b-lg py-3 hidden group-hover:block shadow-xl">
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Jadwal Shalat & Petugas</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Layanan Akad Nikah</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Layanan Mualaf</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Konsultasi Agama</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all font-bold text-gold">Visit Baiturrahman (Wisata)</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Perpustakaan</a>
                </div>
            </li>

            <li class="relative group">
                <button class="flex items-center gap-1 nav-link-underline transition-colors hover:text-gold py-7">
                    Kegiatan <iconify-icon icon="ph:caret-down-bold" class="text-[10px]"></iconify-icon>
                </button>
                <div
                    class="absolute top-full left-0 w-56 bg-emerald-dark/95 backdrop-blur-xl border border-gold/20 rounded-b-lg py-3 hidden group-hover:block shadow-xl">
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Agenda Kegiatan</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Kajian Rutin</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Pendidikan & Remaja</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Ramadhan di Baiturrahman</a>
                </div>
            </li>

            <li class="relative group">
                <button class="flex items-center gap-1 nav-link-underline transition-colors hover:text-gold py-7">
                    Media <iconify-icon icon="ph:caret-down-bold" class="text-[10px]"></iconify-icon>
                </button>
                <div
                    class="absolute top-full right-0 lg:left-0 w-60 bg-emerald-dark/95 backdrop-blur-xl border border-gold/20 rounded-b-lg py-3 hidden group-hover:block shadow-xl">
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Berita Terkini</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Arsip Khutbah Jumat</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Artikel Keislaman</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">MRB TV (Video)</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Radio Baiturrahman</a>
                    <a href="#" class="block px-5 py-2 hover:bg-gold/10 hover:text-gold transition-all">Galeri Foto</a>
                </div>
            </li>

            <li><a href="#" class="nav-link-underline transition-colors hover:text-gold">Kontak</a></li>
        </ul>

        <div id="navbar-right" class="flex items-center gap-3 md:gap-4">
            <button id="navbar-search"
                class="w-9 h-9 rounded-md bg-white/10 hover:bg-white/20 border border-white/15 flex items-center justify-center text-white cursor-pointer transition-all duration-300"
                aria-label="Cari di website">
                <iconify-icon icon="ph:magnifying-glass" width="18"></iconify-icon>
            </button>

            <a href="#donation" id="navbar-cta"
                class="bg-gradient-to-r from-gold to-gold-dim hover:from-gold-light hover:to-gold font-sans font-bold text-[11px] md:text-[12px] text-emerald-dark px-4 md:px-5 py-2 md:py-2.5 rounded-md transition-all duration-300 shadow-md cursor-pointer hover:scale-105 whitespace-nowrap uppercase tracking-tighter">
                Infaq & Zakat
            </a>

            <button id="mobile-menu-btn"
                class="lg:hidden w-9 h-9 rounded-md bg-white/10 border border-white/15 flex items-center justify-center text-white cursor-pointer"
                aria-label="Toggle menu">
                <iconify-icon icon="ph:list" width="20"></iconify-icon>
            </button>
        </div>
    </nav>

    <div id="mobile-menu"
        class="hidden fixed top-24 left-4 right-4 bg-emerald-dark/98 backdrop-blur-xl border border-gold/30 rounded-2xl p-6 z-40 shadow-2xl flex flex-col gap-2 max-h-[80vh] overflow-y-auto lg:hidden text-left">
        <a href="{{ route('home') }}" class="text-gold font-bold text-base py-3 border-b border-white/5">Beranda</a>
        <a href="{{ route('sejarah') }}" class="text-gold font-bold text-base py-3 border-b border-white/5">Profil Masjid (Sejarah)</a>
        <a href="#" class="text-white/80 font-medium text-base py-3 border-b border-white/5">Layanan & Wisata</a>
        <a href="#" class="text-white/80 font-medium text-base py-3 border-b border-white/5">Kegiatan & Syiar</a>
        <a href="#" class="text-white/80 font-medium text-base py-3 border-b border-white/5">Media & Publikasi</a>
        <a href="#" class="text-white/80 font-medium text-base py-3 border-b border-white/5">Kontak Kami</a>
        <a href="#" class="mt-4 bg-gold text-emerald-dark font-bold text-center py-3 rounded-xl">Zakat & Donasi</a>
    </div>
</header>
