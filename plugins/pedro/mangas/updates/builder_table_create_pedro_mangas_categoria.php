<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePedroMangasCategoria extends Migration
{
    public function up()
    {
        Schema::create('pedro_mangas_categoria', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pedro_mangas_categoria');
    }
}
