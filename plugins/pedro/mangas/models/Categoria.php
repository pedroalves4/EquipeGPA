<?php namespace Pedro\Mangas\Models;

use Model;

/**
 * Model
 */
class Categoria extends Model
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
    public $table = 'pedro_mangas_categoria';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'mangas' =>[
            'Pedro\Mangas\Models\Manga',
            'table' => 'pedro_mangas_mangas_categoria',
            'key' => 'categoria_id',
            'otherKey' => 'manga_id'
        ]
    ];
}
