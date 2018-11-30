<?php namespace Trabalho\Ingredientes\Models;

use Model;

/**
 * Model
 */
class Ingrediente extends Model
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
    public $table = 'trabalho_ingredientes_';

    public $attachOne =[

        'medida' => 'System\Models\Medida'

    ];

    public $belongsTo = [
        'medidas' => [
            'Trabalho\Medidas\Models\Medida',
            'table' => 'trabalho_medidas_'
        ]
    ];
}
