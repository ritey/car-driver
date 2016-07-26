<?php

namespace App\Listeners;

use App\Events\SubscribedSuccess;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class EmailNewSubscriber
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  ContactSent  $event
     * @return void
     */
    public function handle(SubscribedSuccess $event)
    {
        $data = $event->data;

        Mail::send(['html' => 'emails.new_subscriber_html','text' => 'emails.new_subscriber'], ['data' => $data], function($message) use ($data)
        {
            $message->to($data['email'], $data['email'])->subject('Thanks for subscribing to Car Driver notifications');
        });

    }
}