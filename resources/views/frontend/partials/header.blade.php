<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Home | Viewvly - OTT Video Streaming Platform</title>
<link rel="icon" href="img/viewvlyew.png" type="image/png">

<meta name="title" content="Viewvly - OTT Video Streaming Platform">
<meta name="description" content="Viewvly is an OTT video streaming platform like YouTube, where users can watch, upload, and share videos, movies, and shows anytime, anywhere with smooth playback experience.">
<meta name="keywords" content="Viewvly, OTT platform, video streaming, YouTube alternative, watch videos online, upload videos, movies streaming, web series, entertainment platform">
<meta name="author" content="Viewvly">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Viewvly - OTT Video Streaming Platform">
<meta property="og:description" content="Watch, upload, and share videos, movies, and web series on Viewvly - a modern OTT streaming platform like YouTube.">
 

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Viewvly - OTT Video Streaming Platform">
<meta name="twitter:description" content="Stream videos, movies, and shows on Viewvly - a modern OTT platform like YouTube."> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- ══════════════ VIDEO MODAL ══════════════ -->
<div class="video-modal-overlay" id="videoModal" onclick="closeModalOnOverlay(event)">
  <div class="video-modal" id="videoModalBox">
    <div class="video-modal-header">
      <div>
        <div class="video-modal-title" id="modalTitle">Movie Title</div>
        <div class="video-modal-meta" id="modalMeta">2024 · Genre · Rating</div>
      </div>
      <button class="video-modal-close" onclick="closeVideoModal()" title="Close">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>
    <div class="video-wrapper">
      <iframe
        id="modalIframe"
        src=""
        title="YouTube video player"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen
      ></iframe>
    </div>
    <div class="video-modal-footer">
      <span class="video-genre-tag" id="modalGenre">Action</span>
      <span class="video-rating" id="modalRating">★ 8.2</span>
      <span class="video-duration" id="modalDuration">2h 14m</span>
      <button class="video-watchlist-btn" onclick="addToWatchlist()">
        <i class="bi bi-plus-lg"></i> Add to My List
      </button>
    </div>
  </div>
</div>

<!-- ══════════════ NAVBAR ══════════════ -->
<nav class="navbar-custom d-flex align-items-center justify-content-between" id="navbar">
  <a href="{{ route('frontend.home') }}" class="logo">
    <img src="{{ asset('img/viewvlyew.png') }}" alt="viewvlyew Logo" style="height:45px;">
</a>
  <div class="nav-links">
    <a href="{{ route('frontend.home') }}">Home</a>
    <a href="#">Movies</a>
    <a href="#">Series</a>
    <a href="#">Live TV</a>
    <a href="#">Sports</a>
    <a href="#">Kids</a>
  </div>
  <div class="d-flex align-items-center gap-2">
    <a href="{{ route('login') }}" class="btn-signin">Sign In</a>
    <a href="{{ route('register') }}" class="btn-start">Sign Up</a>
  </div>
</nav>
