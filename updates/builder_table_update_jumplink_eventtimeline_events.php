<?php namespace JumpLink\EventTimeline\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkEventtimelineEvents extends Migration
{
    public function up()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->string('subtitle', 255)->nullable();
            $table->text('description')->nullable();
            $table->dropColumn('subtext');
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->dropColumn('subtitle');
            $table->dropColumn('description');
            $table->text('subtext');
        });
    }
}
