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

    public function scopeListFrontEnd($query, $options = [])
    {
        extract(array_merge([
            'page' => 1,
            'perPage' => 10,
            'sort' => 'created_at desc',
            'categories' => null,
            'year' => ''
        ], $options));

        if ($categories !== null) {
            if (!is_array($categories)) {
                $categories = [$categories];
            }

            foreach ($categories as $categoria) {
                $query->whereHas('categories', function ($q) use ($categoria) {
                    $q->where('id', '=', $categoria);
                });
            }
        }


        return $query->paginate($perPage, $page);
    }
}
