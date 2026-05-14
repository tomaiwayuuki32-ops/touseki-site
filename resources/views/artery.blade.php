@php
  $title = '動脈表在化とは｜透析アクセスの仕組み・止血・日常ケア';
  $description = '動脈表在化は、透析に必要な血液の出入り口を腕の動脈で確保する方法です。内シャントとの違い、穿刺後の止血ポイント、日常生活での注意点をわかりやすく説明します。';
  $breadcrumbs = [
    ['label' => 'トップ',   'url' => '/'],
    ['label' => '血液透析', 'url' => '/hd'],
    ['label' => '動脈表在化'],
  ];
@endphp
@include('commons.header')

<main class="page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">VASCULAR ACCESS</span>
      <h1 class="page-hero-title">動脈表在化</h1>
      <p class="page-hero-desc">動脈表在化は、透析で使用する動脈を皮膚の近くへ移動させる治療です。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>

  <div class="artery-content">

    <!-- ══════════════════════════════
         1. 動脈表在化とは
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">動脈表在化とは</h2>
      <div class="about-page-text-block">
        <p>動脈表在化（どうみゃくひょうざいか）とは、腕の動脈を手術で皮膚のすぐ下に移動させて、透析のたびに針を刺しやすくする方法です。</p>
        <p>通常、動脈は皮膚の奥に位置しているため、そのままでは穿刺が難しい場合があります。動脈を皮膚近くに移すことで、毎回の透析で安定して針を刺せるようにします。</p>
        <p>内シャントのように動脈と静脈をつなぎ合わせるのではなく、皮膚の近くに移動した動脈を、主に血液を取り出す側として直接穿刺します。そのため、内シャントで感じられるスリル（振動）やシャント音はありません。</p>
        <p>なお、表在化した動脈は主に血液を取り出す側として使われます。血液を体へ戻すためには、別の静脈を使うことがあります。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. どのような場合に選ばれることがあるか
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">どのような場合に選ばれることがあるか</h2>
      <div class="about-page-text-block">
        <p>動脈表在化は、すべての方に使われる方法ではなく、次のような状況で選択肢のひとつとして検討されることがあります。</p>
      </div>
      <div class="artery-notice-box">
        <p class="artery-notice-heading">選ばれることが多い状況</p>
        <ul class="artery-notice-list">
          <li>内シャントや人工血管が作れない、または繰り返し閉塞してしまった場合</li>
          <li>静脈が細い・硬いなど、シャント作成に使える血管が少ない場合</li>
          <li>心臓への負担を考慮して、シャントの代替手段が必要な場合</li>
          <li>長期のカテーテル使用を避けたい、または別の透析アクセスを検討する必要がある場合</li>
          <li>カテーテルでの透析を長く続けることが難しく、別の血液の取り出し口を検討する必要がある場合</li>
        </ul>
        <p class="artery-notice-note">動脈表在化は、緊急時にすぐ使うための方法ではなく、血管の状態や全身状態を確認したうえで計画的に検討される方法です。どの方法が適しているかは主治医と相談しながら決めていきます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. 内シャントとの主な違い
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">内シャントとの主な違い</h2>
      <div class="about-page-text-block">
        <p>もっとも広く使われている内シャントと比べると、動脈表在化にはいくつか異なる点があります。透析施設で確認しながら、自分のアクセスの特徴を理解しておきましょう。</p>
      </div>
      <div class="artery-compare-grid">
        <div class="artery-compare-card artery-compare-card--highlight">
          <p class="artery-compare-label">動脈表在化</p>
          <ul class="artery-compare-list">
            <li>動脈を皮膚近くに移して直接穿刺する</li>
            <li>スリル（振動）・シャント音はない</li>
            <li>動脈のため、止血にやや時間がかかる</li>
            <li>シャント作成が難しい場合などに選択されることがあります</li>
            <li>手先の血流変化に注意が必要な場合がある</li>
          </ul>
        </div>
        <div class="artery-compare-card">
          <p class="artery-compare-label">内シャント（参考）</p>
          <ul class="artery-compare-list">
            <li>動脈と静脈をつなぎ、静脈に血流を増やして穿刺しやすくする</li>
            <li>スリル・シャント音で状態を確認できる</li>
            <li>止血は比較的短時間で済むことが多い</li>
            <li>もっとも一般的に選ばれるアクセス方法</li>
            <li>血管の状態によっては作れないこともある</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. 穿刺後の止血について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">穿刺後の止血について</h2>
      <div class="about-page-text-block">
        <p>動脈表在化では、透析のたびに皮膚近くに移動した動脈へ穿刺します。動脈は静脈より血圧が高く、止血が不十分だと出血が続くことがあるため、透析後の止血は特に大切です。</p>
      </div>
      <div class="artery-point-box">
        <p class="artery-point-heading">止血方法は施設によって異なります</p>
        <p class="artery-point-text">透析終了後の止血処置は医療スタッフが行います。自己判断で圧迫を外したり、穿刺部位を触れたりせず、スタッフの指示に従いましょう。帰宅後も出血・血腫（血のかたまり）のサインに気をつけてください。</p>
      </div>
      <ul class="shunt-checklist">
        <li>透析後は、スタッフが止血を確認するまで安静にする</li>
        <li>帰宅後も、指示された時間は圧迫を維持する</li>
        <li>穿刺部位を強く押したり、もんだりしない</li>
        <li>帰宅後に腫れが強くなる場合があります。その際は施設へ連絡する</li>
        <li>止血後も強い痛みや出血が続く場合は、すぐに施設へ連絡する</li>
        <li>自己判断で圧迫を弱めたり、早く外したりしないようにしましょう。</li>
        <li>入浴・シャワーのタイミングは施設の指示に従う</li>
      </ul>
    </section>

    <!-- ══════════════════════════════
         5. 日常生活での注意点
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">日常生活での注意点</h2>
      <div class="about-page-text-block">
        <p>動脈表在化を使用している場合も、日常的な観察とケアが大切です。特に穿刺部位の保護と、手先への血流の変化に気をつけましょう。</p>
      </div>
      <ul class="shunt-checklist">
        <li>穿刺部位とその周辺を清潔に保つ</li>
        <li>腕を強く圧迫しない（時計・ゴムバンド・袖の締め付けなどにも注意）</li>
        <li>血圧測定や採血は反対側の腕で受ける</li>
        <li>手先・指の色・温度・感覚の変化を毎日確認する</li>
        <li>重いものを持つなど、腕に強い負担をかける動作に注意する</li>
        <li>傷や虫刺されができたら早めにスタッフへ伝える</li>
      </ul>
    </section>

    <!-- ══════════════════════════════
         6. 注意したいサイン
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">注意したいサイン</h2>
      <div class="about-page-text-block">
        <p>次のようなサインに気づいたら、自己判断せず、早めに透析施設または主治医に相談しましょう。</p>
      </div>
      <div class="shunt-signs-grid">

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">1</span>
            <div>
              <span class="shunt-sign-label">出血・血腫</span>
              <h4 class="shunt-sign-title">穿刺部位からの出血</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">帰宅後も出血が続く、または大きな血のかたまり（血腫）ができている場合は、すぐに施設へ連絡しましょう。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">2</span>
            <div>
              <span class="shunt-sign-label">発赤・腫脹・熱感</span>
              <h4 class="shunt-sign-title">赤み・腫れ・熱感</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">穿刺部位周辺の皮膚が赤くなる・腫れる・局所的に熱を持つ状態は、感染のサインかもしれません。早めにスタッフへ伝えましょう。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">3</span>
            <div>
              <span class="shunt-sign-label">虚血症状</span>
              <h4 class="shunt-sign-title">手先・指の変化</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">手先や指が青白くなる・冷たくなる・しびれる・痛むなどは、動脈への血流に問題が生じているサインの可能性があります。早めに相談しましょう。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">4</span>
            <div>
              <span class="shunt-sign-label">疼痛</span>
              <h4 class="shunt-sign-title">腕・穿刺部位の痛み</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">透析とは無関係な状態での腕の痛みや、穿刺部位を触れたときの強い圧痛がある場合は、早めにスタッフへ伝えましょう。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">5</span>
            <div>
              <span class="shunt-sign-label">排膿</span>
              <h4 class="shunt-sign-title">膿・じゅくじゅくした液</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">穿刺部位から膿のような液が出る、いつもと違う汚れがガーゼにつく場合は感染が疑われます。早めに透析施設へ伝えましょう。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">6</span>
            <div>
              <span class="shunt-sign-label">拍動の変化</span>
              <h4 class="shunt-sign-title">脈の変化・消失</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">普段感じている脈（拍動）が弱くなった・感じにくくなった場合は、動脈の状態変化のサインかもしれません。早めにスタッフへ伝えましょう。</p>
        </div>

      </div>
    </section>

    <!-- ══════════════════════════════
         7. 早めに相談した方がいいケース
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">早めに相談した方がいいケース</h2>
      <div class="about-page-text-block">
        <p>次のような変化がある場合は、次の透析日まで待たずに透析施設や主治医へ相談しましょう。</p>
      </div>
      <ul class="shunt-consult-list">
        <li>帰宅後も出血が続いている・血腫が大きくなっている</li>
        <li>穿刺部位の赤み・腫れ・熱感が続く、または広がる</li>
        <li>膿のような液が出る</li>
        <li>手先や指が青白い・冷たい・しびれる・痛む</li>
        <li>腕に強い痛みや違和感がある</li>
        <li>脈の感じ方がいつもと違う</li>
        <li>発熱や寒気・いつもより強いだるさや体調不良がある</li>
      </ul>
    </section>

    <!-- ══════════════════════════════
         8. よくある不安・疑問
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">よくある不安・疑問</h2>
      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question">動脈表在化とシャントは何が違うのですか？</summary>
          <p class="faq-answer">内シャントは動脈と静脈をつなぎ合わせて、血流量の多い血管を作る方法です。動脈表在化は動脈と静脈をつなぐのではなく、動脈そのものを皮膚の近くに移して直接穿刺できるようにします。そのため、シャントで感じられるスリル（振動）やシャント音は、動脈表在化にはありません。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">止血に時間がかかると聞きました。どのくらいかかりますか？</summary>
          <p class="faq-answer">動脈は静脈より血圧が高いため、内シャントに比べて止血に時間がかかることがあります。具体的な時間には個人差がありますが、医療スタッフが状態を確認しながら圧迫止血を行いますので、スタッフの指示に従って安静にしていただくことが大切です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">手がしびれたり冷たくなったりすることはありますか？</summary>
          <p class="faq-answer">動脈を直接使う方法のため、まれに手先の血流に影響が出ることがあります。手先や指の青白さ・冷感・しびれ・痛みなどが現れた場合は、早めに透析施設や主治医へ相談してください。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">動脈表在化にしてから日常生活で特に気をつけることはありますか？</summary>
          <p class="faq-answer">穿刺部位周辺を清潔に保つこと、腕を強く圧迫しないこと、手先の色・温度・感覚の変化に気を配ることが大切です。血圧測定や採血は必ず反対側の腕で受けてください。気になる変化は遠慮せずスタッフへ相談することをおすすめします。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">シャントができないと言われましたが、動脈表在化なら透析を続けられますか？</summary>
          <p class="faq-answer">動脈表在化は、内シャントや人工血管が作れない場合の選択肢のひとつとなることがあります。ただし、すべての方に適用できるわけではなく、血管の状態や全身の状態によって異なります。主治医とよく相談して、自分に合った方法を選ぶことが大切です。</p>
        </details>

      </div>
    </section>

    <!-- ══════════════════════════════
         9. 関連ページ
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">関連ページ</h2>
      <div class="dialysis-nav-grid">
        <a href="/hd" class="dialysis-nav-card">
          <span class="dialysis-nav-label">HD</span>
          <h3 class="dialysis-nav-title">血液透析</h3>
          <p class="dialysis-nav-desc">血液透析の仕組みや通院スケジュール、バスキュラーアクセスについて説明しています。</p>
        </a>
        <a href="/hd/shunt" class="dialysis-nav-card">
          <span class="dialysis-nav-label">SHUNT</span>
          <h3 class="dialysis-nav-title">シャント感染と予防</h3>
          <p class="dialysis-nav-desc">シャント感染の症状・注意したいサインと、日常でできる予防ポイントを説明しています。</p>
        </a>
        <a href="/dialysis" class="dialysis-nav-card">
          <span class="dialysis-nav-label">BASICS</span>
          <h3 class="dialysis-nav-title">透析とは？</h3>
          <p class="dialysis-nav-desc">透析の基本的な仕組みや種類についてやさしく説明しています。</p>
        </a>
      </div>
    </section>

  </div><!-- /.artery-content -->

</main>

@include('commons.footer')
