@php
  $title = '運営者情報｜透析ナビ';
  $description = '透析ナビを運営している臨床工学技士の紹介と、このサイトで透析情報を発信する目的について掲載しています。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => '運営者情報']];
@endphp
@include('commons.header')

<main class="page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">ABOUT</span>
      <h1 class="page-hero-title">運営者情報</h1>
      <p class="page-hero-desc">透析をこれから考える方やご家族に向けて、このサイトを運営しています。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>
  <div class="about-page-inner">

    <!-- ══════════════════════════════
         1. 挨拶
    ══════════════════════════════ -->
    <section class="about-page-section">
      <p class="about-page-greeting">
        透析をこれから考える方やご家族に向けて、むずかしい医療情報をできるだけ分かりやすく整理して伝えるために、このサイトを運営しています。
      </p>
    </section>

    <!-- ══════════════════════════════
         2. プロフィール
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">運営者プロフィール</h2>
      <div class="about-profile-card">
        <dl class="about-profile-dl">
          <div class="about-profile-row">
            <dt>名前</dt>
            <dd>Z</dd>
          </div>
          <div class="about-profile-row">
            <dt>職種</dt>
            <dd>臨床工学技士（国家資格）</dd>
          </div>
          <div class="about-profile-row">
            <dt>主な業務</dt>
            <dd>透析関連業務</dd>
          </div>
        </dl>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. このサイトを作った理由
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">このサイトを作った理由</h2>
      <div class="about-page-text-block">
        <p>透析の現場で働くなかで、不安を抱える患者さんやご家族と接する機会がたくさんありました。</p>
        <p>「これからどうなるの？」「何に気をつければいい？」という疑問は、多くの方が感じていることです。でも、ネット上の情報は専門用語が多かったり、整理されていなかったりして、初めての方には分かりにくいことも少なくありません。</p>
        <p>透析は、生活に深く関わる治療です。だからこそ、正確で分かりやすい情報が必要だと思っています。このサイトは、その思いから立ち上げました。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. 発信している内容
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">このサイトで発信している内容</h2>
      <ul class="about-page-list">
        <li>透析とは何か（基礎知識）</li>
        <li>血液透析・腹膜透析の違いと特徴</li>
        <li>透析中の食事・水分管理のポイント</li>
        <li>透析しながらの日常生活（仕事・旅行など）</li>
        <li>患者さんを支えるご家族へのヒント</li>
        <li>よくある疑問・不安への回答（FAQ）</li>
      </ul>
    </section>

    <!-- ══════════════════════════════
         5. 大切にしていること
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">情報発信で大切にしていること</h2>
      <div class="about-value-grid">
        <div class="about-value-card">
          <h3 class="about-value-title">分かりやすさ</h3>
          <p class="about-value-desc">専門用語はできるだけ使わず、日常の言葉で説明することを心がけています。</p>
        </div>
        <div class="about-value-card">
          <h3 class="about-value-title">正確さ</h3>
          <p class="about-value-desc">医療現場での経験や、信頼できる情報をもとに内容をまとめています。</p>
        </div>
        <div class="about-value-card">
          <h3 class="about-value-title">寄り添う姿勢</h3>
          <p class="about-value-desc">不安を抱える方の気持ちに向き合い、「知ってよかった」と思える情報を届けたいと思っています。</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         6. 注意事項
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">注意事項</h2>
      <div class="about-notice-box">
        <p>当サイトは、一般的な情報提供を目的としています。個別の診断や治療の代わりになるものではありません。</p>
        <p>症状や治療に関する判断は、必ず担当医や通院先の医療機関にご相談ください。</p>
        <p>サイトの内容は随時更新しますが、常に最新の情報であることを保証するものではありません。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         7. お問い合わせ
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">お問い合わせ</h2>
      <div class="about-page-text-block">
        <p>サイトの内容に関するご意見・ご感想は、お問い合わせフォームよりどうぞ。</p>
        <p>なお、個別の医療相談にはお答えできかねますのでご了承ください。</p>
      </div>
      <div class="about-contact-action">
        <a href="/contact" class="btn-about-contact">お問い合わせフォームへ</a>
      </div>
    </section>

  </div><!-- /.about-page-inner -->

</main>

@include('commons.footer')
