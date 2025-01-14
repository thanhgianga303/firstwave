<?php namespace Cms\Models;

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
class Page extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'page';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'id',
        'name',
        'path',
        'description',
        'order',
        'sort_order',
        'deleted'
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
     * @var array Relations
     */
    public $attachOne = [];

    /**
     * @var ThemeData Cached array of objects
     */
    protected static $instances = [];
    public function components() {
        return $this->hasMany(Component::class, 'page', 'id');
    }
    public static function getComponent($path) {
        $page = self::where('path', $path)->first();
        if (!$page) return [];
        $data = $page->toArray();
        $data['components'] = Component::where('page', $page['id'])->orderBy('sort_order')->with('r_component_type')->get()->toArray();
        foreach ($data['components'] as $key => $component) {
            $component_items = ComponentItem::where('component_id', $component['id'])->with('r_component_item_type')->get()->toArray();
            $data['components'][$key]['component_items'] = $component_items; 
        }
        return $data;
    }
}
