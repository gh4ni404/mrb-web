document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initScrollReveal();
    initPrayerWidget();
    initKhutbahArchive();
    initGallery();
    initDonationWidget();
    initTestimonials();
});

/* ==========================================================================
   1. NAVBAR & DYNAMIC ISLAND EFFECT
   ========================================================================== */
function initNavbar() {
    const navbar = document.getElementById('navbar');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (!navbar) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuBtn.querySelector('iconify-icon');
            if (icon) {
                const isMenuOpen = !mobileMenu.classList.contains('hidden');
                icon.setAttribute('icon', isMenuOpen ? 'ph:x' : 'ph:list');
            }
        });
    }
}

/* ==========================================================================
   2. VIEWPORT INTERSECTION OBSERVER FOR SCROLL REVEALS
   ========================================================================== */
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal-on-scroll');

    if (revealElements.length === 0) return;

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        rootMargin: '0px 0px -60px 0px',
        threshold: 0.1
    });

    revealElements.forEach(element => {
        revealObserver.observe(element);
    });
}

/* ==========================================================================
   3. LIVE PRAYER TIMES & COUNTDOWN
   ========================================================================== */
function initPrayerWidget() {
    const countdownEl = document.getElementById('prayer-countdown');
    const nextNameEl = document.getElementById('prayer-next-name');
    const hijriEl = document.getElementById('prayer-hijri');
    const gregEl = document.getElementById('prayer-greg');

    if (!countdownEl) return;

    const prayerTimes = [
        { name: 'Subuh', time: document.getElementById('prayer-time-subuh')?.textContent || '05:02' },
        { name: 'Syuruq', time: document.getElementById('prayer-time-syuruq')?.textContent || '06:22' },
        { name: 'Dzuhur', time: document.getElementById('prayer-time-dzuhur')?.textContent || '12:38' },
        { name: 'Ashar', time: document.getElementById('prayer-time-ashar')?.textContent || '16:04' },
        { name: 'Maghrib', time: document.getElementById('prayer-time-maghrib')?.textContent || '18:49' },
        { name: 'Isya', time: document.getElementById('prayer-time-isya')?.textContent || '20:04' }
    ];

    const prayerRows = {
        'Subuh': document.getElementById('row-subuh'),
        'Syuruq': document.getElementById('row-syuruq'),
        'Dzuhur': document.getElementById('row-dzuhur'),
        'Ashar': document.getElementById('row-ashar'),
        'Maghrib': document.getElementById('row-maghrib'),
        'Isya': document.getElementById('row-isya')
    };

    function updateTimesAndCountdown() {
        const now = new Date();

        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        gregEl.textContent = now.toLocaleDateString('id-ID', options);
        hijriEl.textContent = getEstimatedHijriDate(now);

        const currentTimeMs = now.getHours() * 3600000 + now.getMinutes() * 60000 + now.getSeconds() * 1000;

        let activePrayer = null;
        let nextPrayerIndex = 0;
        let nextPrayerTargetTimeMs = 0;

        const timesInMs = prayerTimes.map(p => {
            const [h, m] = p.time.split(':').map(Number);
            return { name: p.name, timeMs: h * 3600000 + m * 60000 };
        });

        for (let i = 0; i < timesInMs.length; i++) {
            if (currentTimeMs >= timesInMs[i].timeMs) {
                activePrayer = timesInMs[i].name;
            }
        }
        if (!activePrayer) {
            activePrayer = 'Isya';
        }

        Object.keys(prayerRows).forEach(key => {
            if (prayerRows[key]) {
                if (key === activePrayer) {
                    prayerRows[key].classList.add('active-prayer', 'bg-gold/10', 'border', 'border-gold/30');
                    const indicator = prayerRows[key].querySelector('.prayer-indicator');
                    if (indicator) {
                        indicator.classList.remove('bg-white/20');
                        indicator.classList.add('bg-gold', 'shadow-lg');
                    }
                    const nameTxt = prayerRows[key].querySelector('.prayer-name-text');
                    const timeTxt = prayerRows[key].querySelector('.prayer-time-text');
                    if (nameTxt) nameTxt.classList.add('text-gold');
                    if (timeTxt) timeTxt.classList.add('text-gold');
                } else {
                    prayerRows[key].classList.remove('active-prayer', 'bg-gold/10', 'border', 'border-gold/30');
                    const indicator = prayerRows[key].querySelector('.prayer-indicator');
                    if (indicator) {
                        indicator.classList.remove('bg-gold', 'shadow-lg');
                        indicator.classList.add('bg-white/20');
                    }
                    const nameTxt = prayerRows[key].querySelector('.prayer-name-text');
                    const timeTxt = prayerRows[key].querySelector('.prayer-time-text');
                    if (nameTxt) nameTxt.classList.remove('text-gold');
                    if (timeTxt) timeTxt.classList.remove('text-gold');
                }
            }
        });

        let nextIndexFound = timesInMs.findIndex(t => t.timeMs > currentTimeMs);
        if (nextIndexFound === -1) {
            nextPrayerIndex = 0;
            nextPrayerTargetTimeMs = timesInMs[0].timeMs + 24 * 3600000;
        } else {
            nextPrayerIndex = nextIndexFound;
            nextPrayerTargetTimeMs = timesInMs[nextIndexFound].timeMs;
        }

        const nextPrayer = prayerTimes[nextPrayerIndex];
        nextNameEl.textContent = `Menuju ${nextPrayer.name}`;

        let diffMs = nextPrayerTargetTimeMs - currentTimeMs;

        const diffHours = Math.floor(diffMs / 3600000);
        const diffMinutes = Math.floor((diffMs % 3600000) / 60000);
        const diffSeconds = Math.floor((diffMs % 60000) / 1000);

        const formatNum = (n) => String(n).padStart(2, '0');
        countdownEl.textContent = `${formatNum(diffHours)}:${formatNum(diffMinutes)}:${formatNum(diffSeconds)}`;
    }

    function getEstimatedHijriDate(date) {
        const jd = Math.floor((date.getTime() / 86400000) + 2440587.5);
        const l = jd - 1948440 + 10632;
        const n = Math.floor((l - 1) / 10631);
        const l2 = l - 10631 * n + 354;
        const j = Math.floor((10985 - l2) / 5316) * Math.floor((50 * l2 + 228500) / 17719) + Math.floor(l2 / 5670) * Math.floor((43 * l2 + 242000) / 15308);
        const l3 = l2 - Math.floor((9719 * j + 285) / 50) - Math.floor((15308 * j + 228500) / 43) + 59;
        const hDay = Math.floor((jd - 1948402.5 - Math.floor((9719 * j + 285) / 50) - Math.floor((15308 * j + 228500) / 43) + 59) / 30);

        let hijriDay = l3 - Math.floor(30 * hDay) + 1;
        let hijriMonth = hDay;
        let hijriYear = 30 * n + j - 30;

        const baseGregDate = new Date(2026, 5, 5);
        const diffDays = Math.floor((date - baseGregDate) / 86400000);

        let day = 19 + diffDays;
        let month = 12;
        let year = 1447;

        const hijriMonths = [
            'Muharram', 'Safar', 'Rabiul Awwal', 'Rabiul Akhir',
            'Jumadil Awwal', 'Jumadil Akhir', 'Rajab', 'Syaban',
            'Ramadhan', 'Syawwal', 'Dzulqadah', 'Dzulhijjah'
        ];

        if (day > 29) {
            day = day - 29;
            month = 1;
            year += 1;
        } else if (day <= 0) {
            day = 29 + day;
            month = 11;
        }

        return `${day} ${hijriMonths[month - 1]} ${year} H`;
    }

    updateTimesAndCountdown();
    setInterval(updateTimesAndCountdown, 1000);
}

