<?php

use October\Rain\Database\Updates\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateSeoKeyphrasesTable extends Migration
{
    public function up()
    {
        Schema::create('seo_keyphrases', function  ($table) {
            $table->increments('id');
            $table->string('page_id');
            $table->string('keyphrase');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seo_keyphrases');
    }
}

