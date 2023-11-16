<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class FormSubmitMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public  $contact, $formName;
    public function __construct($contact, $formName)
    {
        $this->contact = $contact;
        $this->formName = $formName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->formName . ' Form Mail',
        );
    }



    public function build()
    {

        return $this->view('mail.contact-mail')
            ->with([
                'contact' => $this->contact,
                'formName' => $this->formName,
            ]);
    }
}
