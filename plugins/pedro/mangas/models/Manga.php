<?php namespace Pedro\Mangas\Models;

use Model;

/**
 * Model
 */
class Manga extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pedro_mangas_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'capa' => 'System\Models\File'
    ];
    public $belongsToMany = [
        'categories' =>[
            'Pedro\Mangas\Models\Categoria',
            'table' => 'pedro_mangas_mangas_categoria',
            'key' => 'manga_id',
            'otherKey' => 'categoria_id'
        ]
    ];

}
