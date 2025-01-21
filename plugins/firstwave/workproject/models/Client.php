<?php namespace FirstWave\WorkProject\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'client';
    // Relations
    public $attachOne = [
        'client_cover' => 'System\Models\File' 
    ];

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
