<?php namespace Trabalho\Dias\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTrabalhoDias extends Migration
{
    public function up()
    {
        Schema::table('trabalho_dias_', function($table)
        {
            $table->date('dia')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('trabalho_dias_', function($table)
        {
            $table->string('dia', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
