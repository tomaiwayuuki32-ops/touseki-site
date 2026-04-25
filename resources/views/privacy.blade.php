@php
  $title = 'プライバシーポリシー｜透析ナビ';
  $description = '透析ナビにおける個人情報の取り扱い、アクセス解析、Cookie等の利用方針について掲載しています。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => 'プライバシーポリシー']];
@endphp
@include('commons.header')

<main class="privacy-page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">PRIVACY POLICY</span>
      <h1 class="page-hero-title">プライバシーポリシー</h1>
      <p class="page-hero-desc">透析ナビにおける個人情報・アクセス情報の取り扱い方針です。</p>
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
         1. 基本方針
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">基本方針</h2>
      <div class="about-page-text-block">
        <p>透析ナビ（以下「当サイト」）は、利用者の個人情報を適切に取り扱うことを重要な責務と考えています。本ポリシーでは、当サイトが取得する情報の種類、利用目的、管理方針について説明します。</p>
        <p>当サイトは、透析に関する一般的な情報を提供することを目的としています。医療相談や診断・治療の代替を目的とするものではなく、取得する情報もサイトの運営・改善の範囲にとどめます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. 取得する情報
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">取得する情報</h2>
      <div class="about-page-text-block">
        <p>当サイトでは、以下の情報を取得することがあります。</p>
      </div>
      <div class="privacy-item-list">
        <div class="privacy-item">
          <p class="privacy-item-title">お問い合わせフォームから取得する情報</p>
          <p class="privacy-item-body">お名前（任意）、メールアドレス、件名、お問い合わせ内容</p>
        </div>
        <div class="privacy-item">
          <p class="privacy-item-title">アクセスログ・技術情報</p>
          <p class="privacy-item-body">IPアドレス、ブラウザの種類、閲覧したページのURL、アクセス日時など。これらはサーバーログやアクセス解析ツールにより自動的に収集されることがあります。</p>
        </div>
        <div class="privacy-item">
          <p class="privacy-item-title">Cookie等の情報</p>
          <p class="privacy-item-body">Cookie（クッキー）やセッション情報。サイトの動作（フォームのCSRF対策など）のために使用するほか、アクセス解析や広告配信のために利用される場合があります。</p>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════
         3. 情報の利用目的
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">情報の利用目的</h2>
      <div class="about-page-text-block">
        <p>取得した情報は、以下の目的のために利用します。</p>
      </div>
      <ul class="privacy-list">
        <li>お問い合わせへの対応および返信</li>
        <li>サイトの品質向上・改善</li>
        <li>サイトの利用状況の把握・分析</li>
        <li>スパムや不正アクセスの防止</li>
        <li>利用規約・ポリシーの変更等のご案内（必要な場合）</li>
      </ul>
      <div class="about-page-text-block">
        <p>上記以外の目的で利用する場合は、あらかじめ利用者にお知らせし、同意を得たうえで行います。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. お問い合わせフォームで取得する情報の取り扱い
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">お問い合わせフォームで取得する情報の取り扱い</h2>
      <div class="about-page-text-block">
        <p>お問い合わせフォームでいただいた情報（お名前、メールアドレス、お問い合わせ内容）は、お問い合わせへの対応を目的としてのみ利用します。</p>
        <p>対応が完了した後は、不要になった情報を適切な方法で削除します。</p>
        <p>なお、医療に関するご相談・治療に関するご質問は受け付けておらず、そのような内容が含まれていた場合もお答えすることはできません。体調に関するご相談は、担当の医師や医療機関へご相談ください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         5. 個人情報の第三者提供について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">個人情報の第三者提供について</h2>
      <div class="about-page-text-block">
        <p>当サイトは、以下の場合を除き、取得した個人情報を本人の同意なく第三者に提供しません。</p>
      </div>
      <ul class="privacy-list">
        <li>法令に基づき開示が求められる場合</li>
        <li>利用者の生命・身体・財産の保護のために必要であり、本人の同意を得ることが困難な場合</li>
        <li>国の機関または地方公共団体の法令に定める事務への協力が必要な場合</li>
      </ul>
    </section>

    <!-- ══════════════════════════════
         6. アクセス解析ツールについて
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">アクセス解析ツールについて</h2>
      <div class="about-page-text-block">
        <p>現時点では、アクセス解析ツールは導入していません。今後、サイトの改善や利用状況の把握を目的として導入する場合があります。その際は、本ポリシーを更新してお知らせします。</p>
        <p>導入した場合、アクセス解析ツールはCookieを使用してサイトの利用状況を収集することがあります。収集されるデータは匿名であり、個人を特定するものではありません。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         7. 広告配信について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">広告配信について</h2>
      <div class="about-page-text-block">
        <p>現時点では、広告配信サービスは導入していません。今後導入する場合は、本ポリシーを更新してお知らせします。</p>
        <p>導入した場合、広告配信サービスは利用者の閲覧情報などをもとに広告を表示することがあり、そのためにCookieを使用する場合があります。Cookieによる情報収集は、ブラウザの設定から無効にすることができます。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         8. Cookie等の利用について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">Cookie等の利用について</h2>
      <div class="about-page-text-block">
        <p>Cookieとは、ウェブサイトがブラウザに保存する小さなデータのことです。当サイトでは、以下の目的でCookieを使用することがあります。</p>
      </div>
      <ul class="privacy-list">
        <li>フォーム送信時のセキュリティ確保（CSRF対策）</li>
        <li>サイトの利用状況の把握（アクセス解析）</li>
        <li>広告配信（広告サービスを導入した場合）</li>
      </ul>
      <div class="about-page-text-block">
        <p>Cookieの使用を希望されない場合は、ブラウザの設定により無効にすることができます。ただし、Cookieを無効にした場合、一部の機能が正常に動作しないことがあります。</p>
        <p>なお、当サイトではGoogle Fontsを使用しています。フォントの読み込み時にGoogleのサーバーへリクエストが送信されるため、IPアドレスなどの情報がGoogleに送信されることがあります。詳細は<a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer" class="privacy-external-link">Googleのプライバシーポリシー</a>をご確認ください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         9. 外部リンクについて
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">外部リンクについて</h2>
      <div class="about-page-text-block">
        <p>当サイトには外部サイトへのリンクが含まれることがあります。リンク先のサイトにおける個人情報の取り扱いについては、当サイトは関与しません。リンク先のプライバシーポリシーをご確認ください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         10. 個人情報の管理について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">個人情報の管理について</h2>
      <div class="about-page-text-block">
        <p>当サイトは、取得した個人情報の漏えい、滅失、毀損を防ぐため、適切な安全管理措置を講じます。</p>
        <p>個人情報へのアクセスは、必要な範囲の運営者に限定し、不要となった情報は適切な方法で削除します。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         11. 開示・訂正・削除等について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">開示・訂正・削除等について</h2>
      <div class="about-page-text-block">
        <p>ご自身の個人情報の開示・訂正・削除等をご希望の場合は、<a href="/contact" class="privacy-internal-link">お問い合わせフォーム</a>よりご連絡ください。本人確認のうえ、法令の範囲内で対応いたします。</p>
        <p>なお、対応までお時間をいただく場合があります。あらかじめご了承ください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         12. プライバシーポリシーの変更について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">プライバシーポリシーの変更について</h2>
      <div class="about-page-text-block">
        <p>本ポリシーは、法令の改正、サービスの変更、外部サービスの仕様変更などに応じて、予告なく内容を変更する場合があります。</p>
        <p>変更後のポリシーは、本ページに掲載した時点で効力が生じます。定期的にご確認いただくことをお勧めします。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         13. お問い合わせ先
    ══════════════════════════════ -->
    <section class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">お問い合わせ先</h2>
      <div class="about-page-text-block">
        <p>本ポリシーに関するご質問・ご意見、個人情報の開示・訂正・削除等のご要望は、以下よりご連絡ください。</p>
      </div>
      <div class="dialysis-lead-box">
        <p class="dialysis-lead-box-text">
          サイト名：透析ナビ<br>
          運営者情報：<a href="/about" class="privacy-lead-link">運営者情報ページ</a>をご覧ください<br>
          お問い合わせ：<a href="/contact" class="privacy-lead-link">お問い合わせフォーム</a>
        </p>
      </div>
    </section>

  </div><!-- /.about-page-inner -->

</main>

@include('commons.footer')
