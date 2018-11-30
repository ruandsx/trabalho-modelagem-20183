<?php namespace Trabalho\Pratos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoPratos extends Migration
{
    public function up()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->text('ingrediente');
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->dropColumn('ingrediente');
        });
    }
}
