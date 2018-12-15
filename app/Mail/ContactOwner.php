<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactOwner extends Mailable
{
    use Queueable, SerializesModels;
    public $name, $email, $phone, $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $comment)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact');
    }
}
