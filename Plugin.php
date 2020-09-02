<?php namespace JumpLink\EventTimeline;

use System\Classes\PluginBase;

use System\Classes\SettingsManager;

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
	    return [
	        'settings' => [
	            'label'       => 'EventTimeline-Einstellungen',
	            'description' => 'Konfiguriere die Einstellungen der Event-Timeline.',
	            'category'    => SettingsManager::CATEGORY_CMS,
	            'icon'        => 'icon-cog',
	            'class'       => 'JumpLink\EventTimeline\Models\Settings',
	            'order'       => 500,
	            'keywords'    => 'event timeline settings'
	        ]
	    ];
	}
}
