<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoIngredientes6 extends Migration
{
    public function up()
    {
        Schema::table('trabalho_ingredientes_', function($table)
        {
            $table->renameColumn('medida_id', 'medidas_id');
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_ingredientes_', function($table)
        {
            $table->renameColumn('medidas_id', 'medida_id');
        });
    }
}
