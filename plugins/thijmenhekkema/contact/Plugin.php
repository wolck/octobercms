<?php namespace Thijmenhekkema\Contact;

use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
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
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents(): array
    {
        return [
            'thijmenhekkema\Contact\Components\ContactForm' => 'contactform',
        ];
    }


    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
