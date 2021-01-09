<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessagedReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $guestmessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $guestmessagein)
    {
        $this->guestmessage = $guestmessagein;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.messagereceived');
    }
}
