<?php

return function($site, $pages, $page) {
    $form = uniform('contact-form', [
        'required' => [
            'name'  => '',
            'email' => 'email'
        ],
        'actions' => array(
            array(
                '_action' => 'email',
                'to'      => 'jonathanblue57@gmail.com',
                'sender'  => 'noreply@jonathanclarkfinebooks.co.uk',
                'subject' => 'New message on website',
                'snippet' => 'uniform-email-default'
            )
        )
    ]);

    return compact('form');
};