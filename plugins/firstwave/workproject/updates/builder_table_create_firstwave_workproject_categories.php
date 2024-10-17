<?php namespace FirstWave\WorkProject\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFirstwaveWorkprojectCategories extends Migration
{
    public function up()
    {
        Schema::create('firstwave_workproject_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('firstwave_workproject_category');
    }
}
