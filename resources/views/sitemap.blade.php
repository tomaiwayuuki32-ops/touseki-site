@php
  $title = 'サイトマップ｜透析ナビ';
  $description = '透析ナビのページ一覧です。透析の基本情報、血液透析、腹膜透析などの情報ページや、お問い合わせ・運営者情報などの固定ページを掲載しています。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => 'サイトマップ']];
@endphp
@include('commons.header')

<main class="sitemap-page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">SITEMAP</span>
      <h1 class="page-hero-title">サイトマップ</h1>
      <p class="page-hero-desc">透析ナビのページ一覧です。目的のページをお探しの際にご利用ください。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>
  <div class="about-page-inner">

    <section class="about-page-section about-page-section--last">

      <div class="sitemap-grid">

        <!-- ── 透析の情報 ── -->
        <div class="sitemap-category">
          <h2 class="sitemap-category-heading">透析の情報</h2>
          <ul class="sitemap-list">

            <li class="sitemap-item">
              <a href="/" class="sitemap-item-link">トップページ</a>
              <p class="sitemap-item-desc">透析ナビのトップページです。サイトの概要と主要ページへの案内を掲載しています。</p>
            </li>

            <li class="sitemap-item">
              <a href="/dialysis" class="sitemap-item-link">透析とは？</a>
              <p class="sitemap-item-desc">透析の基本的な仕組み、血液透析と腹膜透析の違い、日常生活への影響について説明しています。</p>
            </li>

            <li class="sitemap-item">
              <a href="/hd" class="sitemap-item-link">血液透析</a>
              <p class="sitemap-item-desc">血液透析の治療の流れ、バスキュラーアクセス、通院頻度、日常生活との両立について説明しています。</p>
            </li>

            <li class="sitemap-item">
              <a href="/pd" class="sitemap-item-link">腹膜透析</a>
              <p class="sitemap-item-desc">自宅で行う腹膜透析の仕組みや、CAPDとAPDの違い、血液透析との比較などを説明しています。</p>
            </li>

            <li class="sitemap-item sitemap-item--soon">
              <span class="sitemap-item-link sitemap-item-link--soon">よくある質問（FAQ）</span>
              <span class="sitemap-badge-soon">準備中</span>
              <p class="sitemap-item-desc">透析に関するよくある疑問や不安をまとめる予定です。</p>
            </li>

          </ul>
        </div>

        <!-- ── サイト情報 ── -->
        <div class="sitemap-category">
          <h2 class="sitemap-category-heading">サイト情報</h2>
          <ul class="sitemap-list">

            <li class="sitemap-item">
              <a href="/about" class="sitemap-item-link">運営者情報</a>
              <p class="sitemap-item-desc">透析ナビを運営している臨床工学技士の紹介と、サイトの目的を掲載しています。</p>
            </li>

            <li class="sitemap-item">
              <a href="/contact" class="sitemap-item-link">お問い合わせ</a>
              <p class="sitemap-item-desc">ご意見・ご感想、記事内容のご指摘、不具合のご報告などはこちらからご連絡ください。</p>
            </li>

            <li class="sitemap-item">
              <a href="/privacy" class="sitemap-item-link">プライバシーポリシー</a>
              <p class="sitemap-item-desc">個人情報の取り扱い、Cookie等の利用方針について掲載しています。</p>
            </li>

            <li class="sitemap-item">
              <a href="/disclaimer" class="sitemap-item-link">免責事項</a>
              <p class="sitemap-item-desc">掲載情報の利用に関する免責事項を掲載しています。</p>
            </li>

            <li class="sitemap-item">
              <a href="/sitemap" class="sitemap-item-link">サイトマップ</a>
              <p class="sitemap-item-desc">このページです。透析ナビのページ一覧をまとめています。</p>
            </li>

          </ul>
        </div>

      </div><!-- /.sitemap-grid -->

    </section>

  </div><!-- /.about-page-inner -->

</main>

@include('commons.footer')
