<footer id="footer" class="bg-[#0b1016] text-white/55 pt-20 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 pb-12 border-b border-white/5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12">

        <div id="footer-brand" class="lg:col-span-4 flex flex-col gap-6">
            <a href="{{ route('home') }}" id="footer-brand-logo" class="flex items-center gap-3">
                <div id="footer-brand-emblem" class="w-10 h-10 rounded-full bg-gradient-to-br from-gold to-gold-light flex items-center justify-center text-emerald-dark font-display font-black text-lg shadow-md">
                    🕌
                </div>
                <div>
                    <h4 id="footer-brand-name" class="font-display font-bold text-sm text-white uppercase tracking-wider leading-none">Baiturrahman</h4>
                    <p id="footer-brand-loc" class="text-[10px] text-white/50 tracking-widest mt-1">BANDA ACEH, INDONESIA</p>
                </div>
            </a>
            <p id="footer-brand-desc" class="font-sans text-xs md:text-sm text-white/40 leading-relaxed">
                Episentrum kegiatan peradaban, ibadah, dakwah Islamiah dan saksi sejarah spiritual perjuangan rakyat Aceh. Terbuka melayani umat dan jamaah.
            </p>

            <div id="footer-social" class="flex gap-2.5">
                <a href="#" class="soc-btn w-9 h-9 rounded-md bg-white/5 hover:bg-gold/15 border border-white/10 hover:border-gold/30 text-white hover:text-gold flex items-center justify-center transition-all cursor-pointer" aria-label="Facebook Baiturrahman"><iconify-icon icon="ph:facebook-logo" width="18"></iconify-icon></a>
                <a href="#" class="soc-btn w-9 h-9 rounded-md bg-white/5 hover:bg-gold/15 border border-white/10 hover:border-gold/30 text-white hover:text-gold flex items-center justify-center transition-all cursor-pointer" aria-label="Instagram Baiturrahman"><iconify-icon icon="ph:instagram-logo" width="18"></iconify-icon></a>
                <a href="#" class="soc-btn w-9 h-9 rounded-md bg-white/5 hover:bg-gold/15 border border-white/10 hover:border-gold/30 text-white hover:text-gold flex items-center justify-center transition-all cursor-pointer" aria-label="YouTube Baiturrahman TV"><iconify-icon icon="ph:youtube-logo" width="18"></iconify-icon></a>
                <a href="#" class="soc-btn w-9 h-9 rounded-md bg-white/5 hover:bg-gold/15 border border-white/10 hover:border-gold/30 text-white hover:text-gold flex items-center justify-center transition-all cursor-pointer" aria-label="TikTok Baiturrahman"><iconify-icon icon="ph:tiktok-logo" width="18"></iconify-icon></a>
            </div>
        </div>

        <div class="lg:col-span-2 flex flex-col gap-6">
            <h5 class="footer-col-hd font-sans font-bold text-xs text-white tracking-widest uppercase">Menu Cepat</h5>
            <ul class="footer-links flex flex-col gap-3 font-sans text-xs md:text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-gold transition-colors">Beranda Utama</a></li>
                <li><a href="#history" class="hover:text-gold transition-colors">Profil Masjid</a></li>
                <li><a href="#services" class="hover:text-gold transition-colors">Layanan Publik</a></li>
                <li><a href="#events" class="hover:text-gold transition-colors">Agenda Kajian</a></li>
                <li><a href="#khutbah-archive-anchor" class="hover:text-gold transition-colors">Arsip Khutbah</a></li>
                <li><a href="#visitor-donation" class="hover:text-gold transition-colors">Donasi ZISWAF</a></li>
            </ul>
        </div>

        <div class="lg:col-span-3 flex flex-col gap-6">
            <h5 class="footer-col-hd font-sans font-bold text-xs text-white tracking-widest uppercase">Sekretariat</h5>
            <ul class="footer-links flex flex-col gap-4 font-sans text-xs md:text-sm">
                <li class="flex items-start gap-2.5">
                    <iconify-icon icon="ph:map-pin" class="text-gold flex-shrink-0 mt-0.5" width="18"></iconify-icon>
                    <span class="leading-relaxed text-white/40">Jl. Moh. Jam No.1, Kampung Baru, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23242</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <iconify-icon icon="ph:phone" class="text-gold flex-shrink-0" width="18"></iconify-icon>
                    <span class="text-white/40">(0651) 22442</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <iconify-icon icon="ph:envelope" class="text-gold flex-shrink-0" width="18"></iconify-icon>
                    <span class="text-white/40">info@mesjidrayabaiturrahman.or.id</span>
                </li>
            </ul>
        </div>

        <div class="lg:col-span-3 flex flex-col gap-6">
            <h5 class="footer-col-hd font-sans font-bold text-xs text-white tracking-widest uppercase">Lokasi Peta</h5>
            <div id="footer-map-preview" class="w-full h-32 rounded-lg overflow-hidden border border-white/10 shadow-md">
                <img class="w-full aspect-video object-cover"
                    src="https://storage.googleapis.com/banani-generated-images/generated-images/e891ee11-d281-4cbb-9e57-bf5e1d372531.jpg"
                    alt="Peta Lokasi Masjid Raya Baiturrahman" />
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20 py-8 text-center flex flex-col sm:flex-row items-center justify-between gap-4 font-sans text-xs text-white/30">
        <p>&copy; {{ date('Y') }} Badan Pengelola Masjid Raya Baiturrahman Banda Aceh. Hak Cipta Dilindungi.</p>
        <div class="flex gap-4">
            <a href="#" class="hover:underline">Kebijakan Privasi</a>
            <span>&bull;</span>
            <a href="#" class="hover:underline">Ketentuan Ketentuan</a>
        </div>
    </div>
</footer>
