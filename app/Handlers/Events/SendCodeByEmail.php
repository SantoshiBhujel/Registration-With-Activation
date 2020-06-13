<?php

namespace App\Handlers\Events;

use App\Mail\ActivationEmail;
use App\Events\ActivationCodeEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCodeByEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ActivationCodeEvent  $event
     * @return void
     */
    public function handle(ActivationCodeEvent $event)
    {
        Mail::to($event->user)->queue(new ActivationEmail($event->user->ActivationCode) );
    }
}
