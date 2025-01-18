<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DBAddMoreFieldsDefault extends Migration
{
    public function up() {
        Schema::table('component_item_type', function ($table) {
            $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
            $table->timestamps();
        });
        Schema::table('component_item', function ($table) {
            $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
            $table->timestamps();
        });
        Schema::table('component_type', function ($table) {
            $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
            $table->timestamps();
        });
        Schema::table('component', function ($table) {
            $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
            $table->timestamps();
        });
        Schema::table('item', function ($table) {
            $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
            $table->timestamps();
        });
        Schema::table('page', function ($table) {
            $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
            $table->timestamps();
        });
        Schema::table('item_type', function ($table) {
            $table->integer('sort_order')->default(0); // Cột để lưu thứ tự
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('component_item_type', function ($table) {
            $table->dropColumn(['sort_order', 'updated_at', 'created_at']); // Thay bằng tên các cột bạn muốn xóa
        });
        Schema::table('component_item', function ($table) {
            $table->dropColumn(['sort_order', 'updated_at', 'created_at']); // Thay bằng tên các cột bạn muốn xóa
        });
        Schema::table('component_type', function ($table) {
            $table->dropColumn(['sort_order', 'updated_at', 'created_at']); // Thay bằng tên các cột bạn muốn xóa
        });
        Schema::table('component', function ($table) {
            $table->dropColumn(['sort_order', 'updated_at', 'created_at']); // Thay bằng tên các cột bạn muốn xóa
        });
        Schema::table('item', function ($table) {
            $table->dropColumn(['sort_order', 'updated_at', 'created_at']); // Thay bằng tên các cột bạn muốn xóa
        });
        Schema::table('page', function ($table) {
            $table->dropColumn(['sort_order', 'updated_at', 'created_at']); // Thay bằng tên các cột bạn muốn xóa
        });
        Schema::table('item_type', function ($table) {
            $table->dropColumn(['sort_order', 'updated_at', 'created_at']); // Thay bằng tên các cột bạn muốn xóa
        });
    }
}