/* ==========================================================================
   4. KHUTBAH ARCHIVE SEARCH & FILTER
   ========================================================================== */
function initKhutbahArchive() {
    const searchInput = document.getElementById('khutbah-search');
    const monthFilter = document.getElementById('khutbah-month');
    const yearFilter = document.getElementById('khutbah-year');
    const rows = document.querySelectorAll('.khutbah-row');
    const noMatchesEl = document.getElementById('khutbah-no-matches');

    if (rows.length === 0) return;

    function filterKhutbah() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
        const selectedMonth = monthFilter ? monthFilter.value : '';
        const selectedYear = yearFilter ? yearFilter.value : '';

        let visibleCount = 0;

        rows.forEach(row => {
            const topic = row.getAttribute('data-topic').toLowerCase();
            const speaker = row.getAttribute('data-speaker').toLowerCase();
            const month = row.getAttribute('data-month');
            const year = row.getAttribute('data-year');

            const matchesQuery = topic.includes(query) || speaker.includes(query);
            const matchesMonth = selectedMonth === '' || month === selectedMonth;
            const matchesYear = selectedYear === '' || year === selectedYear;

            if (matchesQuery && matchesMonth && matchesYear) {
                row.classList.remove('hidden');
                visibleCount++;
            } else {
                row.classList.add('hidden');
            }
        });

        if (noMatchesEl) {
            if (visibleCount === 0) {
                noMatchesEl.classList.remove('hidden');
            } else {
                noMatchesEl.classList.add('hidden');
            }
        }
    }

    if (searchInput) searchInput.addEventListener('keyup', filterKhutbah);
    if (monthFilter) monthFilter.addEventListener('change', filterKhutbah);
    if (yearFilter) yearFilter.addEventListener('change', filterKhutbah);
}

