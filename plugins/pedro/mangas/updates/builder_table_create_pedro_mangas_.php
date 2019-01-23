<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePedroMangas extends Migration
{
    public function up()
    {
        Schema::create('pedro_mangas_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nome')->nullable();
            $table->string('autor')->nullable();
            $table->string('edicao')->nullable();
            $table->string('descricao')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pedro_mangas_');
    }
}
