<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ContactSubmission $submission) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[Lead] ' . $this->submission->name . ' - ' . $this->submission->project_type,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-admin',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
