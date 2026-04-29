<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? '透析ナビ｜患者さん・ご家族のための透析情報サイト' }}</title>
  <meta name="description" content="{{ $description ?? '透析ナビは、患者さんやご家族に向けて、透析の基本や日常生活との両立などをわかりやすく紹介する透析情報サイトです。' }}" />
  <link rel="canonical" href="{{ url()->current() }}" />
  <!-- OGP -->
  <meta property="og:title" content="{{ $title ?? '透析ナビ｜患者さん・ご家族のための透析情報サイト' }}" />
  <meta property="og:description" content="{{ $description ?? '透析ナビは、患者さんやご家族に向けて、透析の基本や日常生活との両立などをわかりやすく紹介する透析情報サイトです。' }}" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:site_name" content="透析ナビ" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:image" content="{{ asset('images/ogp.png') }}" />
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{ $title ?? '透析ナビ｜患者さん・ご家族のための透析情報サイト' }}" />
  <meta name="twitter:description" content="{{ $description ?? '透析ナビは、患者さんやご家族に向けて、透析の基本や日常生活との両立などをわかりやすく紹介する透析情報サイトです。' }}" />
  <meta name="twitter:image" content="{{ asset('images/ogp.png') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700&family=Noto+Sans+JP:wght@300;400;500&display=swap" rel="stylesheet" />
  <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
</head>
<body>

<header>

  <!-- ── Top band: logo + tagline ── -->
  <div class="header-top">
    <div class="logo-mark">
      <!-- water-drop / medical cross SVG icon -->
      <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- drop shape -->
        <path d="M16 3 C16 3 7 14 7 20 A9 9 0 0 0 25 20 C25 14 16 3 16 3Z"
              fill="rgba(255,255,255,0.9)"/>
        <!-- small cross inside drop -->
        <rect x="14.5" y="13" width="3" height="9" rx="1.2" fill="#1a6ea8"/>
        <rect x="11"   y="16.5" width="10" height="3" rx="1.2" fill="#1a6ea8"/>
      </svg>
    </div>

    <div class="logo-text">
      <p class="logo-title">透析<span>ナビ</span></p>
      <p class="logo-tagline">患者さん・ご家族のための透析情報サイト</p>
    </div>
  </div>

  <!-- ── Nav band ── -->
  <div class="header-nav">
    <nav>
      <a href="/" @class(['active' => request()->routeIs('top')])>トップ</a>
      <a href="/dialysis" @class(['active' => request()->routeIs('dialysis')])>透析とは</a>
      <a href="/hd" @class(['active' => request()->routeIs('hd')])>血液透析</a>
      <a href="/pd" @class(['active' => request()->routeIs('pd')])>腹膜透析</a>
      <a href="#">FAQ</a>
      <a href="/about" @class(['active' => request()->routeIs('about')])>運営者情報</a>
      <a href="/contact" @class(['btn-contact', 'active' => request()->routeIs('contact')])>お問い合わせ</a>
    </nav>
  </div>

</header>
