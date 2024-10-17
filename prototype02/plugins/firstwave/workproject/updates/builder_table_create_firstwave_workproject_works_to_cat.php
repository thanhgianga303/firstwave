<?php namespace FirstWave\WorkProject\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFirstwaveWorkprojectWorksToCat extends Migration
{
    public function up()
    {
        Schema::create('firstwave_workproject_works_to_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('work_id');
            $table->integer('cat_id');
            $table->primary(['work_id','cat_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('firstwave_workproject_works_to_cat');
    }
}
