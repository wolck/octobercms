<?php

namespace EmielLiefhebber\Seoplugin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use RainLab\Pages\Classes\Page;

class RobotsController extends Controller
{
    public function generate()
    {
        $content = "User-agent: *\n";

        // Fetch the pages from the database
        $pages = Page::all();

        foreach ($pages as $page) {
            // If the page should not be indexed, disallow it in robots.txt
            if (isset($page->settings['seo_index']) && !$page->settings['seo_index']) {
                $content .= "Disallow: /" . $page->url . "\n";
            }
        }

        return Response::make($content, 200, ['Content-Type' => 'text/plain']);
    }
}
