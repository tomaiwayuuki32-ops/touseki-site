<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ通知</title>
  <style>
    body {
      font-family: 'Helvetica Neue', Arial, 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', Meiryo, sans-serif;
      background: #f4f7fa;
      margin: 0;
      padding: 24px 16px;
      color: #1c2b3a;
    }
    .wrapper {
      max-width: 560px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #d0e0ec;
    }
    .header {
      background: #1a6ea8;
      padding: 20px 28px;
    }
    .header-title {
      color: #ffffff;
      font-size: 15px;
      font-weight: bold;
      margin: 0;
    }
    .header-sub {
      color: rgba(255,255,255,0.75);
      font-size: 12px;
      margin: 4px 0 0;
    }
    .body {
      padding: 28px;
    }
    .field {
      margin-bottom: 20px;
    }
    .field-label {
      font-size: 11px;
      font-weight: bold;
      color: #1a6ea8;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      margin-bottom: 4px;
    }
    .field-value {
      font-size: 14px;
      color: #1c2b3a;
      line-height: 1.6;
      background: #f4f7fa;
      border-radius: 4px;
      padding: 10px 14px;
      white-space: pre-wrap;
      word-break: break-word;
    }
    .divider {
      border: none;
      border-top: 1px solid #e0ecf4;
      margin: 24px 0;
    }
    .footer {
      background: #f4f7fa;
      padding: 16px 28px;
      font-size: 11px;
      color: #7a8fa0;
      border-top: 1px solid #d0e0ec;
      line-height: 1.7;
    }
  </style>
</head>
<body>
  <div class="wrapper">

    <div class="header">
      <p class="header-title">透析ナビ　お問い合わせ通知</p>
      <p class="header-sub">フォームから新しいお問い合わせが届きました</p>
    </div>

    <div class="body">

      <div class="field">
        <p class="field-label">件名</p>
        <p class="field-value">{{ $contactSubject }}</p>
      </div>

      <div class="field">
        <p class="field-label">お名前</p>
        <p class="field-value">{{ $senderName ?: '（未入力）' }}</p>
      </div>

      <div class="field">
        <p class="field-label">メールアドレス</p>
        <p class="field-value">{{ $senderEmail }}</p>
      </div>

      <hr class="divider">

      <div class="field">
        <p class="field-label">お問い合わせ内容</p>
        <p class="field-value">{{ $body }}</p>
      </div>

    </div>

    <div class="footer">
      <p>このメールは透析ナビのお問い合わせフォームから自動送信されました。</p>
      <p>返信する場合は、このメールに直接返信するか、上記のメールアドレス宛にご連絡ください。</p>
    </div>

  </div>
</body>
</html>
