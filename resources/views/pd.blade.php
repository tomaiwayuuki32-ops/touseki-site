@php
  $title = '腹膜透析とは？CAPD・APDの違いや血液透析との違いをわかりやすく解説｜透析ナビ';
  $description = '腹膜透析の仕組みや特徴、CAPD・APDの違い、血液透析との違いを、患者さんやご家族向けにわかりやすく解説します。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => '腹膜透析']];
@endphp
@include('commons.header')

<main class="pd-page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">PERITONEAL DIALYSIS</span>
      <h1 class="page-hero-title">腹膜透析</h1>
      <p class="page-hero-desc">自宅を中心に行う腹膜透析について、基本からやさしく説明します。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>
  <div class="about-page-inner">

    <!-- ══════════════════════════════
         1. 腹膜透析とは
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">腹膜透析とは</h2>
      <div class="about-page-text-block">
        <p>腹膜透析は、お腹の中にある「腹膜」という薄い膜を利用して、血液をきれいにする治療です。</p>
        <p>血液透析のように機械で血液を体の外に取り出すのではなく、お腹の中に透析液を入れて、腹膜を通じて老廃物や余分な水分を取り除きます。</p>
      </div>
      <div class="dialysis-lead-box">
        <p class="dialysis-lead-box-text">腹膜透析は、主に自宅で行える透析の方法です。<br>通院の負担が少なく、日常生活のリズムに合わせやすい面があります。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. 腹膜透析の仕組み
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">腹膜透析の仕組み</h2>
      <div class="about-page-text-block">
        <p>腹膜透析では、事前にお腹にカテーテル（細い管）を手術で設置します。このカテーテルを通じて透析液を入れたり、使用済みの液を出したりすることで、老廃物や余分な水分を体の外に取り出します。</p>
      </div>
      <div class="dialysis-flow">
        <div class="dialysis-flow-step">
          <span class="dialysis-flow-num">1</span>
          <p class="dialysis-flow-text">カテーテルから透析液をお腹の中に入れる</p>
        </div>
        <span class="dialysis-flow-arrow" aria-hidden="true">→</span>
        <div class="dialysis-flow-step">
          <span class="dialysis-flow-num">2</span>
          <p class="dialysis-flow-text">腹膜を通じて老廃物・余分な水分が透析液に移る</p>
        </div>
        <span class="dialysis-flow-arrow" aria-hidden="true">→</span>
        <div class="dialysis-flow-step">
          <span class="dialysis-flow-num">3</span>
          <p class="dialysis-flow-text">使用済みの透析液をお腹の外に出す</p>
        </div>
      </div>
      <div class="hd-stat-note">
        <p>この「入れる・置いておく・出す」という一連の操作を「交換」と呼びます。CAPDでは1日数回、APDでは就寝中に機械が自動で行います。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. 腹膜透析の主な方法（CAPD / APD）
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">腹膜透析の主な方法</h2>
      <div class="about-page-text-block">
        <p>腹膜透析には、主に2つの方法があります。どちらも基本的な仕組みは同じですが、透析液の交換をいつ・どのように行うかに違いがあります。</p>
      </div>
      <div class="pd-method-grid">

        <div class="pd-method-card">
          <span class="pd-method-badge">CAPD</span>
          <h3 class="pd-method-title">持続携行式腹膜透析（CAPD）</h3>
          <p class="pd-method-desc">機械を使わず、手動で透析液を交換する方法です。1日3〜5回程度、決まった時間に自分または家族が行います。特別な機械が不要で旅行先でも行いやすい面がある一方、日中に交換の時間を確保する必要があります。</p>
        </div>

        <div class="pd-method-card">
          <span class="pd-method-badge">APD</span>
          <h3 class="pd-method-title">自動腹膜透析（APD）</h3>
          <p class="pd-method-desc">専用の機械（サイクラー）を使い、就寝中に自動で透析液の交換を行う方法です。昼間の活動時間を確保しやすく、仕事や学校と両立しやすい面があります。機械の準備や設置が必要になります。</p>
          <p class="pd-method-note">※機械の設置スペースや電源の確保が必要です</p>
        </div>

      </div>
      <div class="hd-stat-note">
        <p>CAPDとAPDはそれぞれ特徴が異なり、生活スタイルや体の状態によって選ばれる方法も変わります。どちらが合うかは主治医と相談しながら決めていきます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. 腹膜透析の主な特徴
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">腹膜透析の主な特徴</h2>
      <div class="hd-feature-grid">
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">自宅を中心に行える</h3>
          <p class="hd-feature-desc">多くの場合、月に数回程度の通院で続けられます。その他の日は自宅で治療を行うため、仕事や学校、家庭生活と両立しやすく、生活リズムを大きく変えずに続けられる場合があります。</p>
        </div>
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">毎回の針刺しがない</h3>
          <p class="hd-feature-desc">腹膜透析では、あらかじめ設置したカテーテルを使うため、血液透析のように治療のたびに針を刺す必要がありません。穿刺への不安が少ない方法のひとつです。</p>
        </div>
        <div class="hd-feature-card">
          <h3 class="hd-feature-title">残腎機能を保ちやすい場合がある</h3>
          <p class="hd-feature-desc">腹膜透析は血液透析に比べて、残っている腎臓の機能（残腎機能）を長く保ちやすい場合があるとされています。残腎機能があることで、老廃物や水分の管理がしやすくなることがあります。</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         5. 腹膜透析で注意したいこと
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">腹膜透析で注意したいこと</h2>
      <div class="about-page-text-block">
        <p>腹膜透析は自宅で行う治療のため、いくつかの点に日頃から注意することが大切です。</p>
      </div>
      <div class="dialysis-life-grid">
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">腹膜炎の予防</h4>
          <p class="dialysis-life-desc">透析液の交換時に細菌が入ると、お腹の中に感染（腹膜炎）が起こることがあります。清潔な操作を守ることがとても大切です。透析液が濁っている、お腹の痛みや発熱がある場合は、すぐに医療機関に連絡しましょう。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">カテーテルの管理</h4>
          <p class="dialysis-life-desc">お腹に設置したカテーテルの出口部分（出口部）は、毎日清潔に保つことが必要です。感染予防のために、出口部のケアを継続することが大切です。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">腹膜の使用期間</h4>
          <p class="dialysis-life-desc">腹膜は長期間使い続けると、透析の効果が落ちてくることがあります。腹膜の状態は定期的に確認していき、状況によっては血液透析への変更を相談することもあります。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">自己管理と家族の協力</h4>
          <p class="dialysis-life-desc">腹膜透析では、透析液の在庫管理や交換操作など、自分や家族で管理する場面が多くあります。医療スタッフからのサポートを受けながら、継続できる管理方法を整えていくことが大切です。</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         6. どんな人に選ばれることがあるか
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">どんな人に選ばれることがあるか</h2>
      <div class="about-page-text-block">
        <p>腹膜透析は、次のような方に選ばれることがあります。ただし、体の状態や生活環境によって適性は異なるため、最終的には主治医と相談しながら判断していきます。</p>
      </div>
      <div class="pd-who-grid">
        <div class="pd-who-item">
          <span class="pd-who-icon" aria-hidden="true">✓</span>
          <p class="pd-who-text">仕事や学校など、日中の活動時間をできるだけ確保したい方</p>
        </div>
        <div class="pd-who-item">
          <span class="pd-who-icon" aria-hidden="true">✓</span>
          <p class="pd-who-text">週3回の通院が難しいライフスタイルの方</p>
        </div>
        <div class="pd-who-item">
          <span class="pd-who-icon" aria-hidden="true">✓</span>
          <p class="pd-who-text">透析を始めた比較的早い段階で、残腎機能が残っている方</p>
        </div>
        <div class="pd-who-item">
          <span class="pd-who-icon" aria-hidden="true">✓</span>
          <p class="pd-who-text">自宅での自己管理に取り組める環境がある方</p>
        </div>
        <div class="pd-who-item">
          <span class="pd-who-icon" aria-hidden="true">✓</span>
          <p class="pd-who-text">血液透析に使えるシャントが作りにくい方</p>
        </div>
        <div class="pd-who-item">
          <span class="pd-who-icon" aria-hidden="true">✓</span>
          <p class="pd-who-text">心臓への負担をできるだけ少なく保ちたい方（体の状態による）</p>
        </div>
      </div>
      <div class="hd-stat-note">
        <p>腹部の手術歴や腹膜の状態によって、腹膜透析が難しい場合もあります。腹膜透析と血液透析のどちらが合うかは、主治医とよく相談して決めることが大切です。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         7. 血液透析との主な違い（比較表）
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">血液透析との主な違い</h2>
      <div class="about-page-text-block">
        <p>腹膜透析と血液透析は、どちらも腎臓の働きを補う治療ですが、治療の場所や頻度、管理の方法などに違いがあります。</p>
      </div>
      <div class="pd-compare-wrap">
        <table class="pd-compare-table">
          <thead>
            <tr>
              <th class="pd-compare-th pd-compare-th--item">項目</th>
              <th class="pd-compare-th pd-compare-th--pd">腹膜透析（PD）</th>
              <th class="pd-compare-th pd-compare-th--hd">血液透析（HD）</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pd-compare-td pd-compare-td--item">治療の場所</td>
              <td class="pd-compare-td">主に自宅</td>
              <td class="pd-compare-td">医療機関</td>
            </tr>
            <tr>
              <td class="pd-compare-td pd-compare-td--item">通院頻度</td>
              <td class="pd-compare-td">月に数回程度（目安）</td>
              <td class="pd-compare-td">週3回程度</td>
            </tr>
            <tr>
              <td class="pd-compare-td pd-compare-td--item">1回の治療時間</td>
              <td class="pd-compare-td">交換15〜30分×数回<br>（APDは就寝中）</td>
              <td class="pd-compare-td">4時間前後</td>
            </tr>
            <tr>
              <td class="pd-compare-td pd-compare-td--item">針の穿刺</td>
              <td class="pd-compare-td">毎回の穿刺なし</td>
              <td class="pd-compare-td">毎回2本の針を刺す</td>
            </tr>
            <tr>
              <td class="pd-compare-td pd-compare-td--item">自己管理</td>
              <td class="pd-compare-td">自分（または家族）で交換・管理</td>
              <td class="pd-compare-td">医療スタッフが管理</td>
            </tr>
            <tr>
              <td class="pd-compare-td pd-compare-td--item">感染リスク</td>
              <td class="pd-compare-td">腹膜炎に注意が必要</td>
              <td class="pd-compare-td">シャントや穿刺部の管理が必要</td>
            </tr>
            <tr>
              <td class="pd-compare-td pd-compare-td--item">継続期間</td>
              <td class="pd-compare-td">腹膜の状態による<br>（個人差が大きい）</td>
              <td class="pd-compare-td">長期継続が可能</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="hd-stat-note">
        <p>上記はあくまで一般的な目安です。体の状態や病院の方針によって異なる部分もあります。どちらが合うかは、主治医と相談しながら決めましょう。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         8. 迷ったときに大切なこと
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">迷ったときに大切なこと</h2>
      <div class="about-page-text-block">
        <p>血液透析か腹膜透析かを選ぶことは、大きな決断です。どちらが正しい・間違いというものではなく、それぞれの生活スタイルや体の状態に合った方法があります。</p>
      </div>
      <div class="dialysis-lead-box">
        <p class="dialysis-lead-box-text">「自分の生活に合う方法はどちらか」「どんなことを大切にしたいか」を、<br>医療スタッフと一緒に考えていきましょう。焦って決める必要はありません。</p>
      </div>
      <div class="dialysis-life-grid pd-decision-grid">
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">主治医にしっかり相談する</h4>
          <p class="dialysis-life-desc">それぞれの治療法のメリットや注意点、自分の体の状態に合うかどうかを、主治医に詳しく聞くことが一番大切です。疑問や不安はできるだけ言葉にして伝えましょう。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">生活スタイルから考える</h4>
          <p class="dialysis-life-desc">仕事のこと、通院にかかる時間と負担、自宅での管理ができる環境かどうか。自分の日常生活をイメージしながら、どちらが続けやすいか考えてみましょう。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">家族や身近な人と話す</h4>
          <p class="dialysis-life-desc">腹膜透析では、家族の協力が助けになることがあります。一人で抱え込まず、一緒に考えられる環境を整えておくことが長続きのコツです。</p>
        </div>
        <div class="dialysis-life-item">
          <h4 class="dialysis-life-title">変更は相談しながらできる</h4>
          <p class="dialysis-life-desc">腹膜透析から血液透析へ、あるいは逆の変更も、体の状態や生活の変化に応じて相談できます。最初の選択が「絶対」ではないことを知っておくと、少し気が楽になるかもしれません。</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         9. よくある不安・疑問
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">よくある不安・疑問</h2>
      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question">腹膜透析は自分一人でできますか？</summary>
          <p class="faq-answer">多くの方が一人で行っています。透析開始前に医療機関で操作のトレーニングを受け、手順を習得してから自宅で始めます。最初は不安に感じることもありますが、手順を身につけると続けられるようになる方がほとんどです。不安なことは、いつでも医療スタッフに相談しましょう。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">腹膜炎はどれくらいの頻度で起きますか？</summary>
          <p class="faq-answer">清潔な操作を守ることで、腹膜炎のリスクを下げることができます。万が一腹膜炎になった場合でも、早めに医療機関に連絡して対応すれば、多くの場合は治療できます。透析液が濁っている、お腹の痛みや発熱がある場合は、すぐに主治医に連絡することが大切です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">腹膜透析をしながら旅行はできますか？</summary>
          <p class="faq-answer">できます。CAPDであれば、旅行先に透析液を事前に送っておくことで、国内はもちろん海外旅行をしている方もいます。旅行の計画は早めに主治医や担当スタッフに相談することをおすすめします。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">腹膜透析はいつまで続けられますか？</summary>
          <p class="faq-answer">腹膜の状態は個人によって異なるため、一概には言えませんが、長く続けられる方もいます。腹膜の機能が低下してきた場合には、血液透析への変更を相談することになります。定期的な検査で腹膜の状態を確認しながら、治療を続けていきます。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">腹膜透析から血液透析に変えることはできますか？</summary>
          <p class="faq-answer">はい、体の状態や生活の変化によって、腹膜透析から血液透析へ変更することは可能です。逆に、血液透析から腹膜透析への変更も、条件が整えば相談できます。治療法の変更は医師の判断のもとで進めるため、気になることがあれば早めに相談しましょう。</p>
        </details>

      </div>
    </section>

    <!-- ══════════════════════════════
         10. もっと詳しく知りたい方へ
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">もっと詳しく知りたい方へ</h2>
      <div class="dialysis-nav-grid">
        <a href="/dialysis" class="dialysis-nav-card">
          <span class="dialysis-nav-label">BASICS</span>
          <h3 class="dialysis-nav-title">透析とは？</h3>
          <p class="dialysis-nav-desc">透析の基本的な説明や、血液透析と腹膜透析の違いについて説明しています。</p>
        </a>
        <a href="/hd" class="dialysis-nav-card">
          <span class="dialysis-nav-label">HD</span>
          <h3 class="dialysis-nav-title">血液透析</h3>
          <p class="dialysis-nav-desc">医療機関で行う血液透析の仕組みや通院スケジュール、日常生活との両立について説明しています。</p>
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
