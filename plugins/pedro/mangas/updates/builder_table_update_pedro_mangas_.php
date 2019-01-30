<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePedroMangas extends Migration
{
    public function up()
    {
        Schema::table('pedro_mangas_', function($table)
        {
            $table->string('edicao', 17)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pedro_mangas_', function($table)
        {
            $table->string('edicao', 191)->change();
        });
    }
}
