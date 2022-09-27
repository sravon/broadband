<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $userdetails;
    public function __construct($userdetails)
    {
        $this->userdetails = $userdetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $userdetails = $this->userdetails;
        return $this->view('mail.contactmail', compact('userdetails'));
    }
}
