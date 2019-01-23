<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePedroMangasCategoria2 extends Migration
{
    public function up()
    {
        Schema::table('pedro_mangas_categoria', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('pedro_mangas_categoria', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
