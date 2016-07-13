<?php

namespace JumpLink\EventTimeline\Components;

use Lang;

use Config;

use Cms\Classes\ComponentBase;

use Cms\Classes\Page as Page;

use RainLab\Pages\Classes\Page as StaticPage;

use JumpLink\EventTimeline\Models\Event as EventModel;

class EventOverview extends ComponentBase
{
    public $events;
    public $timelinePage; // Variable für TimelinePage Backend Setting

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
                'timelinePage' => [
                    'title' => 'Timeline Page',
                    'description' => 'Die CMS Page oder Static Page, auf welcher die Timeline angezeigt wird (um Events dort zu verlinken).',
                    'type'  => 'dropdown',
                    'default' => 'veranstaltungen'
            ]
        ];
    }

    public function getTimelinePageOptions()
    {
        // TODO: diese Eigenschaft besser als Backend Setting, und für Static und CMS Pages 
        return StaticPage::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        // FIXME: soll Backend Setting laden, aber bekommt nur ein leeres Array zurück
        $this->timelinePage = Config::get('JumpLink.EventTimeline::timelinePage');
        $this->events = EventModel::where('date_start', '>=', date('Y-m-d H:i:s'))
            ->orderBy('date_start', 'asc')
            ->get();
    }
}
