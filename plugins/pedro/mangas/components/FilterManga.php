<?php namespace Pedro\Mangas\Components;


use Lang;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Input;
use Pedro\Mangas\Models\Manga;
use Pedro\Mangas\Models\Categoria;
use DomainException;
use Illuminate\Pagination\Paginator;
use Request;

class FilterManga extends ComponentBase
{


    public function componentDetails(){
        return [
            'name' => 'Filter Mangas',
            'description' => 'Filter Mangas'
        ];
    }
 
    public function onRun() {
        //$this->nome = $this->filterMangas();
        $this->nome = $this->page['nome'] = $this->filterMangas();
        $this->categories = Categoria::all();
        
    }
    
    protected function filterMangas() {
        $categories = Input::get('categories');
        $query = Manga::paginate(10);
        //$query = Manga::all();

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