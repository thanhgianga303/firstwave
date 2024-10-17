<?php namespace FirstWave\ContactUsForm;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'FirstWave\ContactUsForm\Components\ContactForm' => 'contactform',
        ];
    }


    public function registerSettings()
    {
    }
}
