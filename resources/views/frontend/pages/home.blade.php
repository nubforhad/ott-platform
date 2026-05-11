@extends('frontend.master')

@section('content')


{{-- Backend থেকে dynamic video card --}}
{{-- @foreach($videos as $video)
<div class="col-6 col-sm-4 col-md-3 col-lg-2 content-item"
     data-genre="{{ strtolower($video->category->name ?? 'all') }}">
  <div class="content-card"
       data-iframe="{{ $video->iframe }}"
       data-title="{{ $video->title }}"
       data-meta="{{ $video->created_at->format('Y') }} · {{ $video->category->name ?? '' }}">
    <img src="{{ asset($video->image) }}" alt="{{ $video->title }}">
    <div class="card-genre">{{ $video->category->name ?? '' }}</div>
    <div class="card-overlay">
      <div class="card-title">{{ $video->title }}</div>
    </div>
    <div class="card-hover-actions">
      <div class="hover-btn" onclick="addToWatchlistDirect(event)"><i class="bi bi-plus-lg"></i></div>
      <div class="hover-btn play-btn" onclick="playVideo(event, this)"><i class="bi bi-play-fill"></i></div>
      <div class="hover-btn"><i class="bi bi-hand-thumbs-up"></i></div>
    </div>
  </div>
</div>
@endforeach --}}



<!-- ══════════════ CATEGORIES + CONTENT GRID ══════════════ -->
<section class="categories-section" id="browse">
  <div class="mb-5 d-flex flex-wrap">
    <span class="category-pill active" onclick="filterCategory(this,'all')">
  <i class="bi bi-grid-fill"></i>All
</span>

@foreach($videos->pluck('category')->unique('id')->filter() as $cat)
<span class="category-pill"
      onclick="filterCategory(this,'{{ strtolower(str_replace(' ', '', $cat->name)) }}')">
  {{ $cat->name }}
</span>
@endforeach
  </div>


<!-- Video Modal — body এর আগে রাখো -->
<div id="videoModal" onclick="if(event.target===this)closeVideo()" style="
  display:none; position:fixed; inset:0;
  background:rgba(0,0,0,0.92); z-index:99999;
  justify-content:center; align-items:center;
">
  <div style="position:relative; width:92%; max-width:960px;">
    <button onclick="closeVideo()" style="
      position:absolute; top:-44px; right:0;
      background:none; border:none; color:#fff;
      font-size:2rem; cursor:pointer; line-height:1;
    ">✕</button>
    <div style="position:relative; padding-bottom:56.25%; height:0; border-radius:12px; overflow:hidden;">
      <iframe id="videoIframe" src="" frameborder="0"
        style="position:absolute; top:0; left:0; width:100%; height:100%;"
        allow="autoplay; encrypted-media; fullscreen"
        allowfullscreen>
      </iframe>
    </div>
    <div style="color:#fff; margin-top:14px;">
      <div id="modalTitle" style="font-size:1.2rem; font-weight:600;"></div>
      <div id="modalMeta" style="color:#aaa; font-size:0.85rem; margin-top:4px;"></div>
    </div>
  </div>
</div>

<script> 
  function playVideo(event, btn) {
    event.stopPropagation();
    const card = btn.closest('.content-card');
    openVideoModal(card);
  }

  // ✅ Trending card
  function playTrendingVideo(card) {
    openVideoModal(card);
  }

  // ✅ Core function — youtube id থেকে iframe বানায়
  function openVideoModal(card) {
    const youtubeId = card.getAttribute('data-youtube');
    const title     = card.getAttribute('data-title') || '';
    const meta      = card.getAttribute('data-meta')  || '';

    if (!youtubeId) { alert('Video পাওয়া যাচ্ছে না!'); return; }

    // autoplay=1 দিলে YouTube autoplay করবে
    const src = `https://www.youtube.com/embed/${youtubeId}?autoplay=1&rel=0`;

    document.getElementById('videoIframe').src   = src;
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalMeta').innerText  = meta;

    const modal = document.getElementById('videoModal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }

  function closeVideo() {
    document.getElementById('videoModal').style.display = 'none';
    document.getElementById('videoIframe').src = ''; // video বন্ধ
    document.body.style.overflow = '';
  }

  // ESC চাপলে বন্ধ
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeVideo();
  });
