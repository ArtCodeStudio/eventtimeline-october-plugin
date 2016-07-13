<?php namespace JumpLink\EventTimeline\Models;

use Model;

use Cms\Classes\Page as Page;

use RainLab\Pages\Classes\Page as StaticPage;

class Settings extends Model{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'jumplink_eventtimeline_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    protected $cache = [];

    public function getTimelinePageOptions()
    {
    	return  StaticPage::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

} 