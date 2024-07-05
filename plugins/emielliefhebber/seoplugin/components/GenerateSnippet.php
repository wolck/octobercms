<?php namespace emielLiefhebber\seoplugin\components;

use Cms\Classes\ComponentBase;
use Log;

class GenerateSnippet extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Snippet Preview',
            'description' => 'Provides a preview of how this page might look in search engine results'
        ];
    }

    public function onRender()
    {
        return $this->generateSnippetPreview();
    }

    protected function generateSnippetPreview()
    {
        $page = $this->getPage();
        $title = array_key_exists('seo_title', $page->viewBag) ? $page->viewBag['seo_title'] : '';
        $description = array_key_exists('seo_description', $page->viewBag) ? $page->viewBag['seo_description'] : '';
        $url = $page->url;

        // Format the data to look like a search engine result
        $snippetPreview = "<div class='snippet-preview'>";
        $snippetPreview .= "<h2 class='snippet-title'>$title</h2>";
        $snippetPreview .= "<p class='snippet-description'>$description</p>";
        $snippetPreview .= "<a href='$url' class='snippet-url'>$url</a>";
        $snippetPreview .= "</div>";

        return $snippetPreview;
    }

}
