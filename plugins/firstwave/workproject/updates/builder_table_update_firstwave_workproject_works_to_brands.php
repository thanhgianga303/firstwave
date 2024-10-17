<?php namespace FirstWave\WorkProject\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFirstwaveWorkprojectWorksToBrands extends Migration
{
    public function up()
    
    {
    
        Schema::table('firstwave_workproject_works_to_brands', function($table)
        {
            $table->dropPrimary(['work_id','brands_id']);
            $table->renameColumn('brands_id', 'brand_id');
            $table->primary(['work_id','brand_id']);
        });
    
    }
    
    
    
    public function down()
    
    {
    
        Schema::table('firstwave_workproject_works_to_brands', function($table)
        {
            $table->dropPrimary(['work_id','brand_id']);
            $table->renameColumn('brand_id', 'brands_id');
            $table->primary(['work_id','brands_id']);
        });
    
    }
}
