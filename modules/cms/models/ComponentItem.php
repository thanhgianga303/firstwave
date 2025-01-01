<?php

namespace Cms\Models;

use Lang;
use Model;
use Cms\Classes\Theme as CmsTheme;
use System\Classes\CombineAssets;
use Exception;
use System\Models\File;

/**
 * Customization data used by a theme
 *
 * @package october\cms
 * @author Alexey Bobkov, Samuel Georges
 */
class ComponentItem extends Model {
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'component_item';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'id',
        'component_id',
        'name',
        'component_item_type',
        'image',
        'delay',
        'fade',
        'description',
        'order',
        'deleted'
    ];
    const FADE_IN_LEFT  = 'fadeInLeft';
    const FADE_IN_RIGHT = 'fadeInRight';
    const FADE_IN_UP    = 'fadeInUp';
    const FADE_IN_DOWN  = 'fadeInDown';
    const FADE_TYPE = [
        "1" => self::FADE_IN_LEFT,
        "2" => self::FADE_IN_RIGHT,
        "3" => self::FADE_IN_UP,
        "4" => self::FADE_IN_DOWN
    ];

    /**
     * @var array List of attribute names which are json encoded and decoded from the database.
     */
    protected $jsonable = ['data'];

    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    /**
     * @var ThemeData Cached array of objects
     */
    protected static $instances = [];

    public function r_component_item_type() {
        return $this->belongsTo(ComponentItemType::class, 'component_item_type');
    }

    public function r_component() {
        return $this->belongsTo(Component::class, 'component_id');
    }

    public function getComponentItemTypeOptions() {
        $component_id = $this->original['component_id'];
        // Ensure the model's component_id is set
        if (!$component_id) {
            return []; // No component_id, no options
        }

        // Call the static method with the current component_id
        return ComponentItemType::where('component_type_id', $component_id)->lists('name', 'id');
    }
}
