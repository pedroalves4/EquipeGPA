<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePedroMangas2 extends Migration
{
    public function up()
    {
        Schema::table('pedro_mangas_', function($table)
        {
            $table->string('edicao', 19)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pedro_mangas_', function($table)
        {
            $table->string('edicao', 17)->change();
        });
    }
}
