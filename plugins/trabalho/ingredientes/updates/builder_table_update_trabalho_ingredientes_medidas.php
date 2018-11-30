<?php namespace Trabalho\Ingredientes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoIngredientesMedidas extends Migration
{
    public function up()
    {
        Schema::table('trabalho_ingredientes_medidas', function($table)
        {
            $table->string('nome', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_ingredientes_medidas', function($table)
        {
            $table->text('nome')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
