<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePedroMangasMangasCategoria extends Migration
{
    public function up()
    {
        Schema::table('pedro_mangas_mangas_categoria', function($table)
        {
            $table->integer('manga_id')->unsigned()->change();
            $table->integer('categoria_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('pedro_mangas_mangas_categoria', function($table)
        {
            $table->integer('manga_id')->unsigned(false)->change();
            $table->integer('categoria_id')->unsigned(false)->change();
        });
    }
}
