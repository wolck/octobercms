<?php

use Emielliefhebber\Seoplugin\Models\Sitemap;
use RainLab\Pages\Classes\Page;


Route::get('/robots.txt', 'EmielLiefhebber\Seoplugin\Controllers\RobotsController@generate');



   // return Response::view('emielliefhebber.seoplugin::sitemap');


use EmielLiefhebber\Seoplugin\Controllers\SitemapController;

Route::get('sitemap.xml', [SitemapController::class, 'generate']);

