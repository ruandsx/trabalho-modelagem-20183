<?php namespace Trabalho\Pratos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoPratos2 extends Migration
{
    public function up()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->renameColumn('ingrediente', 'ingredientes');
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->renameColumn('ingredientes', 'ingrediente');
        });
    }
}
