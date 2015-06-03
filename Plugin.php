<?php namespace KurtJensen\Workers;

use App;
use Event;
use Backend;
use BackendMenu;
use RainLab\User\Models\User;
use System\Classes\PluginBase;

/**
 * workers Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'workers',
            'description' => 'No description provided yet...',
            'author'      => 'KurtJensen',
            'icon'        => 'icon-leaf'
        ];
    }
    
    public function boot()
    {
        User::extend(function($model) 
        {
            $model->belongsToMany['skills']      = ['kurtjensen\Workers\Models\Skills', 'table' => 'kurtjensen_workers_user_skill'];
        });  

        Event::listen('backend.menu.extendItems', function($manager)
        {
           $manager->addSideMenuItems('RainLab.User', 'user', [
                'skills' => [
                    'label'       => 'Skills',
                    'icon'        => 'icon-star-o',
                    'code'        => 'skills',
                    'owner'       => 'RainLab.User',
                    'url'         => Backend::url('kurtjensen/workers/skills')
                ],
                'schedule' => [
                    'label'       => 'Schedule',
                    'icon'        => 'icon-tasks',
                    'code'        => 'schedule',
                    'owner'       => 'RainLab.User',
                    'url'         => Backend::url('kurtjensen/workers/schedule')
                ]
            ]);
        });
    }

}
