<?php namespace System\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentTypeSeed extends Seeder {
    public function run(){
        DB::table('component_type')->insert([
            [
                'name' => 'Banner',
                'partial' => 'banner/component',
            ],
            [
                'name' => 'About',
                'partial' => 'about/component',
            ],
            [
                'name' => 'Key Stats',
                'partial' => 'key_stats/component',
            ],
            [
                'name' => 'Clients',
                'partial' => 'clients/component',
            ],
            [
                'name' => 'Contact',
                'partial' => 'contact/component',
            ],
            [
                'name' => 'Client Testimonials',
                'partial' => 'client_testimonials/component',
            ],
        ]);
    }
}
