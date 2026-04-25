@php
  $title = '免責事項｜透析ナビ';
  $description = '透析ナビに掲載する情報の利用に関する免責事項です。当サイトは一般的な情報提供を目的としており、医療相談・診断・治療の判断を行うものではありません。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => '免責事項']];
@endphp
@include('commons.header')

<main class="disclaimer-page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">DISCLAIMER</span>
      <h1 class="page-hero-title">免責事項</h1>
      <p class="page-hero-desc">透析ナビに掲載する情報のご利用にあたってのお願いです。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>
  <div class="about-page-inner">

    <!-- 制定日 -->
    <div class="privacy-meta">
      <p>制定日：2026年4月5日</p>
    </div>

    <!-- ══════════════════════════════
         1. 基本的な考え方
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">基本的な考え方</h2>
      <div class="about-page-text-block">
        <p>透析ナビ（以下「当サイト」）は、透析に関する一般的な情報を、患者さんやご家族向けにわかりやすく提供することを目的としています。</p>
        <p>掲載する情報は、できる限り正確で読みやすいものになるよう努めています。しかし、医療に関する情報は個人の状況によって大きく異なります。当サイトの内容は、あくまでも一般的な情報として参考にしてください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. 医療情報の利用について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">医療情報の利用について</h2>
      <div class="about-page-text-block">
        <p>当サイトは、医療相談・診断・治療・処方の判断を行うものではありません。掲載している情報は、特定の症状や治療方針への対応を目的としたものではなく、一般的な情報提供にとどまります。</p>
        <p>当サイトの情報を参考にした判断や行動は、利用者ご自身の責任のもとで行ってください。体調や治療方針についての判断は、必ず主治医または担当の医療スタッフにご相談ください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. 記事内容の正確性・完全性について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">記事内容の正確性・完全性について</h2>
      <div class="about-page-text-block">
        <p>当サイトの情報は、作成時点での知見をもとに執筆しています。しかし、医療・科学の知識は常に更新されており、掲載内容が最新の状況と異なる場合があります。</p>
        <p>当サイトは、掲載情報の正確性・完全性・最新性を保証するものではありません。情報の利用にあたっては、必要に応じて医療機関等への確認をお願いいたします。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. 利用によって生じた損害等について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">利用によって生じた損害等について</h2>
      <div class="about-page-text-block">
        <p>当サイトの情報を利用したことによって生じた損害・損失・トラブル等について、当サイトは責任を負いかねます。</p>
        <p>お問い合わせフォームへの返信は内容を確認のうえ行いますが、その返信内容をもとにした判断や行動について、当サイトは責任を負いかねます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         5. 医療機関への相談について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">医療機関への相談について</h2>
      <div class="about-page-text-block">
        <p>透析の治療内容や体への影響は、個人の病状・体質・生活環境によって異なります。当サイトで紹介している内容が、すべての方に当てはまるわけではありません。</p>
        <p>体調の変化、治療方針への不安、薬や食事の管理など、具体的なご相談は、主治医や透析施設の医療スタッフに直接相談することをおすすめします。</p>
      </div>
      <div class="dialysis-lead-box">
        <p class="dialysis-lead-box-text">当サイトは医療相談窓口ではありません。<br>体調や治療に関するご相談は、主治医または医療機関へお問い合わせください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         6. 外部リンク・外部サイトについて
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">外部リンク・外部サイトについて</h2>
      <div class="about-page-text-block">
        <p>当サイトには、外部サイトへのリンクが含まれることがあります。リンク先の内容・サービス・プライバシーポリシーについては、当サイトは関与しません。</p>
        <p>外部サイトの利用にあたっては、各サイトの利用規約や方針をご確認ください。また、外部サイトの情報が変更・削除された場合でも、当サイトはその対応を保証するものではありません。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         7. 内容の変更・削除について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">内容の変更・削除について</h2>
      <div class="about-page-text-block">
        <p>当サイトの記事・ページ・構成などは、予告なく変更・追加・削除する場合があります。情報の更新を確認できるよう、定期的にサイトをご覧いただくことをおすすめします。</p>
        <p>また、本免責事項の内容も、サイトの運営状況や法令の変更等に応じて改定する場合があります。改定後の内容は、本ページへの掲載をもって効力が生じます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         8. お問い合わせ先への案内
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">お問い合わせ先</h2>
      <div class="about-page-text-block">
        <p>本免責事項に関するご意見・ご質問や、記事内容のご指摘については、<a href="/contact" class="privacy-internal-link">お問い合わせフォーム</a>よりご連絡ください。</p>
        <p>なお、医療に関するご相談には対応しておりません。お問い合わせの内容によっては返信をお送りできない場合があります。あらかじめご了承ください。</p>
      </div>
      <div class="dialysis-nav-grid">
        <a href="/privacy" class="dialysis-nav-card">
          <span class="dialysis-nav-label">PRIVACY</span>
          <h3 class="dialysis-nav-title">プライバシーポリシー</h3>
          <p class="dialysis-nav-desc">個人情報の取り扱いやCookie等の利用方針について掲載しています。</p>
        </a>
        <a href="/about" class="dialysis-nav-card">
          <span class="dialysis-nav-label">ABOUT</span>
          <h3 class="dialysis-nav-title">運営者情報</h3>
          <p class="dialysis-nav-desc">このサイトを運営している内容と、サイトの目的について説明しています。</p>
        </a>
        <a href="/contact" class="dialysis-nav-card">
          <span class="dialysis-nav-label">CONTACT</span>
          <h3 class="dialysis-nav-title">お問い合わせ</h3>
          <p class="dialysis-nav-desc">記事内容のご指摘・ご意見・不具合のご報告などはこちらからご連絡ください。</p>
        </a>
      </div>
    </section>

  </div><!-- /.about-page-inner -->

</main>

@include('commons.footer')
