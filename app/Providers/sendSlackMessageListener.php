<?php

namespace App\Providers;

use App\Events\NewCustomerEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendSlackMessageListener
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
     * @param  NewCustomerEvent  $event
     * @return void
     */
    public function handle(NewCustomerEvent $event)
    {
        //
    }
}
