<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbComponentType extends Migration
{
    protected $table = 'component_type';
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('partial')->nullable();
            $table->integer('deleted')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
