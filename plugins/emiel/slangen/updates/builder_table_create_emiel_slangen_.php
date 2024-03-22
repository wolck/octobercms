<?php namespace Emiel\Slangen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmielSlangen extends Migration
{
    public function up()
    {
        Schema::create('emiel_slangen_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('slangen');
            $table->text('description');
            $table->string('bijzonderheden')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emiel_slangen_');
    }
}
