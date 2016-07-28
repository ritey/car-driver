<?php

namespace App\Events;

use Illuminate\Http\Request;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use CoderStudios\Requests\FeedbackRequest;

class FeedbackSent extends Event
{
    use SerializesModels;

    public $request;

    /**
     * Create a new event instance.
     *
     * @param  Users  $user
     * @return void
     */
    public function __construct(FeedbackRequest $request)
    {
        $this->request = $request;
    }
}