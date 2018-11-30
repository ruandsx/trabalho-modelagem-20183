<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoIngredientesIngredientesMedidas extends Migration
{
    public function up()
    {
        Schema::create('trabalho_ingredientes_ingredientes_medidas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('ingrediente_id');
            $table->integer('medida_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_ingredientes_ingredientes_medidas');
    }
}
