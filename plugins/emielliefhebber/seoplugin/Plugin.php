<?php namespace EmielLiefhebber\Seoplugin;

use System\Classes\PluginBase;


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

      'viewBag[meta_robotindex]' => [
           'label' =>' META robotindex',
           'size' =>  'tiny',
            'type' => 'checkbox',
          'tab' => 'SEO',
       ],

    'viewBag[meta_robotfollow]' => [
        'label' => 'META robotfollow',
        'size' => 'tiny',
            'type' => 'checkbox',
        'tab' => 'SEO',
    ],

    'viewBag[meta_robotsadv]' => [
        'label' => 'META robotfollow',
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

    }
    /**
     * registerComponents used by the frontend.
     */
  public function registerComponents()
    {
        return [
            \emielLiefhebber\seoplugin\components\SeoFunctionallity::class => 'seoFunctionallity',
            \emielLiefhebber\seoplugin\components\GenerateSnippet::class => 'generatesnippet',
             \emielLiefhebber\seoplugin\components\SeoAnalyzer::class => 'SeoAnalyzer'
        ];
    }
    public function onGenerateRobotsTxt()
    {
        $indexSite = Settings::get('index_site'); // Get the value of the switch

        $content = "User-agent: *\n";

        if ($indexSite) {
            $content .= "Allow: /"; // Allow all crawlers to index the site
        } else {
            $content .= "Disallow: /"; // Disallow all crawlers from indexing the site
        }

        // Write the content to the robots.txt file
        file_put_contents('robots.txt', $content);
    }






    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
