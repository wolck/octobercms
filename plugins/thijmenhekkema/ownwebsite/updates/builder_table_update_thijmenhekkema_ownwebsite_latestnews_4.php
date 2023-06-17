<?php namespace Thijmenhekkema\Ownwebsite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThijmenhekkemaOwnwebsiteLatestnews4 extends Migration
{
    public function up()
    {
        Schema::table('thijmenhekkema_ownwebsite_latestnews', function($table)
        {
            $table->dropColumn('intro');
        });
    }
    
    public function down()
    {
        Schema::table('thijmenhekkema_ownwebsite_latestnews', function($table)
        {
            $table->string('intro', 255);
        });
    }
}
