<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LogoutMail extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public function __construct($username)
    {
        $this->username = $username;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'تم تسجيل خروجك',
        );
    }

   
    public function content(): Content
    {
        return new Content(
            view: 'Mails.Auth.Logout',
        );
    }

   
    public function attachments(): array
    {
        return [];
    }
}
