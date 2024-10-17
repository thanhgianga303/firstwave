<?php namespace FirstWave\WorkProject\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFirstwaveWorkprojectWorks extends Migration
{
    public function up()
    {
        Schema::table('firstwave_workproject_works', function($table)
        {
            $table->text('event')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('firstwave_workproject_works', function($table)
        {
            $table->string('event', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
