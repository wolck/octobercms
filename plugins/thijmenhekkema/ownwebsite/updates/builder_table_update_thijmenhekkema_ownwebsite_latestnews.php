<?php namespace Thijmenhekkema\Ownwebsite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThijmenhekkemaOwnwebsiteLatestnews extends Migration
{
    public function up()
    {
        Schema::rename('thijmenhekkema_ownwebsite_news', 'thijmenhekkema_ownwebsite_latestnews');
    }
    
    public function down()
    {
        Schema::rename('thijmenhekkema_ownwebsite_latestnews', 'thijmenhekkema_ownwebsite_news');
    }
}
