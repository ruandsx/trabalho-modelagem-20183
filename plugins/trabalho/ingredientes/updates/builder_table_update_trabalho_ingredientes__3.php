<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoIngredientes3 extends Migration
{
    public function up()
    {
        Schema::table('trabalho_ingredientes_', function($table)
        {
            $table->integer('medida_id');
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_ingredientes_', function($table)
        {
            $table->dropColumn('medida_id');
        });
    }
}
