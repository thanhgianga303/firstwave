<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbPageAddPath extends Migration
{
    protected $table = 'page';
    public function up() {
        Schema::table($this->table, function ($table) {
            $table->string('path')->alter('name');
        });
    }

    public function down()
    {
        Schema::table($this->table, function ($table) {
            $table->dropColumn(['path']); // Thay bằng tên các cột bạn muốn xóa
        });
    }
}
