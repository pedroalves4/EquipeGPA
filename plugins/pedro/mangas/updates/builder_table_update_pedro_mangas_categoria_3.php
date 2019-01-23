<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePedroMangasCategoria3 extends Migration
{
    public function up()
    {
        Schema::table('pedro_mangas_categoria', function($table)
        {
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('pedro_mangas_categoria', function($table)
        {
            $table->string('slug', 191)->change();
        });
    }
}
