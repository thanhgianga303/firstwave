<?php

namespace FirstWave\WorkProject\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * Model
 */
class ComponentItem extends Model {
    use \October\Rain\Database\Traits\Validation;

    use Sortable;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'component_item';
    /**
     * @var array Validation rules
     */
    public $rules = [];
}
