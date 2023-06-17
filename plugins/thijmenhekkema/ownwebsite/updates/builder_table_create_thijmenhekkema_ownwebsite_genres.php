<?php namespace Thijmenhekkema\Ownwebsite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThijmenhekkemaOwnwebsiteGenres extends Migration
{
    public function up()
    {
        Schema::create('thijmenhekkema_ownwebsite_genres', function($table)
        {
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thijmenhekkema_ownwebsite_genres');
    }
}
