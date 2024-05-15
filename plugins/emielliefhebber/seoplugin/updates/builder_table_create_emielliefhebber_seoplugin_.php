<?php namespace EmielLiefhebber\Seoplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmielliefhebberSeoplugin extends Migration
{
    public function up()
    {
        Schema::create('emielliefhebber_seoplugin_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('seo_title')->nullable();
            $table->text('seo_desc')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->boolean('meta_robotindex')->nullable();
            $table->boolean('meta_robotfollow')->nullable();
            $table->text('meta_robotadv')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('redirect_url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emielliefhebber_seoplugin_');
    }
}
