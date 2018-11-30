<?php namespace Trabalho\Pratos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoPratos extends Migration
{
    public function up()
    {
        Schema::create('trabalho_pratos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->double('valor', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_pratos_');
    }
}
