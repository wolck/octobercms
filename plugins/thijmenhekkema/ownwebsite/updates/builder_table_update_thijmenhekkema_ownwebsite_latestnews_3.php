<?php namespace Thijmenhekkema\Ownwebsite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThijmenhekkemaOwnwebsiteLatestnews3 extends Migration
{
    public function up()
    {
        Schema::table('thijmenhekkema_ownwebsite_latestnews', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('thijmenhekkema_ownwebsite_latestnews', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
