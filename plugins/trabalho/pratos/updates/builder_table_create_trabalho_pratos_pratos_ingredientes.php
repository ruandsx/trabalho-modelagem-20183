<?php namespace Trabalho\Pratos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoPratosPratosIngredientes extends Migration
{
    public function up()
    {
        Schema::create('trabalho_pratos_pratos_ingredientes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('prato_id');
            $table->integer('ingrediente_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_pratos_pratos_ingredientes');
    }
}
