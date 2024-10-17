<?php namespace FirstWave\WorkProject\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFirstwaveWorkprojectWorksToCat extends Migration
{
    public function up()
    {
        Schema::table('firstwave_workproject_works_to_cat', function($table)
        {
            $table->dropPrimary(['work_id','cat_id']);
            $table->renameColumn('cat_id', 'category_id');
            $table->primary(['work_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::table('firstwave_workproject_works_to_cat', function($table)
        {
            $table->dropPrimary(['work_id','category_id']);
            $table->renameColumn('category_id', 'cat_id');
            $table->primary(['work_id','cat_id']);
        });
    }
}
