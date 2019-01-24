<?php namespace Codejr\Contato\Components;

use Cms\Classes\ComponentBase;

use Input;

use Mail;

use Validator;

use Redirect;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
        'name' => 'Contact Form',
        'description' => 'Simple contact form'
    ];
    }
    public function onSend()
    {
        $vars = ['name' => Input::get('name'), 'email' =>  Input::get('email'), 'content' => Input::get('message')];

        Mail::send('codejr.contato::mail.message', $vars, function ($message) {
            $message->to('peagapemeiler@gmail.com', 'Admin Person');
            $message->subject(Input::get('subject'));
        });
    }
}
