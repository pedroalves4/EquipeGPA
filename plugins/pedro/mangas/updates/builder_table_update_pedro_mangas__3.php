<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePedroMangas3 extends Migration
{
    public function up()
    {
        Schema::table('pedro_mangas_', function($table)
        {
            $table->string('edicao', 191)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pedro_mangas_', function($table)
        {
            $table->string('edicao', 19)->change();
        });
    }
}
