<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class adminMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data = [];


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [] )
    {
        return $this->data = $data ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Admin.mail.adminMail')->with('data' , $this->data);
    }
}
