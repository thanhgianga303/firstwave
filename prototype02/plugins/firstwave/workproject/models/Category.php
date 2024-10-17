<?php namespace FirstWave\WorkProject\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'firstwave_workproject_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [

        'work' => [
            'FirstWave\WorkProject\Models\Work',
            'table' => 'firstwave_workproject_works_to_cat',
            'order' => 'id'
        ]
    ];
}
