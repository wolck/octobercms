<?php namespace emielLiefhebber\seoplugin\components;

use Cms\Classes\ComponentBase;
use Log;


class canonical_url extends ComponentBase
{
public function componentDetails()
{
return [
'name'        => 'SEO Component',
'description' => 'Handles SEO functionality'
];
}

public function onRender()
{
$this->page['canonical_url'] = $this->generateCanonicalUrl();
}

protected function generateCanonicalUrl()
{
    protected function generateCanonicalUrl()
{
    // Get the current page
    $page = $this->page;

    // Get the base URL of your website
    $baseUrl = Url::to('/');

    // Combine the base URL with the page's URL to create the canonical URL
    $canonicalUrl = $baseUrl . $page->url;

    return $canonicalUrl;
}

}
}
