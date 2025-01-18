<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbItem extends Migration
{
    protected $table = 'item';
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('component_item_id')->nullable();
            $table->integer('item_type')->nullable();
            $table->string('name')->nullable();
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
