<?php namespace CodeJr\Contato;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [

            'Codejr\Contato\Components\ContactForm' => 'contactform'


        ];
    }

    public function registerSettings()
    {
    }
}
