<?php namespace CodeJr\Edicao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodejrEdicaoQuemSomos extends Migration
{
    public function up()
    {
        Schema::create('codejr_edicao_quem_somos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('texto')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codejr_edicao_quem_somos');
    }
}
