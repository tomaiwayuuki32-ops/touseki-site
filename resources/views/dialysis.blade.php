@php
  $title = '透析とは？基本のしくみ・種類・日常生活への影響をわかりやすく解説｜透析ナビ';
  $description = '透析とは何かを、患者さんやご家族向けにわかりやすく解説します。血液透析と腹膜透析の違い、治療の基本、日常生活との関わりもやさしく紹介します。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => '透析とは']];
@endphp
@include('commons.header')

<main class="page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">DIALYSIS</span>
      <h1 class="page-hero-title">透析とは？</h1>
      <p class="page-hero-desc">透析について、基本からやさしく説明します。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>
  <div class="about-page-inner">

    <!-- ══════════════════════════════
         1. 透析とは何か
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">透析とは何か</h2>
      <div class="about-page-text-block">
        <p>透析とは、腎臓がうまく働かなくなったときに、体の中の老廃物や余分な水分を取り除く治療です。</p>
        <p>本来、腎臓は血液をきれいに保つ大切な役割をしています。その働きが大きく低下したとき、透析でその役割を補います。</p>
      </div>
      <div class="dialysis-lead-box">
        <p class="dialysis-lead-box-text">透析は、腎臓の働きを補う治療です。<br>体の中にたまった老廃物や余分な水分を取り除きます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. なぜ透析が必要になるのか
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">なぜ透析が必要になるのか</h2>
      <div class="about-page-text-block">
        <p>腎臓の働きがかなり低下すると、体の中に老廃物や余分な水分がたまりやすくなり、さまざまな症状が出てきます。</p>
        <p>むくみ、息切れ、体のだるさ、食欲の低下などが続くと、日常生活にも影響が出てきます。</p>
        <p>そうしたときに必要になる治療のひとつが透析です。透析を続けながら、安定した生活を送っている方も多くいます。</p>
      </div>
      <div class="dialysis-point-grid">
        <div class="dialysis-point-card">
          <p class="dialysis-point-label">こんな症状が出てきます</p>
          <ul class="dialysis-point-list">
            <li>むくみ（足・顔など）</li>
            <li>息切れ・呼吸困難</li>
            <li>体のだるさ・疲れやすさ</li>
            <li>食欲の低下・吐き気</li>
            <li>尿量の減少</li>
          </ul>
        </div>
        <div class="dialysis-point-card">
          <p class="dialysis-point-label">腎臓の働きが低下する主な原因</p>
          <ul class="dialysis-point-list">
            <li>糖尿病による腎臓の障害</li>
            <li>慢性的な腎炎</li>
            <li>高血圧による腎臓へのダメージ</li>
            <li>生まれつきの腎臓の病気</li>
            <li>その他の慢性腎臓病</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. 透析の種類
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">透析の種類</h2>
      <p class="dialysis-type-intro">透析には主に2種類あります。体の状態や生活スタイルによって合うものが異なるので、担当医と一緒に考えていきましょう。</p>
      <div class="dialysis-type-grid">

        <div class="dialysis-type-card dialysis-type-card--hd">
          <div class="dialysis-type-card-header">
            <span class="dialysis-type-badge">HD</span>
            <h3 class="dialysis-type-name">血液透析</h3>
          </div>
          <p class="dialysis-type-desc">医療機関に通い、機械を使って血液をきれいにします。週3回・1回4時間前後が一般的です。医療スタッフのサポートを受けながら行えます。</p>
          <a href="/hd" class="dialysis-type-link">血液透析について詳しく →</a>
        </div>

        <div class="dialysis-type-card dialysis-type-card--pd">
          <div class="dialysis-type-card-header">
            <span class="dialysis-type-badge">PD</span>
            <h3 class="dialysis-type-name">腹膜透析</h3>
          </div>
          <p class="dialysis-type-desc">お腹の中の腹膜を使い、主に自宅で行います。通院は月1〜2回程度と少なく、仕事や日常生活との両立がしやすい場合があります。</p>
          <a href="/pd" class="dialysis-type-link">腹膜透析について詳しく →</a>
        </div>

      </div>
    </section>

    <!-- ══════════════════════════════
         5. 透析が始まると生活はどうなるか
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">透析が始まると生活はどうなるか</h2>
      <div class="about-page-text-block">
        <p>透析を始めると、治療スケジュールを中心に生活のリズムが変わります。はじめは戸惑うこともあるかもしれませんが、多くの方が透析を続けながら仕事や旅行、趣味を楽しんでいます。</p>
      </div>
      <div class="dialysis-life-grid">
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">食事・水分</h4>
          <p class="dialysis-life-desc">食事や水分のとり方には注意が必要です。気をつける内容は人によって異なるため、医師や医療スタッフと相談しながら少しずつ整えていきます。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">通院・スケジュール</h4>
          <p class="dialysis-life-desc">血液透析では、一般的に週3回ほど通院し、1回あたり4時間前後かけて治療を行います。そのため、通院日や治療時間をふまえて、生活の予定を整えていくことが大切です。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">仕事・日常生活</h4>
          <p class="dialysis-life-desc">透析をしながら働いている方も多くいます。スケジュールを調整しながら、仕事と両立している方もいます。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">旅行・外出</h4>
          <p class="dialysis-life-desc">事前に透析施設の受け入れを確認しておけば、旅行や外出を続けることもできます。準備は必要ですが、透析を続けながら旅行をしている方も多くいます。</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         6. よくある不安
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">よくある不安</h2>
      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question">透析は一生続けないといけないのですか？</summary>
          <p class="faq-answer">一般的には、透析を始めると継続して治療を受けていくことになります。ただし、腎移植を受けることで透析が不要になる場合もあります。透析を続けながら安定した生活を送っている方も多いため、まずは主治医とよく相談することが大切です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">透析は痛いですか？</summary>
          <p class="faq-answer">痛みの感じ方は、透析の方法によって異なります。血液透析では、針を刺すときに痛みを感じることがありますが、慣れてくると気になりにくくなる方もいます。腹膜透析は毎回針を刺して行う治療ではないため、血液透析とは負担の感じ方が異なります。不安がある場合は、担当医や医療スタッフに相談しながら、自分に合った方法を考えていくことが大切です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">透析を始めると何でも食べられなくなりますか？</summary>
          <p class="faq-answer">塩分・水分・カリウム・リンなどに注意が必要になることはありますが、すべての食事が制限されるわけではありません。制限の内容は体の状態によって異なるため、医師や医療スタッフと相談しながら、無理なく続けられる食事の形を整えていきます。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">透析をしながら仕事はできますか？</summary>
          <p class="faq-answer">多くの方が、透析を続けながら仕事をしています。透析のスケジュールに合わせて勤務時間を調整することで、働き続けることは十分可能です。腹膜透析は通院回数が少ないため、生活や仕事に合わせやすい場合もあります。</p>
        </details>

      </div>
    </section>

    <!-- ══════════════════════════════
         7. 関連ページへの導線
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">もっと詳しく知りたい方へ</h2>
      <div class="dialysis-nav-grid">
        <a href="/hd" class="dialysis-nav-card">
          <span class="dialysis-nav-label">HD</span>
          <h3 class="dialysis-nav-title">血液透析</h3>
          <p class="dialysis-nav-desc">週3回の通院型透析について、仕組みや1日の流れを詳しく説明しています。</p>
        </a>
        <a href="/pd" class="dialysis-nav-card">
          <span class="dialysis-nav-label">PD</span>
          <h3 class="dialysis-nav-title">腹膜透析</h3>
          <p class="dialysis-nav-desc">自宅で行う腹膜透析の特徴や、日常生活との両立について説明しています。</p>
        </a>
        <a href="#" class="dialysis-nav-card">
          <span class="dialysis-nav-label">FAQ</span>
          <h3 class="dialysis-nav-title">よくある質問</h3>
          <p class="dialysis-nav-desc">透析に関するよくある疑問や不安をまとめています。</p>
        </a>
      </div>
    </section>

  </div><!-- /.about-page-inner -->

</main>

@include('commons.footer')
