/**
 * Sejarah Masjid Raya Baiturrahman - Interactivity Script
 */
document.addEventListener('DOMContentLoaded', () => {
  initBeforeAfterSlider();
  initHistoryGallery();
  initScrollProgress();
  initTimelineParallax();

  const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));
  
});


/* ==========================================================================
   1. BEFORE & AFTER IMAGE COMPARISON SLIDER
   ========================================================================== */
function initBeforeAfterSlider() {
  const container = document.getElementById('before-after-slider');
  if (!container) return;

  const afterImage = container.querySelector('.after-image');
  const handle = container.querySelector('.slider-handle');
  let isDragging = false;

  function setSliderPosition(x) {
    const rect = container.getBoundingClientRect();
    let position = ((x - rect.left) / rect.width) * 100;
    
    // Constrain position between 0% and 100%
    if (position < 0) position = 0;
    if (position > 100) position = 100;
    
    afterImage.style.clipPath = `inset(0 ${100 - position}% 0 0)`;
    handle.style.left = `${position}%`;
  }

  // Mouse Events
  handle.addEventListener('mousedown', (e) => {
    isDragging = true;
    e.preventDefault();
  });

  window.addEventListener('mouseup', () => {
    isDragging = false;
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    setSliderPosition(e.clientX);
  });

  // Touch Events
  handle.addEventListener('touchstart', (e) => {
    isDragging = true;
  });

  window.addEventListener('touchend', () => {
    isDragging = false;
  });

  window.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    if (e.touches.length > 0) {
      setSliderPosition(e.touches[0].clientX);
    }
  });

  // Allow clicking on container to set position
  container.addEventListener('click', (e) => {
    if (e.target.closest('.slider-handle')) return; // Avoid double triggering on handle click
    setSliderPosition(e.clientX);
  });

  // Set initial position to 50%
  afterImage.style.clipPath = 'inset(0 50% 0 0)';
  handle.style.left = '50%';
}

/* ==========================================================================
   2. HISTORICAL PHOTO GALLERY FILTER & LIGHTBOX
   ========================================================================== */
function initHistoryGallery() {
  const tabs = document.querySelectorAll('.hist-tab');
  const items = document.querySelectorAll('.hist-item');
  const lightbox = document.getElementById('gallery-lightbox');
  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxCaption = document.getElementById('lightbox-caption');
  const lightboxClose = document.getElementById('lightbox-close');

  if (tabs.length === 0) return;

  // 1. Tab Filtering
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove active states
      tabs.forEach(t => {
        t.classList.remove('bg-gold', 'text-emerald-dark', 'font-bold');
        t.classList.add('bg-white/5', 'text-white/70', 'border', 'border-white/10');
      });

      // Add active state to clicked tab
      tab.classList.remove('bg-white/5', 'text-white/70', 'border', 'border-white/10');
      tab.classList.add('bg-gold', 'text-emerald-dark', 'font-bold');

      const filter = tab.getAttribute('data-filter');

      items.forEach(item => {
        const category = item.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          item.classList.remove('hidden');
          // Smooth fade in transition
          item.style.opacity = '0';
          item.style.transform = 'scale(0.95)';
          setTimeout(() => {
            item.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
            item.style.opacity = '1';
            item.style.transform = 'scale(1)';
          }, 30);
        } else {
          item.classList.add('hidden');
        }
      });
    });
  });

  // 2. Lightbox Functionality
  items.forEach(item => {
    item.addEventListener('click', () => {
      if (!lightbox || !lightboxImg) return;
      const img = item.querySelector('img');
      const captionText = item.querySelector('.hist-item-title')?.textContent || '';
      const descText = item.querySelector('.hist-item-desc')?.textContent || '';

      if (img) {
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
        if (lightboxCaption) {
          lightboxCaption.innerHTML = `<h4 class="font-serif text-lg text-gold font-bold">${captionText}</h4><p class="text-xs text-white/75 mt-1 font-sans">${descText}</p>`;
        }
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.classList.add('overflow-hidden'); // Disable background scrolling
      }
    });
  });

  if (lightboxClose && lightbox) {
    // Close lightbox on close button click
    lightboxClose.addEventListener('click', closeLightbox);

    // Close lightbox when clicking outside the image
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox || e.target.closest('#lightbox-close')) {
        closeLightbox();
      }
    });

    // Close lightbox on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeLightbox();
      }
    });
  }

  function closeLightbox() {
    lightbox.classList.remove('flex');
    lightbox.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
}

/* ==========================================================================
   3. SCROLL PROGRESS INDICATOR & BREADCRUMBS EFFECT
   ========================================================================== */
function initScrollProgress() {
  const progressBar = document.getElementById('sejarah-scroll-progress');
  if (!progressBar) return;

  window.addEventListener('scroll', () => {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    progressBar.style.width = scrolled + '%';
  });
}

/* ==========================================================================
   4. PARALLAX EFFECT FOR STORYTELLING / TIMELINE
   ========================================================================== */
function initTimelineParallax() {
  const parallaxBg = document.querySelectorAll('.parallax-bg-effect');
  if (parallaxBg.length === 0) return;

  window.addEventListener('scroll', () => {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    
    parallaxBg.forEach(bg => {
      const speed = 0.3;
      const rect = bg.getBoundingClientRect();
      const scrolledPast = window.innerHeight - rect.top;
      
      if (scrolledPast > 0 && rect.bottom > 0) {
        const yPos = scrolledPast * speed - 100;
        bg.style.backgroundPositionY = `${yPos}px`;
      }
    });
  });
}
