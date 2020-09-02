<?php namespace JumpLink\EventTimeline\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJumplinkEventtimelineEvents extends Migration
{
    public function up()
    {
        Schema::create('jumplink_eventtimeline_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->smallInteger('type')->nullable()->unsigned()->default(0);
            $table->string('title');
            $table->text('subtext');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->string('person1');
            $table->string('person2')->nullable();
            $table->string('person3')->nullable();
            $table->string('person4')->nullable();
            $table->string('person5')->nullable();
            $table->string('person6')->nullable();
            $table->decimal('cost_fee', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jumplink_eventtimeline_events');
    }
}