/* ==========================================================================
   5. GALLERY FILTER TABS
   ========================================================================== */
function initGallery() {
    const tabs = document.querySelectorAll('.g-tab');
    const items = document.querySelectorAll('.g-item');

    if (tabs.length === 0) return;

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.classList.remove('active', 'bg-gold', 'text-charcoal');
                t.classList.add('bg-white/7', 'text-white/65');
            });
            tab.classList.add('active', 'bg-gold', 'text-charcoal');
            tab.classList.remove('bg-white/7', 'text-white/65');

            const filter = tab.getAttribute('data-filter');

            items.forEach(item => {
                const category = item.getAttribute('data-category');

                if (filter === 'all' || category === filter) {
                    item.classList.remove('hidden');
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.transition = 'opacity 0.4s ease-in-out';
                        item.style.opacity = '1';
                    }, 50);
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });
}

/* ==========================================================================
   6. DONATION SELECTOR & CLIPBOARD COPY
   ========================================================================== */
function initDonationWidget() {
    const donTypes = document.querySelectorAll('.don-type');
    const bankAccEl = document.getElementById('bank-acc-no');
    const bankNameEl = document.getElementById('bank-acc-name');
    const bankHolderEl = document.getElementById('bank-acc-holder');
    const copyBtn = document.getElementById('don-copy-btn');
    const copyToast = document.getElementById('don-copy-toast');

    if (donTypes.length === 0) return;

    const donationData = window.donationData || {
        zakat: { account: '7000 1111 88', name: 'Bank Syariah Indonesia (BSI)', holder: 'LAZIS Masjid Raya Baiturrahman Zakat' },
        infaq: { account: '7000 2222 99', name: 'Bank Syariah Indonesia (BSI)', holder: 'LAZIS Masjid Raya Baiturrahman Infaq' },
        sedekah: { account: '7000 3333 00', name: 'Bank Syariah Indonesia (BSI)', holder: 'LAZIS Masjid Raya Baiturrahman Sedekah' },
        wakaf: { account: '7000 4444 11', name: 'Bank Syariah Indonesia (BSI)', holder: 'Badan Wakaf Baiturrahman Banda Aceh' }
    };

    donTypes.forEach(card => {
        card.addEventListener('click', () => {
            donTypes.forEach(c => {
                c.classList.remove('bg-gradient-to-br', 'from-gold', 'to-gold-dim', 'text-emerald-dark', 'border-transparent', 'shadow-lg', 'shadow-gold/25', 'scale-105');
                c.classList.add('bg-white/5', 'border', 'border-white/10', 'text-white/80');
            });

            card.classList.remove('bg-white/5', 'border', 'border-white/10', 'text-white/80');
            card.classList.add('bg-gradient-to-br', 'from-gold', 'to-gold-dim', 'text-emerald-dark', 'border-transparent', 'shadow-lg', 'shadow-gold/25', 'scale-105');

            const type = card.getAttribute('data-type');
            const data = donationData[type];

            if (data) {
                bankAccEl.textContent = data.account;
                bankNameEl.textContent = data.name;
                bankHolderEl.textContent = data.holder;
            }
        });
    });

    if (copyBtn && bankAccEl) {
        copyBtn.addEventListener('click', () => {
            const textToCopy = bankAccEl.textContent.replace(/\s+/g, '');

            navigator.clipboard.writeText(textToCopy).then(() => {
                if (copyToast) {
                    copyToast.classList.remove('opacity-0', 'pointer-events-none');
                    copyToast.classList.add('opacity-100');

                    setTimeout(() => {
                        copyToast.classList.remove('opacity-100');
                        copyToast.classList.add('opacity-0', 'pointer-events-none');
                    }, 2000);
                }
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        });
    }
}

/* ==========================================================================
   7. TESTIMONIAL SLIDER AUTOMATION
   ========================================================================== */
function initTestimonials() {
    const cards = document.querySelectorAll('.testi-card');
    if (cards.length <= 1) return;

    let currentIndex = 0;

    function rotateTestimonials() {
        cards.forEach((card, i) => {
            if (i === currentIndex) {
                card.classList.remove('hidden');
                card.style.opacity = '0';
                setTimeout(() => {
                    card.style.transition = 'opacity 0.6s ease-in-out';
                    card.style.opacity = '1';
                }, 50);
            } else {
                card.classList.add('hidden');
            }
        });

        currentIndex = (currentIndex + 1) % cards.length;
    }

    cards.forEach((card, i) => {
        if (i !== 0) card.classList.add('hidden');
    });

    setInterval(rotateTestimonials, 6000);
}
