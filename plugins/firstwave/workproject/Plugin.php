<?php namespace FirstWave\WorkProject;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerListColumnTypes()
    {
        return [
            // Convert special offer values to text
            'data_status' => function($value){
                $map = [
                    0 => 'Unpublished',       
                    1 => 'Published', 
                ];
                return $map[$value];
            },
            'row_number' => function () {
                static $counter = 1;
                return $counter++;
            }
        ];
    }
}
