<?php

namespace App\Listeners;

use App\Events\ActivationCodeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use queue;
use App\User;
use App\ActivationCode;
use Illuminate\Support\Facades\Mail;
use App\Events\ActivationEmailEvent;
use App\Mail\ActivationEmail;
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
        Mail::to($event->user)->send(new ActivationEmail($event->user->ActivationCode) );
    }
}
