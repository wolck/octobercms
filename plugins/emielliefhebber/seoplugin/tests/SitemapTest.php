<?php

class SitemapTest extends \PluginTestCase
{
    public function testGenerateSitemap(){

        $provider = new \\; // Replace with your namespace and class
        $sitemap = $provider->generateSitemap();

        // Check if the sitemap starts with the correct XML declaration
        $this->assertStringStartsWith('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">', $sitemap);

        // Add more assertions as needed...
    }


}
