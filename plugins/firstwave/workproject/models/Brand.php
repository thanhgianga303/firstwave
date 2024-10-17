<?php namespace FirstWave\WorkProject\Models;

use Model;

/**
 * Model
 */
class Brand extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'firstwave_workproject_brands';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'work' => [
            'FirstWave\WorkProject\Models\Brand',
            'table' => 'firstwave_workproject_works_to_brands',
            'order' => 'id'
        ]
    ];
}
