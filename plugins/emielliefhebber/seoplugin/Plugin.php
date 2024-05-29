<?php namespace EmielLiefhebber\Seoplugin;

use System\Classes\PluginBase;
use Emielliefhebber\Seoplugin\Models\Sitemap;
use Carbon\Carbon;


/**
 * Plugin class
 */
class Plugin extends PluginBase
{

    public $require = ['RainLab.Pages'];

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
        public function boot()
    {

        $this->loadViewsFrom(__DIR__.'./views', 'EmielLiefhebber.Seoplugin');


        \Event::listen('cms.page.postprocess', function($controller, $url, $page) {
            // Check if the page is enabled
            if ($page->enabled) {
                // Add or update the URL in your sitemap model
                Sitemap::updateOrCreate(['url' => $url], ['lastmod' => Carbon::now()]);
            } else {
                // Remove the URL from your sitemap model
                Sitemap::where('url', $url)->delete();
            }
        });


        require_once __DIR__ . '/routes.php';

        \Event::listen('backend.form.extendFields', function($widget) {
            // Only for the RainLab\Pages\Controllers\Index controller
            if (!$widget->getController() instanceof \RainLab\Pages\Controllers\Index) {
                return;
            }


            // Add an SEO tab with fields
            $widget->addTabFields([
                'viewBag[seo_title]' => [
                    'label'   => 'SEO Title',
                    'type'    => 'text',
                    'tab'     => 'SEO',
                ],
                'viewBag[seo_description]' => [
                    'label'   => 'SEO Description',
                    'type'    => 'textarea',
                    'size'    => 'tiny',
                    'tab'     => 'SEO',
                ],

                    'viewBag[meta_keyword]' => [
                    'label' =>  'META Keywords',
                        'type' => 'textarea',
                        'size' => 'tiny',
                        'tab' => 'SEO',
                ],

      'viewBag[meta_robot_index]' => [
           'label' =>' META robotindex',
           'size' =>  'tiny',
            'type' => 'checkbox',
          'tab' => 'SEO',
       ],

    'viewBag[meta_robot_follow]' => [
        'label' => 'META robotfollow',
        'size' => 'tiny',
            'type' => 'checkbox',
        'tab' => 'SEO',
    ],

    'viewBag[meta_robots_adv]' => [
        'label' => 'META robotadv',
        'size' => 'tiny',
        'type'  => 'textarea',
        'tab' => 'SEO',
    ],

  'viewBag[canonical_url]' => [
      'label' => 'Canonical url',
      'size' => 'tiny',
      'type' => 'text',
      'tab' => 'SEO',
  ],

   'viewBag[redirect_url]' => [
       'label' =>  'Redirect url',
       'span' => 'auto',
       'type' => 'text',
       'tab' => 'SEO',
   ]


            ]);
        });

        \Event::listen('cms.template.getTemplateToolbarSettingsButtons', function ($extension, $dataHolder) {
            if ($dataHolder->templateType === 'page') {
                $dataHolder->buttons[] = [
                    'button' => 'SEO',
                    'icon' => 'octo-icon-text-emoticons',
                    'popupTitle' => 'SEO',
                    'properties' => [
                        [
                            'property' => 'seo_title',
                            'title' => 'seo title',
                            'type' => 'string'
                        ],
                        [
                            'property' => 'seo_description',
                            'title' => 'seo description',
                            'type' => 'string'
                        ],
                        [
                            'property' => 'seo_index',
                            'title' => 'seo index',
                            'type' => 'dropdown',
                            'options' => [
                                'index' => 'Index',
                                'noindex' => 'No Index'
                            ]

                        ],

                    ]
                ];
            }
        });

        \Event::listen('backend.form.beforeSave', function($widget) {
            if (!$widget->getController() instanceof \RainLab\Pages\Controllers\Index) {
                return;
            }

            // Get the form data
            $data = post();

            // Process the data
            $seoData = [];
            foreach ($data['viewBag'] as $key => $value) {
                // Remove 'viewBag[' from the start of the key and ']' from the end
                $key = substr($key, 8, -1);

                // Sanitize the value
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

                // Add the processed data to the array
                $seoData[$key] = $value;
            }


        });

        \Event::listen('cms.page.beforeDisplay', function($controller, $url, $page) {
            // Check if the page has SEO data
            if (isset($page->viewBag)) {
                // Get the SEO data
                $seoData = $page->viewBag;

                // Add the SEO data to the page's meta tags
                foreach ($seoData as $key => $value) {
                    if ($key === 'seo_title') {
                        $controller->pageTitle = $value;
                    } elseif ($key === 'seo_description') {
                        $controller->metaDescription = $value;
                    } elseif ($key === 'meta_keyword') {
                        $controller->metaKeywords = $value;
                    } elseif ($key === 'canonical_url') {
                        $controller->addMeta('canonical', $value);
                    } elseif ($key === 'redirect_url' && $value) {
                        return Redirect::to($value);
                    }
                    // Add other meta tags as needed
                }
            }
        });


    }
    /**
     * registerComponents used by the frontend.
     */
  public function registerComponents()
    {
        return [
            \emielLiefhebber\seoplugin\components\SeoFunctionallity::class => 'seoFunctionallity',
            \emielLiefhebber\seoplugin\components\GenerateSnippet::class => 'generatesnippet'
        ];
    }


    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}


