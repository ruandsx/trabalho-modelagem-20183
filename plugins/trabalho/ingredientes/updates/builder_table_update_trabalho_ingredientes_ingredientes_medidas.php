<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoIngredientesIngredientesMedidas extends Migration
{
    public function up()
    {
        Schema::table('trabalho_ingredientes_ingredientes_medidas', function($table)
        {
            $table->double('quantidade', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_ingredientes_ingredientes_medidas', function($table)
        {
            $table->dropColumn('quantidade');
        });
    }
}
