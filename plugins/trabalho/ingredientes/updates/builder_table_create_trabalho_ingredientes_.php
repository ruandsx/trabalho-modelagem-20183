<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoIngredientes extends Migration
{
    public function up()
    {
        Schema::create('trabalho_ingredientes_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->integer('quantidade');
            $table->string('descricao')->nullable();
            $table->double('valor', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_ingredientes_');
    }
}
