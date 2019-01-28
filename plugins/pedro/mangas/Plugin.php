<?php namespace Pedro\Mangas;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
        'Pedro\Mangas\Components\FilterManga' => 'filtermanga',
        'Pedro\Mangas\Components\addmangaform' => 'addmangaform',
        'Pedro\Mangas\Components\addcategoria' => 'addcategoria'
        ];
    }

    public function registerSettings()
    {
    }
}
