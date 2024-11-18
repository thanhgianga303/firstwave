<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbPage extends Migration
{
    protected $table = 'page';
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
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
