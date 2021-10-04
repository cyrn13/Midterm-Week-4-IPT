<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserEntryLogEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_id, $log_entry;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id, $log_entry)
    {
        $this->user_id = $user_id;
        $this->log_entry = $log_entry;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
