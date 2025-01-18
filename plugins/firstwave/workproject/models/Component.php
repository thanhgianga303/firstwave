<?php

namespace FirstWave\WorkProject\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * Model
 */
class Component extends Model {
    use \October\Rain\Database\Traits\Validation;

    use Sortable;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'component';
    /**
     * @var array Validation rules
     */
    public $rules = [];

    public static function getComponentTypeOptions() {
        return ComponentType::orderBy('sort_order')->pluck('name', 'id')->toArray();
    }
}
