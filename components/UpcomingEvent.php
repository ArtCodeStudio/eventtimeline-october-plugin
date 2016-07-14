<?php

namespace JumpLink\EventTimeline\Components;

use Lang;

use Cms\Classes\ComponentBase;

use JumpLink\EventTimeline\Models\Event as EventModel;

class UpcomingEvent extends ComponentBase
{
    public $upcoming;
//    public $current;

    public function componentDetails()
    {
        return [
            'name'        => 'Upcoming Event',
            'description' => 'eine Anzeige für die nächste anstehende Veranstaltung'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun()
    {
        $this->upcoming = EventModel::where('date_start', '>=', date('Y-m-d H:i:s'))
            ->orderBy('date_start', 'asc')
            ->take(1)
            ->get();
    /*    $this->current = EventModel::where('date_end', '>=', date('Y-m-d H:i:s'))
            ->orderBy('date_start', 'asc')
            ->take(1)
            ->get();*/
    }
}
