<?php
namespace EmielLiefhebber\Seoplugin\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Sitemaps Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('emielliefhebber_seoplugn_sitemap_', function($table)
        {
            $table->increments('id');
            $table->string('url');
            $table->timestamp('lastmod');
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('emielliefhebber_sitemap_', function($table)
        {
            Schema::dropIfExists('emielliefhebber_seoplugin_sitemaps');
        });
    }
};
