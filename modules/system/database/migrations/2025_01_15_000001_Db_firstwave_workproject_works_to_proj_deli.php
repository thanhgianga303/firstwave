<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbFirstwaveWorkprojectWorksToProjDeli extends Migration
{
    public function up()
    {
        Schema::create('works_to_proj_deli', function($table) {
            $table->engine = 'InnoDB';
            $table->integer('work_id');
            $table->integer('project_deliverables_id');
            $table->primary(['work_id','project_deliverables_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('works_to_proj_deli');
    }
}