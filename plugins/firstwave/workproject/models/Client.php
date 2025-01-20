<?php namespace FirstWave\WorkProject\Models;

use Model;

/**
 * Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'client';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'work' => [
            'FirstWave\WorkProject\Models\Client',
            'table' => 'works_to_client',
            'order' => 'id'
        ]
    ];
}
