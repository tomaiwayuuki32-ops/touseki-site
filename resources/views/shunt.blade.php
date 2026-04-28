@php
  $title = 'シャント感染と予防｜赤み・腫れ・痛みなど注意したいサイン';
  $description = '透析に欠かせないシャントの感染について、赤み・腫れ・熱感・痛み・膿など注意したいサインと、日常でできる予防・観察のポイントを患者さん・ご家族向けにわかりやすく説明します。';
  $breadcrumbs = [
    ['label' => 'トップ',   'url' => '/'],
    ['label' => '血液透析', 'url' => '/hd'],
    ['label' => 'シャント感染と予防'],
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
      <h1 class="page-hero-title">シャント感染と予防</h1>
      <p class="page-hero-desc">透析に欠かせないシャントを守るために、感染のサインと日常ケアをやさしく説明します。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>

  <div class="shunt-content">

    <!-- ══════════════════════════════
         1. シャントとは
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">シャントとは</h2>
      <div class="about-page-text-block">
        <p>シャントとは、血液透析を行うために、腕の動脈と静脈をつなぎ合わせて作る血管の通り道です。透析に必要な血液量を確保するための大切なアクセスで、「命綱」と表現されることもあります。</p>
        <p>シャントに感染や閉塞などのトラブルが起こると、透析を予定どおり行えなくなる場合があります。そのため、日ごろからの観察と早めの相談が重要です。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. シャント感染とは
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">シャント感染とは</h2>
      <div class="about-page-text-block">
        <p>シャント感染とは、穿刺部位やシャント周囲に細菌が入り、赤み・腫れ・熱感・痛みなどが出る状態です。</p>
        <p>軽い皮膚の赤みから始まることもありますが、放置すると悪化する場合があります。特に透析患者さんは感染に注意が必要なため、気になる変化があれば自己判断せず、透析施設や主治医に相談しましょう。</p>
        <p>感染は、穿刺部位や小さな傷から細菌が入り込むことで起こる場合があります。透析患者さんは定期的に穿刺を行うため、日ごろの観察とスキンケアが大切です。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. なぜ早めの対応が大切なのか
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">なぜ早めの対応が大切なのか</h2>
      <div class="shunt-caution-box">
        <p class="shunt-caution-heading">感染症は早めの対応が大切です</p>
        <p class="shunt-caution-text">日本透析医学会の統計では、感染症は透析患者さんの主要な死因のひとつとされています。小さな赤みや腫れでも、続く場合や他の症状を伴う場合は、早めに透析施設へ相談することが大切です。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. 注意したいサイン
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">注意したいサイン</h2>
      <div class="about-page-text-block">
        <p>シャント部位に次のようなサインが見られた場合は、感染が疑われます。自己判断せず、早めに透析施設または主治医に相談しましょう。</p>
      </div>
      <div class="shunt-signs-grid">

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">1</span>
            <div>
              <span class="shunt-sign-label">発赤（はっせき）</span>
              <h4 class="shunt-sign-title">赤み</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">穿刺部位やシャント周辺の皮膚が赤くなる状態です。軽い赤みでも、広がる・続く場合は早めにスタッフへ伝えましょう。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">2</span>
            <div>
              <span class="shunt-sign-label">腫脹（しゅちょう）</span>
              <h4 class="shunt-sign-title">腫れ</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">シャント周辺の皮膚が盛り上がる・ふくらむ状態です。いつもと違うふくらみに気づいたら、早めにスタッフへ伝えましょう。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">3</span>
            <div>
              <span class="shunt-sign-label">熱感（ねっかん）</span>
              <h4 class="shunt-sign-title">局所の熱感</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">触ると局所的に熱を持っている状態です。周囲と比べて明らかに温かいと感じる場合は、炎症の可能性があります。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">4</span>
            <div>
              <span class="shunt-sign-label">疼痛（とうつう）</span>
              <h4 class="shunt-sign-title">痛み</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">自然な状態での痛みや、触れたときの圧痛があります。穿刺とは関係なくシャント部位が痛む場合は要注意です。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">5</span>
            <div>
              <span class="shunt-sign-label">機能障害（きのうしょうがい）</span>
              <h4 class="shunt-sign-title">シャント機能の変化</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">スリル（振動）が弱くなった・感じにくい、シャント音がいつもと違う場合は、感染や閉塞のサインかもしれません。</p>
        </div>

        <div class="shunt-sign-item">
          <div class="shunt-sign-header">
            <span class="shunt-sign-num">6</span>
            <div>
              <span class="shunt-sign-label">排膿（はいのう）</span>
              <h4 class="shunt-sign-title">膿・じゅくじゅくした液</h4>
            </div>
          </div>
          <p class="shunt-sign-desc">穿刺部位や傷口から膿のような液が出る、ガーゼにいつもと違う汚れがつく場合は、感染が疑われます。早めに透析施設へ伝えましょう。</p>
        </div>

      </div>
    </section>

    <!-- ══════════════════════════════
         5. 早めに相談した方がいいケース
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">早めに相談した方がいいケース</h2>
      <div class="about-page-text-block">
        <p>次のような変化がある場合は、次の透析日まで待たずに透析施設や主治医へ相談しましょう。</p>
      </div>
      <ul class="shunt-consult-list">
        <li>赤み・腫れ・熱感・痛みが強くなる</li>
        <li>症状が広がっている</li>
        <li>膿のような液が出る</li>
        <li>発熱や寒気がある</li>
        <li>いつもより強いだるさや体調不良がある</li>
        <li>スリルが弱い、またはいつもより感じにくい</li>
        <li>シャント音がいつもと違う</li>
      </ul>
    </section>

    <!-- ══════════════════════════════
         6. 日常でできる予防と注意点
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">日常でできる予防と注意点</h2>
      <div class="about-page-text-block">
        <p>シャント感染の予防には、毎日の観察と皮膚を清潔に保つことが大切です。小さな変化に早く気づくことで、悪化を防ぎやすくなります。</p>
      </div>
      <ul class="shunt-checklist">
        <li>シャント部位を清潔に保つ</li>
        <li>かゆみがあっても強くかかない</li>
        <li>毎日、赤み・腫れ・熱感・痛みを確認する</li>
        <li>透析前は施設の指示に沿ってシャント部位を洗う</li>
        <li>シャント側の腕を強く圧迫しない</li>
        <li>血圧測定や採血は反対側の腕で受ける</li>
        <li>傷や虫刺されができたら早めにスタッフへ伝える</li>
      </ul>
    </section>

    <!-- ══════════════════════════════
         7. よくある不安・疑問
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">よくある不安・疑問</h2>
      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question">シャント部位が少し赤いだけでも相談した方がいいですか？</summary>
          <p class="faq-answer">軽い赤みでも、続く場合や他の症状が重なる場合は早めに相談することをおすすめします。自己判断で様子を見ているうちに悪化するケースもあるため、気になったときに伝える習慣をつけておくと安心です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">シャント感染になるとシャントは使えなくなりますか？</summary>
          <p class="faq-answer">感染の程度によります。軽度であれば治療しながら経過を見ることもありますが、重症化した場合は手術や新しいシャントの作製が必要になることもあります。早期発見・早期対応が大切です。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">シャントは毎日どうやって確認すればいいですか？</summary>
          <p class="faq-answer">毎日1回、目で見て・触れて確認する習慣をつけましょう。確認のポイントは、皮膚の赤みや腫れがないか、スリルが感じられるか、痛みや熱感がないかです。変化に気づいたら早めにスタッフへ伝えましょう。</p>
        </details>

        <details class="faq-item">
          <summary class="faq-question">どの症状があれば早めに相談した方がいいですか？</summary>
          <p class="faq-answer">赤み・腫れ・熱感・痛み・膿のような液・発熱・寒気・いつもと違うだるさがある場合は、早めに透析施設や主治医へ相談しましょう。<br>特に、症状が広がる、強くなる、複数重なる場合は注意が必要です。</p>
        </details>

      </div>
    </section>

    <!-- ══════════════════════════════
         8. 関連ページ
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">関連ページ</h2>
      <div class="dialysis-nav-grid">
        <a href="/hd" class="dialysis-nav-card">
          <span class="dialysis-nav-label">HD</span>
          <h3 class="dialysis-nav-title">血液透析</h3>
          <p class="dialysis-nav-desc">血液透析の仕組みや通院スケジュール、バスキュラーアクセスについて説明しています。</p>
        </a>
        <a href="/dialysis" class="dialysis-nav-card">
          <span class="dialysis-nav-label">BASICS</span>
          <h3 class="dialysis-nav-title">透析とは？</h3>
          <p class="dialysis-nav-desc">透析の基本的な仕組みや種類についてやさしく説明しています。</p>
        </a>
      </div>
    </section>

  </div><!-- /.shunt-content -->

</main>

@include('commons.footer')
