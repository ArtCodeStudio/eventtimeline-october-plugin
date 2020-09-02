<?php namespace JumpLink\EventTimeline\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use JumpLink\EventTimeline\Models\Event;

class Events extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('JumpLink.EventTimeline', 'eventTimeline');
    }
	    /** Delete items from the list. Ajax call **/
	public function onDelete() {
	    /** Check if this is even set **/
	    if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
	        /** cycle through each id **/
	        foreach ($checkedIds as $objectId) {
	            /** Check if there's an object actually related to this id
	                * Make sure you replace MODELNAME with your own model you wish to delete from.
	              **/
	            if (!$object = Event::find($objectId))
	                continue; /** Screw this, next! **/
	            /** Valid item, delete it **/
	            $object->delete();
	        }

	    }
	    /** Return the new contents of the list, so the user will feel as if
	      * they actually deleted something
	      **/
	    return $this->listRefresh();
	}
}