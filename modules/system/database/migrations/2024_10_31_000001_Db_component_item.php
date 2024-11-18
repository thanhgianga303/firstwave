<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbComponentItem extends Migration
{
    protected $table = 'component_item';
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('component_id')->nullable();
            $table->string('name')->nullable();
            $table->integer('component_item_type')->nullable();
            $table->string('image')->nullable();
            $table->decimal('delay',10,2)->nullable();
            $table->integer('fade')->nullable();
            $table->text('description')->nullable();
            $table->integer('order')->nullable();
            $table->integer('deleted')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
