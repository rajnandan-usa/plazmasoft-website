<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactFormMailToUser extends Mailable
{
    use Queueable, SerializesModels;

    public $contactDetails;
    /**
     * Create a new message instance.
     */
    public function __construct($contactDetails)
    {
        $this->contactDetails = $contactDetails;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config("app.mailFrom", "info@plazmasoft.com"), config("app.name")),
            cc: [config('app.admin_email')],
            replyTo: [
                new Address(config("app.company_email", "no-reply@plazmasoft.com"), config("app.name")),
            ],
            subject: $this->contactDetails->subject ?? 'New contact form submission',  // Default subject if missing
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.user.contact-email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
