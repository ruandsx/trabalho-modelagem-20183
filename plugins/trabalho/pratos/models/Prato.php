<?php namespace Trabalho\Pratos\Models;

use Model;

/**
 * Model
 */
class Prato extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'trabalho_pratos_';
    protected $jsonable = ['ingredientes'];
    public $hasMany = [
        'ingrediente' => [
            'Trabalho\Ingredientes\Models\Ingrediente',
            'table' => 'trabalho_pratos_pratos_ingredientes'
        ],
    ];
    public $attachOne = [
        'foto' => 'System\Models\File'
    ];
}
