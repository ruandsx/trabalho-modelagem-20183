<?php namespace Trabalho\Medidas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoMedidas extends Migration
{
    public function up()
    {
        Schema::create('trabalho_medidas_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->string('abreviacao');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_medidas_');
    }
}
