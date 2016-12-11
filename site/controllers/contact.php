<?php

return function($site, $pages, $page) {
    $form = uniform('contact-form', [
        'required' => [
            'name'  => '',
            '_from' => 'email'
        ],
        'actions' => [
            [
                '_action' => 'email',
                'to'      => 'jonathanblue57@gmail.com',
                'sender'  => 'noreply@jonathanclarkfinebooks.co.uk',
                'subject' => 'New message from the contact form',
                'snippet' => 'uniform-email-default'
            ]
        ]
    ]);

    return compact('form');
};