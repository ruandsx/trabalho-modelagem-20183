<?php namespace Trabalho\Dias\Models;

use Model;

/**
 * Model
 */
class Dia extends Model
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
    public $table = 'trabalho_dias_';

    public $belongsToMany = [
        'pratos' => [
            'Trabalho\Pratos\Models\Prato',
            'table' => 'trabalho_dias_dias_pratos'
        ]
    ];
}
