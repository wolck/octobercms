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
   ],
                'viewBag[seo_keyphrase]' => [
                    'label' =>  'keyprhase',
                    'span' => 'auto',
                    'type' => 'text',
                    'tab' => 'SEO',
                ],



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
                            'property' => 'meta_robot_index',
                            'title' => 'META robotindex',
                            'type' => 'checkbox'

                            ],
                        [
                            'property' => 'canonical_url',
                            'title' => 'META robotindex',
                            'type' => 'string'

                        ],
                        [
                            'property' => 'seo_keyphrase',
                            'title' => 'SEO Keyphrase',
                            'type' => 'string'
                        ]

                    ]
                ];
            }
        });


        \Event::listen('cms.page.beforeDisplay', function($controller, $url, $page) {
            if ($page->hasComponent('Seo')) {
                $page->viewBag['seo_title'] = $page->components['Seo']->property('seo_title');
                $page->viewBag['seo_description'] = $page->components['Seo']->property('seo_description');
                $page->viewBag['seo_index'] = $page->components['Seo']->property('seo_index');
            }
        });



    }
    /**
     * registerComponents used by the frontend.
     */
  public function registerComponents()
    {
        return [
            \emielLiefhebber\seoplugin\components\GenerateSnippet::class => 'generatesnippet',
             \emielLiefhebber\seoplugin\components\Breadcrums::class => 'Breadcrums',
             \emielLiefhebber\seoplugin\components\KeyPhrasecheck::class => 'keyPhrasecheck'
        ];
    }


    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }


}