</script>

  <!-- Content Grid -->
  <!-- data-youtube: YouTube video ID -->
  <div class="row g-3" id="contentGrid">


@foreach($videos as $video)
<div class="col-6 col-sm-4 col-md-3 col-lg-2 content-item"
     data-genre="{{ strtolower(str_replace(' ', '', $video->category->name ?? 'all')) }}">
  <div class="content-card"
       data-src="{{ $video->iframe }}"
       data-title="{{ $video->title }}"
       data-meta="{{ $video->created_at->format('Y') }} · {{ $video->category->name ?? 'General' }}">

    <img src="{{ $video->image ? asset($video->image) : 'https://images.unsplash.com/photo-1533134486753-c833f0ed4866?w=400&q=80' }}"
         alt="{{ $video->title }}">

    <div class="card-genre">{{ $video->category->name ?? 'General' }}</div>

    <div class="card-overlay">
      <div class="card-title">{{ $video->title }}</div>
      <div class="card-meta"> {{ $video->created_at->format('d M Y') }}</div>
    </div>

    <div class="card-hover-actions">
      <div class="hover-btn" onclick="addToWatchlistDirect(event)">
        <i class="bi bi-plus-lg"></i>
      </div>
      <div class="hover-btn play-btn" onclick="playVideo(event, this)">
        <i class="bi bi-play-fill"></i>
      </div>
      <div class="hover-btn">
        <i class="bi bi-hand-thumbs-up"></i>
      </div>
    </div>

  </div>
</div>
@endforeach


   <script>
    function playVideo(event, btn) {
    event.stopPropagation();
    const card = btn.closest('.content-card');
    openVideoModal(card);
}

function openVideoModal(card) {
    const src   = card.getAttribute('data-src');
    const title = card.getAttribute('data-title') || '';
    const meta  = card.getAttribute('data-meta')  || '';

    if (!src) { alert('Video পাওয়া যাচ্ছে না!'); return; }

    // ✅ src দিয়ে সরাসরি iframe বানায়
    const iframe = `<iframe
        src="${src}"
        style="position:absolute;top:0;left:0;width:100%;height:100%;border:none;"
        allow="autoplay; encrypted-media; fullscreen"
        allowfullscreen>
    </iframe>`;

    document.getElementById('iframeContainer').innerHTML = iframe;
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalMeta').innerText  = meta;
    document.getElementById('videoModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeVideo() {
    document.getElementById('videoModal').style.display = 'none';
    document.getElementById('iframeContainer').innerHTML = '';
    document.body.style.overflow = '';
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeVideo();
});
   </script>

    
  </div>
</section>















