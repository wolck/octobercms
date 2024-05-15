<?php namespace emielLiefhebber\seoplugin\components;

use Cms\Classes\ComponentBase;

class SeoFunctionallity extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'SEO Component',
            'description' => 'Provides SEO functionality.'
        ];
    }

    public function onRun()
    {
        $this->generateSitemap();
    }

    public function generateSitemap()
    {
        $pages = \RainLab\Pages\Classes\Page::listInTheme(\Cms\Classes\Theme::getActiveTheme());

        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');


        foreach ($pages as $page) {
            $url = $xml->addChild('url');
            $url->addChild('loc', $page->url);
            $url->addChild('lastmod', $page->updated_at->format('Y-m-d'));
            $url->addChild('changefreq', 'weekly');
            $url->addChild('priority', '0.5');
        }

        return $xml->asXML();
    }

}
