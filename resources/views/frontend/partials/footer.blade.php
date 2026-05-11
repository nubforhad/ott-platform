
<!-- ══════════════ FOOTER ══════════════ -->
<footer>
  <div class="row g-5 mb-4">
    <div class="col-12 col-md-4">
      <div class="footer-logo">Stream<span>Vault</span></div>
      <p class="footer-desc">The world's leading streaming platform. Thousands of titles, one subscription.</p>
      <div class="footer-social">
        <a href="#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="social-btn"><i class="bi bi-instagram"></i></a>
        <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
        <a href="#" class="social-btn"><i class="bi bi-youtube"></i></a>
        <a href="#" class="social-btn"><i class="bi bi-tiktok"></i></a>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="footer-heading">Browse</div>
      <ul class="footer-links">
        <li><a href="#">Movies</a></li>
        <li><a href="#">TV Series</a></li>
        <li><a href="#">Originals</a></li>
        <li><a href="#">Live TV</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Kids & Family</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-2">
      <div class="footer-heading">Company</div>
      <ul class="footer-links">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Press</a></li>
        <li><a href="#">Investors</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-2">
      <div class="footer-heading">Support</div>
      <ul class="footer-links">
        <li><a href="#">Help Center</a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Devices</a></li>
        <li><a href="#">Gift Cards</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Cookie Settings</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-2">
      <div class="footer-heading">Legal</div>
      <ul class="footer-links">
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Cookie Policy</a></li>
        <li><a href="#">DMCA</a></li>
        <li><a href="#">Impressum</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 StreamVault, Inc. All rights reserved.</p>
    <p style="color:#333">Made with <i class="bi bi-heart-fill" style="color:var(--primary)"></i> for film lovers worldwide</p>
  </div>
</footer>

<!-- Scroll Top -->
<button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
  <i class="bi bi-arrow-up"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  /* ── NAVBAR SCROLL ── */
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
    document.getElementById('scrollTop').classList.toggle('visible', window.scrollY > 400);
  });

  /* ── GENRE FILTER ── */
  function filterCategory(el, genre) {
    document.querySelectorAll('.category-pill').forEach(p => p.classList.remove('active'));
    el.classList.add('active');
    document.querySelectorAll('.content-item').forEach(item => {
      if (genre === 'all' || item.dataset.genre === genre) {
        item.style.display = '';
        item.style.animation = 'fadeIn 0.4s ease';
      } else {
        item.style.display = 'none';
      }
    });
  }

  /* ══════════════════════════════════════
     VIDEO MODAL SYSTEM
     ══════════════════════════════════════ */

  const modal = document.getElementById('videoModal');
  const iframe = document.getElementById('modalIframe');

  /**
   * openVideoModal — opens the modal with given YouTube video data
   * @param {string} youtubeId  — YouTube video ID (e.g. "dQw4w9WgXcQ")
   * @param {string} title      — movie/show title
   * @param {string} meta       — subtitle line (year · genre · rating)
   * @param {string} genreLabel — genre label for badge
   * @param {string} rating     — star rating string
   * @param {string} duration   — duration string
   */
  function openVideoModal(youtubeId, title, meta, genreLabel, rating, duration) {
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalMeta').textContent = meta;
    document.getElementById('modalGenre').textContent = genreLabel;
    document.getElementById('modalRating').textContent = rating;
    document.getElementById('modalDuration').textContent = duration;

    // YouTube embed URL with autoplay
    iframe.src = `https://www.youtube.com/embed/${youtubeId}?autoplay=1&rel=0&modestbranding=1`;

    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  /** closeVideoModal — stops video and closes modal */
  function closeVideoModal() {
    modal.classList.remove('active');
    iframe.src = '';  // stops video playback
    document.body.style.overflow = '';
  }

  /** closeModalOnOverlay — close only when clicking the dark overlay (not the modal box) */
  function closeModalOnOverlay(e) {
    if (e.target === modal) closeVideoModal();
  }

  /** Keyboard: ESC closes modal */
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('active')) closeVideoModal();
  });

  /* ── Play button on content cards ── */
  function playVideo(event, btn) {
    event.stopPropagation();
    const card = btn.closest('.content-card');
    openVideoModal(
      card.dataset.youtube,
      card.dataset.title,
      card.dataset.meta,
      card.dataset.genreLabel,
      card.dataset.rating,
      card.dataset.duration
    );
  }

  /* ── Play on trending cards (click anywhere on card) ── */
  function playTrendingVideo(card) {
    openVideoModal(
      card.dataset.youtube,
      card.dataset.title,
      card.dataset.meta,
      card.dataset.genreLabel,
      card.dataset.rating,
      card.dataset.duration
    );
  }

  /* ── Watchlist ── */
  function addToWatchlist() {
    const title = document.getElementById('modalTitle').textContent;
    showToast(`"${title}" added to My List ✓`);
  }
  function addToWatchlistDirect(event) {
    event.stopPropagation();
    const card = event.currentTarget.closest('.content-card, .trending-card');
    const title = card ? (card.dataset.title || 'This title') : 'This title';
    showToast(`"${title}" added to My List ✓`);
  }

  /* ── Toast notification ── */
  function showToast(msg) {
    let toast = document.getElementById('svToast');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'svToast';
      toast.style.cssText = `
        position: fixed; bottom: 80px; left: 50%; transform: translateX(-50%) translateY(20px);
        background: #1a1a1a; border: 1px solid #333; color: #fff;
        padding: 12px 24px; border-radius: 6px; font-size: 0.88rem;
        font-family: 'DM Sans', sans-serif; z-index: 9998;
        opacity: 0; transition: opacity 0.3s, transform 0.3s;
        white-space: nowrap; box-shadow: 0 4px 20px rgba(0,0,0,0.5);
      `;
      document.body.appendChild(toast);
    }
    toast.textContent = msg;
    requestAnimationFrame(() => {
      toast.style.opacity = '1';
      toast.style.transform = 'translateX(-50%) translateY(0)';
    });
    clearTimeout(toast._timer);
    toast._timer = setTimeout(() => {
      toast.style.opacity = '0';
      toast.style.transform = 'translateX(-50%) translateY(20px)';
    }, 2800);
  }

  /* ── Signup ── */
  function handleSignup(event) {
    event.preventDefault();
    const email = document.getElementById('emailInput').value;
    if (!email || !email.includes('@')) {
      showToast('⚠️ Please enter a valid email address.');
      return;
    }
    showToast('🎉 Welcome to StreamVault! Check your email.');
  }

  /* ── Fade-in animation on scroll ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.feature-item, .testimonial-card').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(24px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(el);
  });










function playTrendingVideo(card) {
    const iframeSrc = card.getAttribute('data-iframe');
    const title     = card.getAttribute('data-title');
    const meta      = card.getAttribute('data-meta');

    if (!iframeSrc) {
        alert('Video link পাওয়া যাচ্ছে না!');
        return;
    }

    document.getElementById('videoIframe').src  = iframeSrc;
    document.getElementById('modalTitle').innerText = title || '';
    document.getElementById('modalMeta').innerText  = meta  || '';

    const modal = document.getElementById('videoModal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // scroll বন্ধ
}

function closeVideoModal() {
    document.getElementById('videoModal').style.display = 'none';
    document.getElementById('videoIframe').src = ''; // video বন্ধ হবে
    document.body.style.overflow = '';
}

// ESC চাপলে বন্ধ হবে
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeVideoModal();
});

// Modal background click করলে বন্ধ হবে
document.getElementById('videoModal').addEventListener('click', function(e) {
    if (e.target === this) closeVideoModal();
});



</script>
</body>
</html>