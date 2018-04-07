<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $content;
    public $mail;
    public $name;
    public function __construct($content,$name,$mail)
    {
        $this->content = $content;
        $this->mail = $mail;
        $this->name = $name;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('home.index.mail.templateMail')
            ->from('ejemplo@gmail.com')
            ->subject('Mensaje desde web gomez-site');
    }
}
