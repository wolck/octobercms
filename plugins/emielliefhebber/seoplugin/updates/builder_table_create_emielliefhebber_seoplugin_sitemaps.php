<?php namespace EmielLiefhebber\Seoplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmielliefhebberSeopluginSitemaps extends Migration
{
    public function up()
    {
        Schema::create('emielliefhebber_seoplugin_sitemaps', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('url');
            $table->dateTime('lastmod');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emielliefhebber_seoplugin_sitemaps');
    }
}
