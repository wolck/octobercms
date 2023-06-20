<?php namespace Thijmenhekkema\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
class ContactForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }

    public function onSend(): void
    {
        $vars = ['name' => input::get('name'), 'email' => input::get('email'), 'content' => input::get('content')];

        Mail::send('thijmenhekkema.contact::mail.message', $vars, function($message) {

            $message->to('thijmenhekkema@gmail.com', 'Admin Person');
            $message->subject('New message from contact form');

        });


    }

}
