<?php namespace Trabalho\Dias\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoDiasDiasPratos extends Migration
{
    public function up()
    {
        Schema::table('trabalho_dias_dias_pratos', function($table)
        {
            $table->integer('dia_id');
            $table->integer('prato_id');
            $table->dropColumn('dias_id');
            $table->dropColumn('pratos_id');
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_dias_dias_pratos', function($table)
        {
            $table->dropColumn('dia_id');
            $table->dropColumn('prato_id');
            $table->integer('dias_id');
            $table->integer('pratos_id');
        });
    }
}
