<?php

namespace App\Listeners;

use App\Events\StudentAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentAddedListener
{
    protected $name,$age;
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
     * @param  Event  $event
     * @return void
     */
    public function handle(StudentAdded $event)
    {
        // StudentAdded Listener function here
        $this->name = $event->name;
        $this->age = $event->age;
        echo "<br />New Student Added in database with name: ".$this->name;
    }
}
