<?php namespace JumpLink\EventTimeline\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkEventtimelineEvents5 extends Migration
{
    public function up()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->string('cost_fee', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_eventtimeline_events', function($table)
        {
            $table->decimal('cost_fee', 10, 0)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
