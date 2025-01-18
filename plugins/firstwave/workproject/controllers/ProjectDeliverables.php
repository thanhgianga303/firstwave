<?php namespace FirstWave\WorkProject\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ProjectDeliverables extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('FirstWave.WorkProject', 'main-menu-item', 'side-menu-item');
    }
}
