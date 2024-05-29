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

        $pages = Page::all();

        // Check if any pages are being returned
        if ($pages->isEmpty()) {
            $content .= "# No pages found\n";
        }

        foreach ($pages as $page) {
            // Check if the page exists
            if ($page->exists) {
                // Check if 'meta_robot_index' setting exists for the page
                if (array_key_exists('meta_robot_index', $page->viewBag)) {
                    $content .= "# meta_robot_index for " . $page->url . ": " . var_export($page->viewBag['meta_robot_index'], true) . "\n";

                    // If the page should not be indexed, disallow it in robots.txt
                    if (!$page->viewBag['meta_robot_index']) {
                        $content .= "Disallow: /" . $page->url . "\n";
                    } else {
                        // If the page should be indexed, allow it in robots.txt
                        $content .= "Allow: /" . $page->url . "\n";
                    }
                } else {
                    $content .= "# meta_robot_index for " . $page->url . " is not set\n";
                }
            } else {
                $content .= "# Page " . $page->url . " does not exist\n";
            }
        }

        return Response::make($content, 200, ['Content-Type' => 'text/plain']);
    }
}
