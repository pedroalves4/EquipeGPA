<?php namespace Pedro\Mangas\Components;


use Lang;
use Cms\Classes\ComponentBase;
use Input;
use Pedro\Mangas\Models\Manga;
use Pedro\Mangas\Models\Categoria;

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
        $query = Manga::all();

        if($categories){
            $query = Manga::whereHas('categories', function($filter) use ($categories){
                $filter->where('slug', '=', $categories);
            })->get();
        }


        return $query;
    }

    protected function paginate($model)
    {
        $recordsPerPage = trim($this->property('recordsPerPage'));
        if (!strlen($recordsPerPage)) {
            // Pagination is disabled - return all records
            return $model->get();
        }

        if (!preg_match('/^[0-9]+$/', $recordsPerPage)) {
            throw new SystemException('Invalid records per page value.');
        }

        $pageNumber = trim($this->property('pageNumber'));
        if (!strlen($pageNumber) || !preg_match('/^[0-9]+$/', $pageNumber)) {
            $pageNumber = 1;
        }

        return $model->paginate($recordsPerPage, $pageNumber);
    }
   
    public $nome;
    public $categories;
}