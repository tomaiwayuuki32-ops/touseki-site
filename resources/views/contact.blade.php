@php
  $title = 'お問い合わせ｜透析ナビ';
  $description = '透析ナビへのご意見・ご感想、記事の誤りや不具合のご報告はこちらからお送りください。なお、医療相談には対応しておりません。';
  $breadcrumbs = [['label' => 'トップ', 'url' => '/'], ['label' => 'お問い合わせ']];
@endphp
@include('commons.header')

<main class="page-main">

  <!-- ══════════════════════════════
       PAGE HERO
  ══════════════════════════════ -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <span class="page-hero-label">CONTACT</span>
      <h1 class="page-hero-title">お問い合わせ</h1>
      <p class="page-hero-desc">ご意見・ご感想や記事内容のご指摘などは、このページのフォームからご連絡ください。</p>
    </div>
  </section>

  <div class="breadcrumb-wrap">
    @include('commons.breadcrumb')
  </div>
  <div class="about-page-inner">

    <!-- ══════════════════════════════
         1. 案内文
    ══════════════════════════════ -->
    <section class="about-page-section">
      <div class="about-page-text-block">
        <p>透析ナビへのご連絡は、このページのフォームからお願いいたします。ご意見・ご感想、記事内容のご指摘、不具合のご報告などを受け付けています。</p>
        <p>お寄せいただいた内容は、必要に応じて確認のうえ、今後のサイト運営の参考にさせていただきます。</p>
      </div>

      <!-- 重要なお知らせ -->
      <div class="contact-notice">
        <p class="contact-notice-title">このページは医療相談窓口ではありません</p>
        <p class="contact-notice-body">個別の症状、治療方針、検査結果、薬、透析条件などに関するご相談には回答できません。体調や治療に関するご相談は、主治医または医療機関へご相談ください。緊急の場合は速やかに医療機関を受診してください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         2. 受け付ける内容 / 受け付けない内容
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">お問い合わせ前にご確認ください</h2>
      <div class="contact-scope-grid">

        <div class="contact-scope-card contact-scope-card--accept">
          <p class="contact-scope-label contact-scope-label--accept">受け付けている内容</p>
          <ul class="contact-scope-list">
            <li>サイトへのご意見・ご感想</li>
            <li>記事内容の誤りや修正のご依頼</li>
            <li>リンク切れ・表示の不具合などのご報告</li>
            <li>取材・掲載依頼などのご連絡</li>
          </ul>
        </div>

        <div class="contact-scope-card contact-scope-card--reject">
          <p class="contact-scope-label contact-scope-label--reject">受け付けていない内容</p>
          <ul class="contact-scope-list">
            <li>症状や体調に関するご相談</li>
            <li>治療方針・透析条件についてのご質問</li>
            <li>検査結果・薬・処方に関するご相談</li>
            <li>緊急性のある内容</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- ══════════════════════════════
         3. 返信について
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">返信について</h2>
      <div class="about-page-text-block">
        <p>内容を確認のうえ、必要に応じて返信いたします。内容によっては返信までお時間をいただく場合があります。</p>
        <p>すべてのお問い合わせに返信をお約束するものではありません。あらかじめご了承ください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         4. 個人情報の取り扱い
    ══════════════════════════════ -->
    <section class="about-page-section">
      <h2 class="about-page-heading">個人情報の取り扱いについて</h2>
      <div class="about-page-text-block">
        <p>お問い合わせフォームでいただいた情報（お名前、メールアドレス、お問い合わせ内容）は、お問い合わせ対応の目的でのみ利用します。</p>
        <p>法令に基づく場合を除き、本人の同意なく第三者に提供することはありません。</p>
        <p>詳細については、<a href="/privacy" class="contact-privacy-link">プライバシーポリシー</a>をご確認ください。</p>
      </div>
    </section>

    <!-- ══════════════════════════════
         5. お問い合わせフォーム
    ══════════════════════════════ -->
    <section id="contact-form-section" class="about-page-section about-page-section--last">
      <h2 class="about-page-heading">お問い合わせフォーム</h2>

      @if(session('contact_success'))
        <div class="contact-success">
          <p>お問い合わせを受け付けました。内容を確認のうえ、必要に応じてご連絡いたします。</p>
        </div>
      @endif

      @if(session('contact_error'))
        <div class="contact-error">
          <p>{{ session('contact_error') }}</p>
        </div>
      @endif

      <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
        @csrf

        {{-- Honeypot: ボットが入力するが、通常ユーザーには見えない --}}
        <div class="hp-field" aria-hidden="true">
          <label for="hp_website">ウェブサイト</label>
          <input type="text" id="hp_website" name="hp_website" tabindex="-1" autocomplete="off">
        </div>

        <div class="contact-form-group">
          <label class="contact-form-label" for="name">
            お名前
            <span class="contact-form-optional">任意</span>
          </label>
          <input
            class="contact-form-input @error('name') is-error @enderror"
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            placeholder="例：山田 太郎"
            autocomplete="name"
          >
          @error('name')
            <p class="contact-form-error">{{ $message }}</p>
          @enderror
        </div>

        <div class="contact-form-group">
          <label class="contact-form-label" for="email">
            メールアドレス
            <span class="contact-form-required">必須</span>
          </label>
          <input
            class="contact-form-input @error('email') is-error @enderror"
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="例：example@mail.com"
            autocomplete="email"
          >
          @error('email')
            <p class="contact-form-error">{{ $message }}</p>
          @enderror
        </div>

        <div class="contact-form-group">
          <label class="contact-form-label" for="subject">
            件名
            <span class="contact-form-required">必須</span>
          </label>
          <select
            class="contact-form-select @error('subject') is-error @enderror"
            id="subject"
            name="subject"
          >
            <option value="" disabled {{ old('subject') ? '' : 'selected' }}>選択してください</option>
            <option value="記事内容について" {{ old('subject') === '記事内容について' ? 'selected' : '' }}>記事内容について</option>
            <option value="誤記・修正依頼" {{ old('subject') === '誤記・修正依頼' ? 'selected' : '' }}>誤記・修正依頼</option>
            <option value="サイト不具合" {{ old('subject') === 'サイト不具合' ? 'selected' : '' }}>サイト不具合</option>
            <option value="ご意見・ご感想" {{ old('subject') === 'ご意見・ご感想' ? 'selected' : '' }}>ご意見・ご感想</option>
            <option value="取材・掲載依頼" {{ old('subject') === '取材・掲載依頼' ? 'selected' : '' }}>取材・掲載依頼</option>
            <option value="その他" {{ old('subject') === 'その他' ? 'selected' : '' }}>その他</option>
          </select>
          @error('subject')
            <p class="contact-form-error">{{ $message }}</p>
          @enderror
        </div>

        <div class="contact-form-group">
          <label class="contact-form-label" for="message">
            お問い合わせ内容
            <span class="contact-form-required">必須</span>
          </label>
          <textarea
            class="contact-form-textarea @error('message') is-error @enderror"
            id="message"
            name="message"
            rows="7"
            placeholder="お問い合わせ内容をご記入ください。&#10;&#10;※個別の症状や治療に関するご相談には対応しておりません。"
          >{{ old('message') }}</textarea>
          @error('message')
            <p class="contact-form-error">{{ $message }}</p>
          @enderror
        </div>

        <div class="contact-form-group">
          <label class="contact-form-checkbox">
            <input
              type="checkbox"
              name="privacy"
              value="1"
              {{ old('privacy') ? 'checked' : '' }}
            >
            <span><a href="/privacy" class="contact-privacy-link">プライバシーポリシー</a>に同意する</span>
          </label>
          @error('privacy')
            <p class="contact-form-error">{{ $message }}</p>
          @enderror
        </div>

        <div class="contact-form-submit-wrap">
          <p class="contact-form-submit-note">送信前に、<a href="/privacy" class="contact-privacy-link">プライバシーポリシー</a>をご確認ください。</p>
          <button type="submit" class="contact-form-submit">送信する</button>
        </div>

      </form>
    </section>

  </div><!-- /.about-page-inner -->

</main>

@include('commons.footer')
