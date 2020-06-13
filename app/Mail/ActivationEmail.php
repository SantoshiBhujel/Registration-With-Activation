<?php

namespace App\Mail;

use App\ActivationCode;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $code;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ActivationCode $code)
    {
        $this->code= $code;
        $this->url=route('user.activation', $this->code);
        // print_r($this->url);
        // dd();

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user_activation');
    }
}
