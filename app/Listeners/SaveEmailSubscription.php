<?php

namespace App\Listeners;

use App\Events\Subscribed;
use App\Events\SubscribedSuccess;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mailgun;

class SaveEmailSubscription
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
    public function handle(Subscribed $event)
    {
        $data = $event->data;

        $result = '';

        try {
            $result = Mailgun::lists()->member("general@cardriver.io", strtolower($data['email']));
        } catch (\Exception $e) {

        }

        if (!is_object($result)) {
            $result = Mailgun::lists()->addMember("general@cardriver.io", [
                'address' => strtolower($data['email']),
                'subscribed' => true,
            ]);

            if (is_object($result)) {

                event(new SubscribedSuccess($data));

            }
        }

    }
}