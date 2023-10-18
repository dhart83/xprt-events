<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fname;
    public $lname;
    public $phone;
    public $ext;
    public $email;
    public $event;
    public $body;
    public $date;
    public $budget;

    /**
     * Create a new message instance.
     */
    public function __construct($fname, $lname, $phone, $ext, $email, $event, $body, $date, $budget)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->phone = $phone;
        $this->ext = $ext;
        $this->email = $email;
        $this->event = $event;
        $this->body = $body;
        $this->date = $date;
        $this->budget = $budget;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->email)
            ],
            subject: 'New XPRT Events Customer Inquiry',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email.contact',
            with: [
                'url' => env('APP_URL')
            ]
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
