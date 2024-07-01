<?php namespace EmielLiefhebber\Seoplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRedirects extends Migration
{
    public function up()
    {
        Schema::create('redirects', function ($table) {
            $table->increments('id');
            $table->string('old_url', 2048);
            $table->string('new_url', 2048);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('redirects');
    }
}
