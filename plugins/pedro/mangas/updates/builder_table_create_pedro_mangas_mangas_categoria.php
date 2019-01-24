<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePedroMangasMangasCategoria extends Migration
{
    public function up()
    {
        Schema::create('pedro_mangas_mangas_categoria', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('manga_id');
            $table->integer('categoria_id');
            $table->primary(['manga_id','categoria_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pedro_mangas_mangas_categoria');
    }
}
