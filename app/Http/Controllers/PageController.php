<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class PageController extends Controller
{
    //トップページ
    public function index(){
        return view('index');
    }

    //運営者情報
    public function about(){
        return view('about');
    }

    //透析とは
    public function dialysis(){
        return view('dialysis');
    }

    //血液透析
    public function hd(){
        return view('hd');
    }

    //プライバシーポリシー
    public function privacy(){
        return view('privacy');
    }

    //免責事項
    public function disclaimer(){
        return view('disclaimer');
    }

    //腹膜透析
    public function pd(){
        return view('pd');
    }

    //サイトマップ
    public function sitemap(){
        return view('sitemap');
    }

    //お問い合わせ
    public function contact(){
        return view('contact');
    }

    public function contactStore(Request $request){

        // ── 1. Honeypot チェック ───────────────────────────────
        // ボットはこのフィールドに値を入れる。通常ユーザーには見えないため空のはず。
        if ($request->filled('hp_website')) {
            // ボットと判断。正常完了に見せかけてリダイレクト（エラーを返さない）
            return redirect()->route('contact')->with('contact_success', true);
        }

        // ── 2. Rate Limiting（同一IPから 5分間に3回まで）────────────
        $rateLimitKey = 'contact:' . $request->ip();
        if (RateLimiter::tooManyAttempts($rateLimitKey, 3)) {
            $seconds = RateLimiter::availableIn($rateLimitKey);
            $minutes = (int) ceil($seconds / 60);
            return back()
                ->withInput()
                ->with('contact_error', "送信できる回数の上限に達しました。{$minutes}分ほど時間をおいてから再度お試しください。");
        }
        RateLimiter::hit($rateLimitKey, 300); // 300秒（5分）のウィンドウ

        // ── 3. バリデーション ──────────────────────────────────
        $request->validate([
            'email'   => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string|max:3000',
            'privacy' => 'accepted',
        ], [
            'email.required'   => 'メールアドレスを入力してください。',
            'email.email'      => '正しいメールアドレスの形式で入力してください。',
            'subject.required' => '件名を選択してください。',
            'message.required' => 'お問い合わせ内容を入力してください。',
            'message.max'      => 'お問い合わせ内容は3000文字以内で入力してください。',
            'privacy.accepted' => 'プライバシーポリシーへの同意が必要です。',
        ]);

        // ── 4. メール送信 ──────────────────────────────────────
        // ここに reCAPTCHA / Turnstile のトークン検証を追加する場合は、
        // バリデーションの後、Mail 送信の前に挿入してください。
        try {
            Mail::to(config('mail.admin_email'))
                ->send(new ContactReceived(
                    senderName:     $request->input('name', ''),
                    senderEmail:    $request->input('email'),
                    contactSubject: $request->input('subject'),
                    body:           $request->input('message'),
                ));
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('contact_error', '送信中にエラーが発生しました。しばらく時間をおいて再度お試しください。');
        }

        return redirect(route('contact') . '#contact-form-section')->with('contact_success', true);
    }
}
