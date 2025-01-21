<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbFirstwaveWorkprojectWorksToClient extends Migration
{
    public function up()
    {
        Schema::create('works_to_client', function($table) {
            $table->engine = 'InnoDB';
            $table->integer('work_id');
            $table->integer('client_id');
            $table->primary(['work_id','client_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('works_to_client');
    }
}