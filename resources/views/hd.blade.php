@php
  $title = '血液透析とは？治療の流れ・通院頻度・日常生活をわかりやすく解説｜透析ナビ';
  $description = '血液透析の基本、治療の流れ、バスキュラーアクセス、通院頻度、日常生活との両立について、患者さんやご家族向けにわかりやすく解説します。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => '血液透析']];
@endphp
@include('commons.header')

<main class="hd-page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">HEMODIALYSIS</span>
      <h1 class="page-hero-title">血液透析</h1>
      <p class="page-hero-desc">医療機関に通って行う血液透析について、基本からやさしく説明します。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>
  <div class="about-page-inner">

    <!-- ══════════════════════════════
         1. 血液透析とは
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">血液透析とは</h2>
      <div class="about-page-text-block">
        <p>血液透析は、腎臓の働きが大きく低下したときに、医療機関の機械を使って血液をきれいにする治療です。</p>
        <p>体の外に取り出した血液から老廃物や余分な水分を取り除き、きれいになった血液を体に戻します。これを定期的に繰り返すことで、腎臓の代わりとして体の状態を保ちます。</p>
        <p>日本で最も多く行われている透析の方法で、多くの方が血液透析を続けながら安定した生活を送っています。</p>
      </div>
      <div class="dialysis-lead-box">
        <p class="dialysis-lead-box-text">血液透析は、腎臓の働きを機械で補う治療です。<br>医療機関に通いながら、医療スタッフと一緒に続けていきます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. 血液透析の基本的な流れ
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">血液透析の基本的な流れ</h2>
      <div class="about-page-text-block">
        <p>血液透析では、体の外に血液を取り出し、専用の機械を通して老廃物や余分な水分を取り除いたあと、きれいになった血液を体に戻します。この流れを治療のたびに繰り返します。</p>
      </div>
      <div class="dialysis-flow">
        <div class="dialysis-flow-step">
          <span class="dialysis-flow-num">1</span>
          <p class="dialysis-flow-text">血液を体の外に取り出す</p>
        </div>
        <span class="dialysis-flow-arrow" aria-hidden="true">→</span>
        <div class="dialysis-flow-step">
          <span class="dialysis-flow-num">2</span>
          <p class="dialysis-flow-text">機械で老廃物や余分な水分を除去する</p>
        </div>
        <span class="dialysis-flow-arrow" aria-hidden="true">→</span>
        <div class="dialysis-flow-step">
          <span class="dialysis-flow-num">3</span>
          <p class="dialysis-flow-text">きれいになった血液を体に戻す</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. バスキュラーアクセス
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">血液透析に必要なバスキュラーアクセスとは</h2>
      <div class="about-page-text-block">
        <p>血液透析では、体の外に血液を取り出して、きれいになった血液を体に戻します。そのためには、十分な血液の流れを確保するための「血液の出入り口」が必要です。これをバスキュラーアクセスといいます。</p>
      </div>
      <div class="hd-feature-grid hd-feature-grid--four">
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">内シャント</h3>
          <p class="hd-feature-desc">腕の動脈と静脈をつないで作る方法です。もっとも一般的で、多くの方がこの方法で血液透析を受けています。</p>
        </div>
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">人工血管</h3>
          <p class="hd-feature-desc">自分の血管だけで作ることが難しいときに、人工の血管を使って作る方法です。</p>
        </div>
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">動脈表在化</h3>
          <p class="hd-feature-desc">動脈を皮膚の近くに移して、穿刺しやすくする方法です。ほかの方法が難しい場合に選ばれることがあります。</p>
        </div>
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">透析用カテーテル</h3>
          <p class="hd-feature-desc">首や足の付け根などの太い血管にカテーテルを入れて使う方法です。緊急で透析が必要なときに使う短期型のほか、長期的に使う長期型があります。</p>
        </div>
      </div>
      <div class="hd-stat-note">
        <p>どの方法が選ばれるかは、血管の状態や治療の状況、体の状態などによって異なります。詳しくは主治医と相談しながら決めていきます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. 血液透析の主な方法
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">血液透析の主な方法</h2>
      <div class="about-page-text-block">
        <p>血液透析には、通院して受ける方法のほかに、夜間に行う方法や自宅で行う方法もあります。どの方法が合うかは、体の状態や生活スタイル、対応している医療機関の状況によって異なります。詳しくは主治医と相談しながら考えていきます。</p>
      </div>
      <div class="hd-method-grid">

        <div class="hd-method-card">
          <span class="hd-method-badge">通院</span>
          <h3 class="hd-method-title">通院血液透析</h3>
          <p class="hd-method-desc">医療機関に定期的に通い、機械を使って血液をきれいにする方法です。多くの方がこの方法で治療を続けており、日本で最も広く行われています。</p>
        </div>

        <div class="hd-method-card">
          <span class="hd-method-badge">夜間</span>
          <h3 class="hd-method-title">オーバーナイト透析</h3>
          <p class="hd-method-desc">夜間に医療機関で長時間（6〜8時間程度）かけて行う血液透析です。日中の時間を確保しやすい面があります。</p>
          <p class="hd-method-note">※実施している施設は限られます</p>
        </div>

        <div class="hd-method-card">
          <span class="hd-method-badge">在宅</span>
          <h3 class="hd-method-title">在宅血液透析</h3>
          <p class="hd-method-desc">専用の機器を使って自宅で行う血液透析です。生活リズムに合わせやすい面がある一方、準備や機器の管理、家族の協力が必要になる場合があります。</p>
          <p class="hd-method-note">※対応できる施設や条件があります</p>
        </div>

      </div>
      <div class="dialysis-lead-box hd-method-transition">
        <p class="dialysis-lead-box-text">このページでは、もっとも一般的な通院血液透析を中心に、治療の頻度や日常生活について説明します。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         5. 一般的な通院頻度と時間の目安
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">一般的な通院頻度と時間の目安</h2>
      <p class="hd-section-lead">「どのくらい通院が必要になるのか」は、多くの方が最初に気になる点です。通院血液透析の一般的な目安をまとめました。</p>
      <div class="hd-stat-grid">
        <div class="hd-stat-card">
          <p class="hd-stat-value">週3回</p>
          <p class="hd-stat-label">一般的な通院頻度</p>
        </div>
        <div class="hd-stat-card">
          <p class="hd-stat-value">4時間前後</p>
          <p class="hd-stat-label">1回あたりの治療時間</p>
        </div>
        <div class="hd-stat-card">
          <p class="hd-stat-value">半日程度</p>
          <p class="hd-stat-label">移動・前後を含む通院の目安</p>
        </div>
      </div>
      <div class="hd-stat-note">
        <p>病院や体の状態によって多少異なることもありますが、多くの方がこのスケジュールで通院しています。治療中は横になって過ごすことができ、本を読んだりテレビを見たりしている方も多くいます。</p>
        <p>通院日をあらかじめ決めて、生活のリズムに組み込んでいくことが、血液透析を続けるうえで大切になります。通院にかかる時間は、治療そのものに加えて、準備や移動、待ち時間などを含めると半日程度になることもあります。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         6. 血液透析の主な特徴
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">血液透析の主な特徴</h2>
      <div class="hd-feature-grid">
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">医療スタッフのもとで受けられる</h3>
          <p class="hd-feature-desc">毎回、医師や看護師、臨床工学技士などの医療スタッフが体の状態を確認しながら治療を行います。自分だけで判断する場面が少なく、相談しながら続けやすい方法です。</p>
        </div>
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">医療機関で治療を受ける(在宅血液透析は自宅で治療します)</h3>
          <p class="hd-feature-desc">一般的な血液透析は、医療機関で受ける治療です。自宅で機械の準備や操作をする必要がなく、医療スタッフのサポートを受けながら治療を続けられます。</p>
        </div>
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">定期的に体の状態を確認できる</h3>
          <p class="hd-feature-desc">通院のたびに診察や血液検査などを通して、体の変化を確認できます。気になる症状や不安があるときも、その場で医療スタッフに相談しやすい環境があります。</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         7. 血液透析と日常生活
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">血液透析と日常生活</h2>
      <div class="about-page-text-block">
        <p>透析を始めると、通院スケジュールを中心に生活のリズムが変わる部分があります。ただ、多くの方が調整しながら仕事や趣味、旅行を続けています。</p>
      </div>
      <div class="dialysis-life-grid">
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">通院・スケジュール</h4>
          <p class="dialysis-life-desc">週3回・1回4時間前後の通院が一般的で、通院日をあらかじめ決めて日々の予定を組んでいく必要があります。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">仕事・日常生活</h4>
          <p class="dialysis-life-desc">透析をしながら働いている方も多くいます。体調や通院時間に合わせて、職場と相談しながら働き方を調整している方もいます。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">食事・水分</h4>
          <p class="dialysis-life-desc">塩分や水分、カリウム、リンなどに注意が必要な場合があります。制限の内容は体の状態によって異なるため、医師や医療スタッフと相談しながら整えていきます。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">旅行・外出</h4>
          <p class="dialysis-life-desc">事前に旅行先の透析施設の受け入れを確認・予約することで、旅行を続けることができます。準備は必要ですが、旅行を楽しんでいる方も多くいます。</p>
        </div>
      </div>
      <p class="hd-life-note">これらの点はいずれも個人差があります。主治医や医療スタッフと相談しながら、少しずつ自分のペースで整えていきましょう。</p>
    </section>

    <!-- ══════════════════════════════
         8. よくある質問
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">よくある質問</h2>
      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question">血液透析では痛みがありますか？</summary>
          <p class="faq-answer">血液透析で感じる痛みには個人差があります。内シャントや人工血管を使う場合は、治療のたびに針を刺すため、刺すときに痛みを感じることがあります。一方、透析用カテーテルでは毎回の穿刺はありません。ただし、違和感や不快感、挿入部のトラブルが気になることもあるため、不安や痛みがあるときは医療スタッフに相談することが大切です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">シャントとは何ですか？</summary>
          <p class="faq-answer">シャントは、血液透析を行うために必要な「血液の出入り口」のことを指して使われることが多い言葉です。一般的には、腕の動脈と静脈をつないで作る「内シャント」を指すことが多く、透析を始める前に手術で作成します。透析を続けるうえで大切な部位なので、傷つけないように日常的なケアが必要です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">毎回どのくらい時間がかかりますか？</summary>
          <p class="faq-answer">一般的な通院血液透析では、1回4時間前後かかります。治療中は横になって過ごすことができ、本を読んだりテレビを見たりして過ごす方もいます。ただし、長時間透析やオーバーナイト透析では、これより長くなることがあります。オーバーナイト透析は、夜間の睡眠時間を利用して7〜8時間ほどかけて行う方法です。移動や治療前後の準備、待ち時間などを含めると、通院に半日程度かかることもあります。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">血液透析をしながら仕事はできますか？</summary>
          <p class="faq-answer">多くの方が、透析を続けながら仕事をしています。治療時間や通院日に合わせて勤務時間を調整したり、働き方を見直したりしながら続けている方もいます。体調や仕事内容によって働き方は異なるため、職場や主治医と相談しながら調整していくことが大切です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">透析には通院以外の方法はありますか？</summary>
          <p class="faq-answer">はい。透析には、医療機関に通って行う血液透析のほかに、自宅で行う腹膜透析や在宅血液透析があります。どちらも生活に合わせやすい面がある一方で、自分や家族で準備や管理を行う場面が増えることがあります。どの方法が合うかは、体の状態や生活スタイルに応じて、主治医と相談しながら考えていきます。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">血液透析は一生続けるのですか？</summary>
          <p class="faq-answer">多くの場合、血液透析は継続して行う治療です。腎臓の働きが大きく低下した状態が続く場合は、透析を続けていくことになります。ただし、腎移植によって透析が不要になる場合もあります。今後の治療方針については、主治医と相談しながら考えていくことが大切です。</p>
        </details>

      </div>
    </section>

    <!-- ══════════════════════════════
         9. もっと詳しく知りたい方へ
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">もっと詳しく知りたい方へ</h2>
      <div class="dialysis-nav-grid">
        <a href="/dialysis" class="dialysis-nav-card">
          <span class="dialysis-nav-label">BASICS</span>
          <h3 class="dialysis-nav-title">透析とは？</h3>
          <p class="dialysis-nav-desc">透析の基本的な説明や、血液透析と腹膜透析の違いについて説明しています。</p>
        </a>
        <a href="/pd" class="dialysis-nav-card">
          <span class="dialysis-nav-label">PD</span>
          <h3 class="dialysis-nav-title">腹膜透析</h3>
          <p class="dialysis-nav-desc">自宅で行う腹膜透析の特徴や、日常生活との両立について説明しています。</p>
        </a>
        <a href="/about" class="dialysis-nav-card">
          <span class="dialysis-nav-label">ABOUT</span>
          <h3 class="dialysis-nav-title">運営者情報</h3>
          <p class="dialysis-nav-desc">このサイトを運営している臨床工学技士の紹介と、サイトの目的について説明しています。</p>
        </a>
      </div>
    </section>

  </div><!-- /.about-page-inner -->

</main>

@include('commons.footer')
