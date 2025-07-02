<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConatctUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The name of the person sending the message.
     *
     * @var string
     */
    public $name;

    /**
     * The country of the person.
     *
     * @var string
     */
    public $country;

    /**
     * The check-in date.
     *
     * @var string
     */
    public $check_in_date;

    /**
     * The check-out date.
     *
     * @var string
     */
    public $check_out_date;

    /**
     * The message content.
     *
     * @var string
     */
    public $messageBody; // Renamed from 'message' to avoid conflict with a reserved property name

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $country
     * @param string $check_in_date
     * @param string $check_out_date
     * @param string $message
     * @return void
     */
    public function __construct($name, $country, $check_in_date, $check_out_date, $message)
    {
        $this->name = $name;
        $this->country = $country;
        $this->check_in_date = $check_in_date;
        $this->check_out_date = $check_out_date;
        $this->messageBody = $message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'New Contact Us Inquiry',
            bcc: ['rahul@tekgeeks.net']
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        // This defines the view that will be used for the email's body.
        // The public properties of this class will automatically be available in the view.
        return new Content(
            view: 'frontend.email.contact-us',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
