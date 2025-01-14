<?php

namespace Firstwave\Workproject\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;
use Cms\Classes\Page as ClassesPage;
use Cms\Classes\Theme;
use Cms\Models\Page;
use FirstWave\WorkProject\Models\Component;
use Illuminate\Support\Facades\Response;
use October\Rain\Support\Facades\Url;

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
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'
    ];


    /**
     * @var string The controller's list configuration file.
     */
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    /**
     * @var string The controller's form configuration file.
     */
    public $formConfig = 'config_form.yaml';
    public $filterPageId = null;
    /**
     * @var array Permissions required to view this page.
     */
    public $requiredPermissions = [];
    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->filterPageId = get('page_id');
        $this->makeLists();
        BackendMenu::setContext('Firstwave.Workproject', 'main-menu-item', 'settings');
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
        $pageIdentifier = post('page'); // Expecting the page ID

        if (!$pageIdentifier) {
            return Response::json([
                'status'  => 'error',
                'message' => 'No page identifier provided.'
            ], 400);
        }

        // Fetch the Page along with its Components
        $page = Page::with(['components' => function ($query) {
            $query->orderBy('sort_order');
        }])->where('path', $pageIdentifier)->first();
        if (!$page) {
            return Response::json([
                'status'  => 'error',
                'message' => 'Page not found.'
            ], 404);
        }

        $this->filterPageId = $page->id;
        $previewUrl     = Url::to($pageIdentifier, [], true);
        $previewHtml    = $this->makePartial('page_details', ['url' => $previewUrl]);
        return [
            '#listContainer'    => $this->listRender(),
            'page_id'           => $page->id,
            '#formContainer'    => '',
            '#pageDetails'      => $previewHtml,
        ];
    }

    public function listExtendQuery($query) {
        if ($this->filterPageId) {
            $query->where('page', $this->filterPageId);
        }
    }

    public function onLoadCreateForm() {
        $model = new Component();
        $this->initForm($model);
        // Render view
        $viewHtml = $this->makePartial('create', [
            'model'     => $model,
            'page_id'   => $this->filterPageId,
        ]);
        return [
            '#formContainer'    => $viewHtml,
            'page_id'           => $this->filterPageId,
            '#listContainer'    => '',
            '#pageDetails'      => '',
        ];
    }

    public function onSave() {
        $data           = post();
        $model          = new Component();
        $model->page    = $this->filterPageId;
        $model->fill($data['Component']);
        $model->save();
        return [
            '#listContainer' => $this->listRender(),
            '#formContainer' => '',
        ];
    }
}
