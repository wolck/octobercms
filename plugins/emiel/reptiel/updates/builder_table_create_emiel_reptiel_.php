<?php namespace Emiel\Reptiel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmielReptiel extends Migration
{
    public function up()
    {
        Schema::create('emiel_reptiel_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('soorten');
            $table->text('description');
            $table->text('bijzonderheden')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emiel_reptiel_');
    }
}