<!-- ══════════════ TRENDING ══════════════ -->
<section class="trending-section" id="trending">
  <div class="section-label mb-2">Hot Right Now</div>
  <div class="section-title mb-4">Trending This Week</div>
  <div class="row g-3">
    <div class="col-12 col-md-6">
      <div class="trending-card" data-youtube="dQw4w9WgXcQ" data-title="Echoes of War" data-meta="2024 · War Epic · ★ 9.2" data-genre-label="Drama" data-rating="★ 9.2" data-duration="2h 38m" onclick="playTrendingVideo(this)">
        <img src="https://images.unsplash.com/photo-1535016120720-40c646be5580?w=800&q=80" alt="Echoes of War">
        <div class="trending-num">1</div>
        <div class="trending-play-overlay">
          <div class="trending-play-btn"><i class="bi bi-play-fill"></i></div>
        </div>
        <div class="trending-info">
          <div class="trending-badge"><i class="bi bi-fire me-1"></i>Trending #1</div>
          <div class="trending-title">Echoes of War</div>
          <div class="trending-desc">A gripping war epic spanning three generations, as families torn apart by conflict fight to reunite across impossible odds.</div>
          <div class="d-flex gap-2">
            <a href="#" class="btn-cta-primary" style="padding:10px 22px;font-size:0.85rem" onclick="event.stopPropagation(); playTrendingVideo(this.closest('.trending-card'))"><i class="bi bi-play-fill"></i> Watch Now</a>
            <a href="#" class="btn-cta-secondary" style="padding:10px 22px;font-size:0.85rem" onclick="event.preventDefault(); event.stopPropagation(); addToWatchlistDirect(event)"><i class="bi bi-plus"></i> My List</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="row g-3 h-100">
        <div class="col-6">
          <div class="trending-card" style="height:196px" data-youtube="9g-qqLBg8hk" data-title="Midnight Run" data-meta="2024 · Action · ★ 8.3" data-genre-label="Action" data-rating="★ 8.3" data-duration="1h 55m" onclick="playTrendingVideo(this)">
            <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=400&q=80" alt="Midnight Run">
            <div class="trending-num" style="font-size:3rem">2</div>
            <div class="trending-play-overlay">
              <div class="trending-play-btn" style="width:52px;height:52px;font-size:1.3rem"><i class="bi bi-play-fill"></i></div>
            </div>
            <div class="trending-info" style="padding:16px">
              <div class="trending-title" style="font-size:1.1rem">Midnight Run</div>
              <div class="card-meta" style="font-size:0.8rem;color:#aaa">2024 · Action</div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="trending-card" style="height:196px" data-youtube="7wtfhZwyrcc" data-title="Code Red" data-meta="2024 · Thriller · ★ 8.7" data-genre-label="Thriller" data-rating="★ 8.7" data-duration="1h 49m" onclick="playTrendingVideo(this)">
            <img src="https://images.unsplash.com/photo-1574375927938-d5a98e8ffe85?w=400&q=80" alt="Code Red">
            <div class="trending-num" style="font-size:3rem">3</div>
            <div class="trending-play-overlay">
              <div class="trending-play-btn" style="width:52px;height:52px;font-size:1.3rem"><i class="bi bi-play-fill"></i></div>
            </div>
            <div class="trending-info" style="padding:16px">
              <div class="trending-title" style="font-size:1.1rem">Code Red</div>
              <div class="card-meta" style="font-size:0.8rem;color:#aaa">2024 · Thriller</div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="trending-card" style="height:196px" data-youtube="kl2FJFBQzSg" data-title="Star Drift" data-meta="2024 · Sci-Fi · ★ 8.5" data-genre-label="Sci-Fi" data-rating="★ 8.5" data-duration="2h 12m" onclick="playTrendingVideo(this)">
            <img src="https://images.unsplash.com/photo-1495147466023-ac5c588e2e94?w=400&q=80" alt="Star Drift">
            <div class="trending-num" style="font-size:3rem">4</div>
            <div class="trending-play-overlay">
              <div class="trending-play-btn" style="width:52px;height:52px;font-size:1.3rem"><i class="bi bi-play-fill"></i></div>
            </div>
            <div class="trending-info" style="padding:16px">
              <div class="trending-title" style="font-size:1.1rem">Star Drift</div>
              <div class="card-meta" style="font-size:0.8rem;color:#aaa">2024 · Sci-Fi</div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="trending-card" style="height:196px" data-youtube="JZBq1hSNnEA" data-title="Lost in Time" data-meta="2023 · Drama · ★ 7.9" data-genre-label="Drama" data-rating="★ 7.9" data-duration="1h 58m" onclick="playTrendingVideo(this)">
            <img src="https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?w=400&q=80" alt="Lost in Time">
            <div class="trending-num" style="font-size:3rem">5</div>
            <div class="trending-play-overlay">
              <div class="trending-play-btn" style="width:52px;height:52px;font-size:1.3rem"><i class="bi bi-play-fill"></i></div>
            </div>
            <div class="trending-info" style="padding:16px">
              <div class="trending-title" style="font-size:1.1rem">Lost in Time</div>
              <div class="card-meta" style="font-size:0.8rem;color:#aaa">2023 · Drama</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════ FEATURES ══════════════ -->
