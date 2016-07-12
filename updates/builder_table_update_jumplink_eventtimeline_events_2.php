<?php namespace JumpLink\EventTimeline\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkEventtimelineEvents2 extends Migration
{
    public function up()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->string('location');
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->dropColumn('location');
        });
    }
}
