<?php namespace Thijmenhekkema\Ownwebsite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThijmenhekkemaOwnwebsiteLatestnews2 extends Migration
{
    public function up()
    {
        Schema::table('thijmenhekkema_ownwebsite_latestnews', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('thijmenhekkema_ownwebsite_latestnews', function($table)
        {
            $table->text('image');
        });
    }
}
