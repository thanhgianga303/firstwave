<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbProjectDeliverables extends Migration
{
    protected $table = 'project_deliverables';
    public function up() {
        if (!Schema::hasTable($this->table)) {
            Schema::create($this->table, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
                $table->integer('deleted')->default(0);
                $table->timestamps();
            });
        }
    }

    public function down() {
        Schema::dropIfExists($this->table);
    }
}