<section class="features-section">
  <div class="text-center mb-5">
    <div class="section-label">Why StreamVault</div>
    <div class="section-title">Everything You Need</div>
    <p class="section-sub mx-auto">Built for the ultimate viewing experience — wherever you are, whatever you love.</p>
  </div>
  <div class="row g-3">
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-4k"></i></div>
        <div>
          <div class="feature-title">4K Ultra HD + HDR</div>
          <div class="feature-desc">Crystal-clear picture with HDR10 and Dolby Vision support on compatible devices.</div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-download"></i></div>
        <div>
          <div class="feature-title">Download & Watch Offline</div>
          <div class="feature-desc">Save your favourites and watch without internet on planes, trains, or anywhere.</div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
        <div>
          <div class="feature-title">Multiple Profiles</div>
          <div class="feature-desc">Up to 5 personalized profiles with individual watchlists, parental controls and recommendations.</div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-translate"></i></div>
        <div>
          <div class="feature-title">40+ Languages</div>
          <div class="feature-desc">Subtitles and audio in over 40 languages so everyone in the family is covered.</div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-shield-fill-check"></i></div>
        <div>
          <div class="feature-title">Ad-Free Experience</div>
          <div class="feature-desc">Premium plans are 100% ad-free. Uninterrupted binge-watching every time.</div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-phone-fill"></i></div>
        <div>
          <div class="feature-title">All Your Devices</div>
          <div class="feature-desc">Smart TVs, phones, tablets, laptops — stream seamlessly across all platforms.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════ TESTIMONIALS ══════════════ -->
<section class="testimonials-section">
  <div class="text-center mb-5">
    <div class="section-label">Reviews</div>
    <div class="section-title">Loved by Millions</div>
  </div>
  <div class="row g-4">
    <div class="col-12 col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-text">"StreamVault completely replaced every other streaming service for me. The 4K quality is jaw-dropping and the content library is simply unmatched."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&q=80" alt="Marcus" class="author-avatar">
          <div>
            <div class="author-name">Marcus Chen</div>
            <div class="author-plan">Premium Member</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-text">"The offline download feature is a game-changer for my commute. I've never missed an episode since switching to StreamVault two years ago."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80" alt="Priya" class="author-avatar">
          <div>
            <div class="author-name">Priya Sharma</div>
            <div class="author-plan">Premium Member · 2 yrs</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-stars">★★★★☆</div>
        <p class="testimonial-text">"As a student on a budget, the student plan is incredible value. Full HD, ad-free, and more anime than I'll ever finish. Absolute win."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&q=80" alt="Jake" class="author-avatar">
          <div>
            <div class="author-name">Jake Morrison</div>
            <div class="author-plan">Student Member</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════ PROMO CTA ══════════════ -->
<section class="promo-section">
  <div class="promo-bg"></div>
  <div style="position:relative;z-index:2">
    <div class="section-label">Limited Offer</div>
    <h2>30 Days Free.<br>No Strings.</h2>
    <p>Join over 50 million viewers. Start your free trial today — cancel anytime, no credit card required.</p>
    <div class="email-form">
      <input type="email" placeholder="Enter your email address..." id="emailInput">
      <a href="#" class="btn-cta-primary" style="white-space:nowrap" onclick="handleSignup(event)">
        <i class="bi bi-arrow-right-circle-fill"></i> Get Started
      </a>
    </div>
    <p style="margin-top:16px;font-size:1rem;color:#555">By signing up you agree to our <a href="#" style="color:var(--primary)">Terms</a> and <a href="#" style="color:var(--primary)">Privacy Policy</a>.</p>
  </div>
</section>




@endsection