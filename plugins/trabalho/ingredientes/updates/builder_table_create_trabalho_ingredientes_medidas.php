<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoIngredientesMedidas extends Migration
{
    public function up()
    {
        Schema::create('trabalho_ingredientes_medidas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('nome');
            $table->string('abreviacao');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_ingredientes_medidas');
    }
}
