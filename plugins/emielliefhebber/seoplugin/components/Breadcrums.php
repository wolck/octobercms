<?php namespace emielLiefhebber\seoplugin\components;

use Cms\Classes\ComponentBase;
use Log;

class Breadcrums extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Breadcrumbs',
            'description' => 'Generates breadcrumb navigation'
        ];
    }

    public function onRun()
    {
        $this->page['breadcrumbs'] = $this->generateBreadcrumbs();
    }

    protected function generateBreadcrumbs()
    {
        $breadcrumbs = [];
        $page = $this->page;

        while ($page !== null) {
            $breadcrumbs[] = [
                'title' => $page->title,
                'url' => $page->url
            ];

            $page = $page->parent;
        }

        // Reverse the breadcrumbs so that they're in the correct order
        $breadcrumbs = array_reverse($breadcrumbs);

        return $breadcrumbs;
    }
}
