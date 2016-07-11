<?php namespace JumpLink\EventTimeline\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => ['System\Models\File'],
        'attachment' => ['System\Models\File']
    ];


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jumplink_eventtimeline_events';
}