<?php namespace KurtJensen\Workers\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Schedule Back-end Controller
 */
class Schedule extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.RelationController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('RainLab.User', 'user', 'schedule');
    }
}
