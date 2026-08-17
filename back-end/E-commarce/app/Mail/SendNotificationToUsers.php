<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNotificationToUsers extends Mailable
{
    use Queueable, SerializesModels;

    public $NotificationMessage;
    public $description;
    public function __construct($NotificationMessage, $description)
    {
        $this->NotificationMessage = $NotificationMessage;
        $this->description = $description;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🔔 أشعار جديد',
        );
    }

    
    public function content(): Content
    {
        return new Content(
            view: 'Mails.Notifications.Notification',
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
