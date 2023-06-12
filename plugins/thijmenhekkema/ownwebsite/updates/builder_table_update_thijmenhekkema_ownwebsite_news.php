<?php namespace Thijmenhekkema\Ownwebsite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThijmenhekkemaOwnwebsiteNews extends Migration
{
    public function up()
    {
        Schema::rename('thijmenhekkema_ownwebsite_latestnews', 'thijmenhekkema_ownwebsite_news');
    }
    
    public function down()
    {
        Schema::rename('thijmenhekkema_ownwebsite_news', 'thijmenhekkema_ownwebsite_latestnews');
    }
}
