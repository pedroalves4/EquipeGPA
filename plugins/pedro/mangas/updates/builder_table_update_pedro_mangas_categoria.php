<?php namespace Pedro\Mangas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePedroMangasCategoria extends Migration
{
    public function up()
    {
        Schema::table('pedro_mangas_categoria', function($table)
        {
            $table->renameColumn('nome', 'nome_cat');
        });
    }
    
    public function down()
    {
        Schema::table('pedro_mangas_categoria', function($table)
        {
            $table->renameColumn('nome_cat', 'nome');
        });
    }
}
