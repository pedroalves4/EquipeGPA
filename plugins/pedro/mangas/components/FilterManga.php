<?php namespace Pedro\Mangas\Components;

use Cms\Classes\ComponentBase;
use Input;
use Pedro\Mangas\Models\Manga;
use Pedro\Mangas\Models\Categoria;

class FilterManga extends ComponentBase
{
    public function componentDetails(){
        return [
            'name' => 'Filter Movies',
            'description' => 'Filter Movies'
        ];
    }

    public function onRun() {
        $this->nome = $this->filterMangas();
        $this->categories = Categoria::all();
        
    }

    protected function filterMangas() {
        $categories = Input::get('categories');
        $query = Manga::all();

        if($categories){
            $query = Manga::whereHas('categories', function($filter) use ($categories){
                $filter->where('slug', '=', $categories);
            })->get();
        }


        return $query;
    }

    public $nome;
    public $categories;
}