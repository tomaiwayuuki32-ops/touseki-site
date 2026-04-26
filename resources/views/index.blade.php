@php
  $title = '透析ナビ｜患者さん・ご家族のための透析情報サイト';
  $description = '透析ナビは、患者さんやご家族に向けて、透析の基本、血液透析、腹膜透析、日常生活との両立などをわかりやすく紹介する透析情報サイトです。';
@endphp
@include('commons.header')

<main class="top-main">

  <!-- ══════════════════════════════
       1. ファーストビュー
  ══════════════════════════════ -->
  <section class="hero">
    <div class="hero-inner">
      <p class="hero-label">透析患者さん・ご家族のための情報サイト</p>
      <h1 class="hero-title">透析のことを、<br>もっとわかりやすく。</h1>
      <p class="hero-desc">
        「透析って何？」「これからどうなるの？」<br>
        そんな疑問や不安に寄り添いながら、透析の基本や治療法の違い、生活で知っておきたいことをわかりやすく整理してお届けします。
      </p>
      <div class="hero-actions">
        <a href="#about" class="btn-primary">透析の基本を知る</a>
        <a href="#compare" class="btn-secondary">治療法の違いを見る</a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       2. 透析とは
  ══════════════════════════════ -->
  <section class="about" id="about">
    <div class="section-inner">
      <div class="section-heading">
        <span class="section-label">ABOUT</span>
        <h2 class="section-title">透析とは？</h2>
        <p class="section-desc">透析とは、腎臓の働きが大きく低下したときに、体の中の老廃物や余分な水分を取り除くために行う治療です。</p>
      </div>
      <div class="about-grid">
        <div class="about-card">
          <div class="about-card-icon">
            <img src="{{ asset('images/icons/kidney.svg') }}" alt="腎臓のアイコン" class="about-card-icon-img">
          </div>
          <h3>腎臓の役割</h3>
          <p>腎臓は血液中の老廃物や余分な水分をこし取り、尿として排出する大切な臓器です。</p>
        </div>
        <div class="about-card">
          <div class="about-card-icon">💉</div>
          <h3>透析が必要になるとき</h3>
          <p>腎臓の働きが大きく低下すると、老廃物や水分を十分に排出できなくなります。腎機能が低下した際に、透析や腎移植が検討されます。</p>
        </div>
        <div class="about-card">
          <div class="about-card-icon">🏥</div>
          <h3>透析で何が変わる？</h3>
          <p>透析を続けることで、老廃物や余分な水分を体の外に出し、体調を保ちながら生活を続けやすくなります。</p>
        </div>
      </div>
      <div class="section-link">
        <a href="/dialysis">透析の基礎知識を詳しく見る →</a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       3. 血液透析と腹膜透析の比較
  ══════════════════════════════ -->
  <section class="compare" id="compare">
    <div class="section-inner">
      <div class="section-heading">
        <span class="section-label">COMPARE</span>
        <h2 class="section-title">2つの透析方法</h2>
        <p class="section-desc">透析には主に「血液透析」と「腹膜透析」の2種類があり、治療を行う場所や通院頻度、生活との両立のしやすさなどに違いがあります。</p>
      </div>
      <div class="compare-grid">

        <div class="compare-card">
          <div class="compare-card-header compare-card-header--hd">
            <span class="compare-badge">HD</span>
            <h3>血液透析</h3>
          </div>
          <ul class="compare-list">
            <li>一般的に、週3回、1回4時間前後、医療機関に通って受けます。</li>
            <li>医療スタッフの管理のもとで治療を受けられるため、安心感があります。</li>
            <li>通院の負担はありますが、自宅での処置は基本的に不要です。</li>
            <li>日本で最も多く行われている透析方法です。</li>
          </ul>
          <a href="/hd" class="compare-link">血液透析の特徴を詳しく見る →</a>
        </div>

        <div class="compare-card">
          <div class="compare-card-header compare-card-header--pd">
            <span class="compare-badge">PD</span>
            <h3>腹膜透析</h3>
          </div>
          <ul class="compare-list">
            <li>お腹の中の腹膜を使い、自宅を中心に行う透析です。</li>
            <li>毎日行う必要があり、自分や家族で管理する場面があります。</li>
            <li>通院は月1〜2回程度と比較的少なめです。</li>
            <li>生活スタイルに合わせて、仕事や学校と両立しやすい場合があります。</li>
          </ul>
          <a href="/pd" class="compare-link">腹膜透析の特徴を詳しく見る →</a>
        </div>

      </div>
      <p class="compare-note">どちらが合うかは、体の状態や生活スタイルによって異なります。治療法の選択は、担当医とよく相談して決めましょう。</p>
    </div>
  </section>

  <!-- ══════════════════════════════
       4. よくある不安・疑問
  ══════════════════════════════ -->
  <section class="faq" id="faq">
    <div class="section-inner">
      <div class="section-heading">
        <span class="section-label">FAQ</span>
        <h2 class="section-title">よくある不安・疑問</h2>
        <p class="section-desc">透析を始める前後に多く寄せられるご質問をまとめました。</p>
      </div>
      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question">透析を始めると、仕事は続けられますか？</summary>
          <p class="faq-answer">多くの方が透析を続けながら仕事をしています。透析のスケジュールに合わせて勤務形態を調整することで、働き続けることが可能です。腹膜透析の場合は通院が少ないため、特に仕事との両立がしやすいとされています。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">透析中は痛みがありますか？</summary>
          <p class="faq-answer">血液透析では針を刺す際に多少の痛みを感じることがありますが、慣れてくると気にならなくなる方がほとんどです。透析中は横になって過ごすことができ、本を読んだりテレビを見たりしている方も多くいます。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">食事の制限はどのくらいありますか？</summary>
          <p class="faq-answer">塩分・水分・カリウム・リンなどの制限が必要になる場合があります。ただし制限の程度は個人によって異なります。管理栄養士による食事指導を受けながら、無理なく続けられる食生活を一緒に考えていきましょう。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">旅行はできますか？</summary>
          <p class="faq-answer">旅行先の透析施設を事前に予約することで、旅行を楽しめる場合があります。国内はもちろん、海外への旅行を経験されている方もいます。旅行先の透析施設については、担当医や通院先の医療機関に相談してみましょう。</p>
        </details>

      </div>
      <div class="section-link">
        <a href="#">すべてのFAQを見る →</a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       5. 初めての方におすすめの記事
  ══════════════════════════════ -->
  <section class="recommend" id="recommend">
    <div class="section-inner">
      <div class="section-heading">
        <span class="section-label">FOR BEGINNERS</span>
        <h2 class="section-title">初めての方におすすめ</h2>
        <p class="section-desc">透析について初めて知る方に向けて、基礎から順番に読める記事を選びました。</p>
      </div>
      <div class="recommend-grid">

        <a href="#" class="recommend-card">
          <span class="recommend-step">STEP 1</span>
          <h3 class="recommend-card-title">腎臓と透析の基礎知識</h3>
          <p class="recommend-card-desc">腎臓がどんな働きをしているか、透析がなぜ必要になるかをやさしく解説します。</p>
        </a>

        <a href="#" class="recommend-card">
          <span class="recommend-step">STEP 2</span>
          <h3 class="recommend-card-title">血液透析の1日の流れ</h3>
          <p class="recommend-card-desc">透析当日の朝から帰宅までの流れを、具体的なスケジュールとともに紹介します。</p>
        </a>

        <a href="#" class="recommend-card">
          <span class="recommend-step">STEP 3</span>
          <h3 class="recommend-card-title">透析中の食事・水分管理</h3>
          <p class="recommend-card-desc">透析患者さんが気をつけたい食事のポイントを、実際のメニュー例を交えて紹介します。</p>
        </a>

        <a href="#" class="recommend-card">
          <span class="recommend-step">STEP 4</span>
          <h3 class="recommend-card-title">ご家族の方へ：サポートのヒント</h3>
          <p class="recommend-card-desc">患者さんを支えるご家族が知っておきたい情報と、日々のサポートのポイントをまとめました。</p>
        </a>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       6. 運営者ミニ紹介
  ══════════════════════════════ -->
  <section class="about-author" id="author">
    <div class="section-inner">
      <div class="author-card">
        <div class="author-avatar"></div>
        <div class="author-body">
          <p class="author-label">このサイトについて</p>
          <h2 class="author-name">透析ナビ 運営者より</h2>
          <p class="author-text">
            このサイトは、透析の現場で働く臨床工学技士が、患者さんやご家族に「もっとわかりやすく情報を届けたい」という思いで作成しました。専門用語はできるだけ避け、日常の言葉で説明することを心がけています。医療上の判断は、必ず担当医にご相談ください。
          </p>
          <a href="/about" class="author-link">運営者情報を見る →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       7. 最後の導線（CTA）
  ══════════════════════════════ -->
  <section class="cta">
    <div class="section-inner">
      <h2 class="cta-title">まず、ここから読んでみませんか？</h2>
      <p class="cta-desc">不安や疑問を感じている方が、最初の一歩を踏み出しやすいように、基本から読める内容をそろえました。</p>
      <div class="cta-actions">
        <a href="/dialysis" class="btn-primary">透析とはを読む</a>
        <a href="/hd" class="btn-primary">血液透析を読む</a>
        <a href="/pd" class="btn-primary">腹膜透析を読む</a>
      </div>
      <a href="/contact" class="cta-contact-link">お問い合わせはこちら →</a>
    </div>
  </section>

</main>
</head>
<body>

@include('commons.footer')
