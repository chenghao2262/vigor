<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $data;
    private $channel;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($chatRecord)
    {
        $this->data = $chatRecord;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['test-channel'];
    }
}
