<?php namespace Thijmenhekkema\Ownwebsite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThijmenhekkemaOwnwebsiteLatestnews extends Migration
{
    public function up()
    {
        Schema::create('thijmenhekkema_ownwebsite_latestnews', function($table)
        {
            $table->increments('id');
            $table->string('title', 30);
            $table->date('date');
            $table->string('intro', 255);
            $table->text('description');
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thijmenhekkema_ownwebsite_latestnews');
    }
}
