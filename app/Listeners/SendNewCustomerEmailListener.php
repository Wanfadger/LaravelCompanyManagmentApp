<?php

namespace App\Listeners;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewCustomerEmailListener
{
  

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //sends new email, when a new customer is registered
       Mail::to($event->customer->email)->send(new ContactFormMail($event->customer));
    }
}
