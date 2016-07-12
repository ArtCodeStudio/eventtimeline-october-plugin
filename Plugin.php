<?php namespace JumpLink\EventTimeline;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'JumpLink\EventTimeline\Components\EventTimeline' => 'eventtimeline',
            'JumpLink\EventTimeline\Components\EventOverview' => 'eventoverview'
        ];
    }

    public function registerPageSnippets()
    {
	    return [
	       '\JumpLink\EventTimeline\Components\EventTimeline' => 'eventtimeline',
	       '\JumpLink\EventTimeline\Components\EventOverview' => 'eventoverview',
	    ];
    }

    public function registerSettings()
    {
    }
}
