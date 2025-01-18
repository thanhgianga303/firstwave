<?php namespace FirstWave\WorkProject\Models;

use Model;

/**
 * Model
 */
class ProjectDeliverables extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'project_deliverables';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'work' => [
            'FirstWave\WorkProject\Models\Work',
            'table' => 'firstwave_workproject_works_to_proj_deli',
            'order' => 'id'
        ]
    ];
}
