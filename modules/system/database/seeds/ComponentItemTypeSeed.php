<?php namespace System\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentItemTypeSeed extends Seeder {
    public function run(){
        DB::table('component_item_type')->insert([
            [
                'name' => 'caption',
                'partial' => 'about/component_item/caption',
            ],
            [
                'name' => 'capabilities',
                'partial' => 'about/component_item/capabilities',
            ],
            [
                'name' => 'key_stats_item',
                'partial' => 'key_stats/component_item/item',
            ],
            [
                'name' => 'banner_title',
                'partial' => 'banner/component_item/item1',
            ],
            [
                'name' => 'banner_description',
                'partial' => 'banner/component_item/item2',
            ],
        ]);
    }
}
