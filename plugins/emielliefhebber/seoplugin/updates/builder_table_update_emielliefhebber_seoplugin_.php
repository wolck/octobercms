<?php namespace EmielLiefhebber\Seoplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmielliefhebberSeoplugin extends Migration
{
    public function up()
    {
        Schema::table('emielliefhebber_seoplugin_', function($table)
        {
            $table->boolean('meta_robotindex')->nullable(false)->change();
            $table->boolean('meta_robotfollow')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('emielliefhebber_seoplugin_', function($table)
        {
            $table->boolean('meta_robotindex')->nullable()->change();
            $table->boolean('meta_robotfollow')->nullable()->change();
        });
    }
}
