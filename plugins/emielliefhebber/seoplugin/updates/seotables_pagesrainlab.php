<?php

namespace EmielLiefhebber\Seoplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddSeoFields extends Migration
{
    public function up()
    {
        Schema::table('rainlab_pages', function ($table) {
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->boolean('meta_robotindex')->default(false);
            $table->boolean('meta_robotfollow')->default(false);
            $table->text('meta_robotsadv')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('redirect_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('rainlab_pages', function ($table) {
            $table->dropColumn([
                'seo_title',
                'seo_description',
                'meta_keyword',
                'meta_robotindex',
                'meta_robotfollow',
                'meta_robotsadv',
                'canonical_url',
                'redirect_url'
            ]);
        });
    }
}
