<?php

namespace App\Events;

use Illuminate\Http\Request;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class SubscribedSuccess extends Event
{
    use SerializesModels;

    public $request;

    /**
     * Create a new event instance.
     *
     * @param  Users  $user
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}