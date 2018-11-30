<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTrabalhoIngredientesIngredientesMedidas extends Migration
{
    public function up()
    {
        Schema::dropIfExists('trabalho_ingredientes_ingredientes_medidas');
    }
    
    public function down()
    {
        Schema::create('trabalho_ingredientes_ingredientes_medidas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('ingrediente_id');
            $table->integer('medida_id');
            $table->double('quantidade', 10, 0);
        });
    }
}
