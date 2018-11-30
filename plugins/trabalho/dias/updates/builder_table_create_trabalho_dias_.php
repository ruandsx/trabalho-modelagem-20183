<?php namespace Trabalho\Dias\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTrabalhoDias extends Migration
{
    public function up()
    {
        Schema::create('trabalho_dias_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('dia');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('trabalho_dias_');
    }
}
