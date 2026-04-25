<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly string $senderName,
        public readonly string $senderEmail,
        public readonly string $contactSubject,
        public readonly string $body,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '【透析ナビ】お問い合わせ：' . $this->contactSubject,
            replyTo: [
                new \Illuminate\Mail\Mailables\Address($this->senderEmail, $this->senderName ?: null),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_received',
        );
    }
}
