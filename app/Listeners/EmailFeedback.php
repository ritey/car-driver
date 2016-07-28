<?php

namespace App\Listeners;

use App\Events\FeedbackSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use Log;

class EmailFeedback
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
    public function handle(FeedbackSent $event)
    {
        $data = $event->request->only(['name','email','message']);

        Mail::send(['text' => 'emails.new_feedback'], ['data' => $data], function($message) use ($data)
        {
            $message->to('dave@coderstudios.com', 'dave@coderstudios.com')->subject('New feedback submitted');
        });

    }
}