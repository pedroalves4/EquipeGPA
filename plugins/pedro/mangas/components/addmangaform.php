<?php namespace pedro\mangas\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use pedro\mangas\models\manga;
use pedro\mangas\models\categoria;
use Flash;
use ValidationException;
use System\Models\File;

class addmangaform extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'add manga form',
            'description' => 'Entre com mangás'
        ];
    }

    public function onRun() {
    $this->categorias = categoria::all();
    }

    public function onSubmit(){
        $validator = Validator::make(
            $form = Input::all(), [
               'nome' => 'required',
               'autor' => 'required',
               'edicao' => 'required',
               'descricao' => 'required'
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        
       }
       $string = Input::get('nome');
       $noSpaces = str_replace(' ', '', $string);
       $manga = new Manga();
       $manga->nome = Input::get('nome');
       $manga->slug = $noSpaces;
       $manga->autor = Input::get('autor');
       $manga->edicao = Input::get('edicao');
       $manga->descricao = Input::get('descricao');
       $manga->capa = Input::file('capa');
       $manga->categories = Input::get('generos');


       $manga->save(); 



       Flash::success('Manga adicionado!');

    }
    


    public function onImageUpload() {
        $image = Input::all();

        $file = (new File())->fromPost($image['capa']);

        return[
            '#imageResult' => '<img src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" >'
        ];
    }
  

  public $categorias;
}