<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $fname;
    public ?string $lname;
    public ?string $phone;
    public string $email;
    public string $event;
    public ?string $body;
    public string $date;
    public ?string $venue;
    public ?string $package;

    /**
     * Create a new message instance.
     */
    public function __construct(
        string $fname,
        ?string $lname,
        ?string $phone,
        string $email,
        string $event,
        ?string $body,
        string $date,
        ?string $venue = null,
        ?string $package = null
    ) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->phone = $phone;
        $this->email = $email;
        $this->event = $event;
        $this->body = $body;
        $this->date = $date;
        $this->venue = $venue;
        $this->package = $package;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(
                config('mail.from.address'),
                config('mail.from.name')
            ),
            to: [
                new Address(
                    config('mail.to.address'),
                    config('mail.to.name')
                ),
            ],
            replyTo: [
                new Address($this->email, "{$this->fname} {$this->lname}")
            ],
            subject: "New Inquiry: {$this->event} — {$this->date} ({$this->fname} {$this->lname})",
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
                'fname'   => $this->fname,
                'lname'   => $this->lname,
                'phone'   => $this->phone,
                'email'   => $this->email,
                'event'   => $this->event,
                'date'    => Carbon::parse($this->date)->format('D, M j, Y'),
                'venue'   => $this->venue,
                'package' => $this->package,
                'messageBody' => $this->body,
                'url' => config('app.url'),
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}