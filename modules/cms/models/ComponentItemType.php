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
class ComponentItemType extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'component_item_type';

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
        'component_type_id',
        'partial',
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
}
