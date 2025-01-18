<?php

namespace FirstWave\WorkProject\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\Backend;
use BackendMenu;
use Cms\Models\ComponentItem as ModelsComponentItem;
use Cms\Models\ComponentItemType;

class ComponentItem extends Controller {
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $component_id;

    public function __construct() {
        parent::__construct();
        $this->component_id = get('component_id');
        BackendMenu::setContext('FirstWave.WorkProject', 'main-menu-item', 'componentitem');
        $this->pageTitle = 'Website Settings';
        BackendMenu::setContextMainMenu('website');
        $this->vars['component_id'] = $this->component_id;
    }
    public function listExtendQuery($query) {
        $query->where('component_id', $this->component_id);
    }

    public function create() {
        $model = new ComponentItem();
        $model->component_id = $this->component_id;
        $this->initForm($model);
    }

    public function formBeforeSave($model) {
        if (!$model->exists) {
            $model->component_id = $this->component_id;
        }
    }

    public function update($recordId) {
        // Set data for get method
        $model = ModelsComponentItem::find($recordId);
        $this->component_id = $model->component_id;
        $this->initForm($model);
    }

    public function getComponentItemTypeOptions() {
        if (!$this->component_id) {
            return [];
        }
        return ComponentItemType::where('component_type_id', $this->component_id)->lists('name', 'id');
    }
}
