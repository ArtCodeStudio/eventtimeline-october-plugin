<?php namespace JumpLink\EventTimeline\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkEventtimelineEvents4 extends Migration
{
    public function up()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->dateTime('date_end')->nullable()->change();
            $table->string('location', 255)->nullable()->change();
            $table->dropColumn('link');
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->dateTime('date_end')->nullable(false)->change();
            $table->string('location', 255)->nullable(false)->change();
            $table->string('link', 255);
        });
    }
}
