<?php

namespace App\Listeners;

use App\Events\Api\Registered;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailVerificationNotification
{
    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $event->user->notify(new EmailVerificationNotification($event->user));
    }
}
