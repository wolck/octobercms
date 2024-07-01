<?php
namespace EmielLiefhebber\Seoplugin\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use RainLab\Pages\Classes\Page;
use Cms\Classes\Theme;
use Cms\Classes\Page as CmsPage;
use Illuminate\Support\Facades\Log;

class SitemapController extends Controller
{


    public function generate()
    {
        $theme = Theme::getActiveTheme(); // Fetch the active theme

        // Fetch all static pages in the active theme
        $staticPages = Page::listInTheme($theme, true);

        // Fetch all CMS pages in the active theme
        $cmsPages = CmsPage::listInTheme($theme, true);

        // Merge static pages and CMS pages
        $pages = array_merge($staticPages->toArray(), $cmsPages->toArray());

        Log::info('Pages:', $pages);

        $content = View::make('emielliefhebber.seoplugin::sitemap', ['pages' => $pages]);

        return Response::make($content, 200, ['Content-Type' => 'application/xml']);
    }
}
