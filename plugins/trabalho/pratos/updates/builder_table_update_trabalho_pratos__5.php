<?php namespace Trabalho\Pratos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoPratos5 extends Migration
{
    public function up()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->integer('ingredientes')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_pratos_', function($table)
        {
            $table->text('ingredientes')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
