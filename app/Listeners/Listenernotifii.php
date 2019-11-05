<?php

namespace App\Listeners;

use App\Events\Eventnotfii;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Admin;
use App\User;
use App\Report;


class Listenernotifii
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
     * @param  Eventnotfii  $event
     * @return void
     */
    public function handle(Eventnotfii $event)
    {
        $action = $event->data['action'];//single value
        $actionBy = $event->data['actionBy'];//single value
        $actionContent = $event->data['actionContent'];//single value
        $reportStatus = $event->data['reportStatus'];//single value

        Report::Create([
            'action'=>$action,
            'actionBy'=>$actionBy,
            'actionContent'=>$actionContent,
            'reportStatus'=>$reportStatus,
        ]);

    }
}
