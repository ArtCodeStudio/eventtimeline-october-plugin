<?php

namespace JumpLink\EventTimeline\Components;

use Lang;

use Cms\Classes\ComponentBase;

use JumpLink\EventTimeline\Models\Event as EventModel;

class EventOverview extends ComponentBase
{
    public $events;

    public function componentDetails()
    {
        return [
            'name'        => 'Event Overview',
            'description' => 'Übersichtsfenster für Veranstaltungen'
        ];
    }

    public function defineProperties()
    {
        return [

        ];
    }

    public function onRun()
    {
        $this->events = EventModel::all();
    }
}
