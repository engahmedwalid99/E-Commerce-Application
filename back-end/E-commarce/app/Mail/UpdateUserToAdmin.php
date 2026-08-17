<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UpdateUserToAdmin extends Mailable
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
            subject: 'تم ترقيتك الي مدير ألنظام',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'Mails.User.UpdateUserToAdmin',
        );
    }
    public function attachments(): array
    {
        return [];
    }
}
