<?php

namespace Backend\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;
use Cms\Classes\Page as ClassesPage;
use Cms\Classes\Theme;
use Cms\Models\Page;
use Illuminate\Support\Facades\Response;

/**
 * Backend Media Manager
 *
 * @package october\backend
 * @author Alexey Bobkov, Samuel Georges
 */
class Settings extends Controller {
    /**
     * @var array Behaviors implemented by this controller.
     */
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController'
    ];

    /**
     * @var string The controller's list configuration file.
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var string The controller's form configuration file.
     */
    public $formConfig = 'config_form.yaml';
    /**
     * @var array Permissions required to view this page.
     */
    public $requiredPermissions = [];
    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        BackendMenu::setContext('October.Backend', 'website', true);
        $this->pageTitle = 'Website Settings';
        BackendMenu::setContextMainMenu('website');
    }

    public function index() {
        $this->bodyClass = 'compact-container';
        $theme = Theme::getEditTheme();
        $listPage = ClassesPage::listInTheme($theme, true);
        $hierarchy = [];
        foreach ($listPage as $key => $page) {
            $parts = explode('/', $key);
            $folder = count($parts) > 1 ? $parts[0] : 'root';

            if (!isset($hierarchy[$folder])) {
                $hierarchy[$folder] = [];
            }

            $hierarchy[$folder][] = $page;
        }
        $this->vars['hierarchy'] = $hierarchy;
    }

    /**
     * AJAX Handler to load page details and associated components.
     *
     * @return mixed JSON response
     */
    public function onLoadPages() {
        // Retrieve data sent via AJAX
        $pageIdentifier = post('page'); // Expecting the page ID

        if (!$pageIdentifier) {
            return Response::json([
                'status'  => 'error',
                'message' => 'No page identifier provided.'
            ], 400);
        }

        // Fetch the Page along with its Components
        $page = Page::with('components')->where('part', $pageIdentifier)->first();
        if (!$page) {
            return Response::json([
                'status'  => 'error',
                'message' => 'Page not found.'
            ], 404);
        }

        // Prepare the data to send back
        $data = [
            'status'     => 'success',
            'page'       => [
                'id'          => $page->id,
                'name'        => $page->name,
                'description' => $page->description,
            ],
            'components' => $page->components->map(function ($component) {
                return [
                    'id'             => $component->id,
                    'name'           => $component->name,
                    'component_type' => $component->component_type,
                    'description'    => $component->description,
                    'order'          => $component->order,
                    'sort_order'     => $component->sort_order,
                    'deleted'        => $component->deleted,
                    'created_at'     => $component->created_at,
                    'updated_at'     => $component->updated_at,
                ];
            }),
        ];

        return Response::json($data);
    }
}
