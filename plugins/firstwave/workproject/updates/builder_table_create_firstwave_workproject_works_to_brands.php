<?php namespace FirstWave\WorkProject\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFirstwaveWorkprojectWorksToBrands extends Migration
{
    public function up()
    {
        Schema::create('firstwave_workproject_works_to_brands', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('work_id');
            $table->integer('brands_id');
            $table->primary(['work_id','brands_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('firstwave_workproject_works_to_brands');
    }
}
