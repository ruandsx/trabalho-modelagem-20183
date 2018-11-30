<?php namespace Trabalho\Dias\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoDiasDiasPratos extends Migration
{
    public function up()
    {
        Schema::create('trabalho_dias_dias_pratos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('dias_id');
            $table->integer('pratos_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_dias_dias_pratos');
    }
}
