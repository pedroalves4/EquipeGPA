<?php namespace pedro\mangas\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use pedro\mangas\models\categoria;
use Flash;
use ValidationException;
use System\Models\File;

class addcategoria extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'add categoria',
            'description' => 'Entre com categoria'
        ];
    }


    public function onSubmit(){
        $validator = Validator::make(
            $form = Input::all(), [
               'nome_cat' => 'required'
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        
        }
       $string = Input::get('nome_cat');
       $noSpaces = str_replace(' ', '', $string);
       $categoria = new Categoria();
       $categoria->nome_cat = Input::get('nome_cat');
       $categoria->slug = $noSpaces;
 
       $categoria->save(); 

       Flash::success('Categoria adicionado!');

    }

}