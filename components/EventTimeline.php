<?php

namespace JumpLink\EventTimeline\Components;

use Lang;

use Cms\Classes\ComponentBase;

use JumpLink\EventTimeline\Models\Event as EventModel;

class EventTimeline extends ComponentBase
{
    public $events;

    public function componentDetails()
    {
        return [
            'name'        => 'Event Timeline',
            'description' => 'eine Timeline für Veranstaltungen'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun()
    {
        $this->events = EventModel::where('date_end', '>=', date('Y-m-d H:i:s'))
    ->orderBy('date_start', 'asc')
    ->get();
    }
}
