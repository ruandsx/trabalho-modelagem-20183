<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTrabalhoIngredientesMedidas extends Migration
{
    public function up()
    {
        Schema::dropIfExists('trabalho_ingredientes_medidas');
    }
    
    public function down()
    {
        Schema::create('trabalho_ingredientes_medidas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('nome', 191);
            $table->string('abreviacao', 191);
        });
    }
}
