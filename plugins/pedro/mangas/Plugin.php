<?php namespace Pedro\Mangas;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
        'Pedro\Mangas\Components\FilterManga' => 'filtermanga'
        ];
    }

    public function registerSettings()
    {
    }
}
