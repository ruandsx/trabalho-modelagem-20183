<?php namespace Trabalho\Medidas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoMedidas2 extends Migration
{
    public function up()
    {
        Schema::table('trabalho_medidas_', function($table)
        {
            $table->dropColumn('medida_id');
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_medidas_', function($table)
        {
            $table->integer('medida_id');
        });
    }
}
