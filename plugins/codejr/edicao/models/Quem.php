<?php namespace CodeJr\Edicao\Models;

use Model;

/**
 * Model
 */
class Quem extends Model
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
    public $table = 'codejr_edicao_quem_somos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
