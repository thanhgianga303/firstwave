<?php namespace FirstWave\WorkProject\Models;

use Model;

/**
 * Model
 */
class Work extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'firstwave_workproject_works';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Relations
    public $attachOne = [
        'work_cover' => 'System\Models\File' 
    ];

    public $attachMany = [
        'work_gallery' => 'System\Models\File' 
    ];


    public $belongsToMany = [

        'category' => [
            'FirstWave\WorkProject\Models\Category',
            'table' => 'firstwave_workproject_works_to_cat',
            'order' => 'id'
        ]
    ];
}
