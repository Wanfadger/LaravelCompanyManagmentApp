<?php

namespace App\Listeners;

use App\Events\NewCustomerEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendWelcomeMessageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
       // dd("your welcome sir/madam");
    }

    /**
     * Handle the event.
     *
     * @param  NewCustomerEvent  $event
     * @return void
     */
    public function handle(NewCustomerEvent $event)
    {
        //
    }
}
