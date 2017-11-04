<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StudentAdded extends Event
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name,$age;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name,$age)
    {
        // initialize student's name and age
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return [];
    }
}
