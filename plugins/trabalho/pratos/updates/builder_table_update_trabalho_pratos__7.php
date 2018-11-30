<?php namespace Trabalho\Pratos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoPratos7 extends Migration
{
    public function up()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->text('modo_preparo');
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->dropColumn('modo_preparo');
        });
    }
}
