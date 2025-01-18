<?php namespace FirstWave\WorkProject\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
/**
 * Model
 */
class ComponentItemType extends Model {
    use \October\Rain\Database\Traits\Validation;
    
    use Sortable;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'component_item_type';
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public static function getComponentTypeOptions() {
        return ComponentType::orderBy('sort_order')->pluck('name', 'id')->toArray();
    }
}
