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
    public $timelinePage;

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
                    'description' => 'Die CMS page oder static page, auf welcher die Timeline angezeigt wird (um Events dort zu verlinken).',
                    'type'  => 'dropdown',
                    'default' => 'veranstaltungen'
            ]
        ];
    }

    public function getTimelinePageOptions()
    {
        return array_merge(Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName'),StaticPage::sortBy('baseFileName')->lists('baseFileName', 'baseFileName'));
    }

    public function onRun()
    {

        $this->timelinePage = Config::get('JumpLink.EventTimeline::timelinePage', 'timeline');
        $this->events = EventModel::where('date_start', '>=', date('Y-m-d H:i:s'))
            ->orderBy('date_start', 'asc')
            ->get();
    }
}
