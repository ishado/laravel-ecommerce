<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain'    => env('MAILGUN_DOMAIN'),
        'secret'    => env('MAILGUN_SECRET'),
        'endpoint'  => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key'       => env('AWS_ACCESS_KEY_ID'),
        'secret'    => env('AWS_SECRET_ACCESS_KEY'),
        'region'    => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // 'paypal' => [
    //     'username'   => env('PAYPAL_USERNAME'),
    //     'password'   => env('PAYPAL_PASSWORD'),
    //     'signature'  => env('PAYPAL_SIGNATURE'),
    //     'sandbox'    => env('PAYPAL_SANDBOX'),
    // ],

    'paypal' => [
        'username'  => 'sb-nzrdp7726245_api1.business.example.com',
        'password'  => 'WDK9SJMU36B298FV',
        'signature' => 'A76ch3wYREN4v47uZq9BqYb1SDm7AXR5LeMoKS-FWGCBdPvweGZ3nAXk',
        'sandbox'   => true,
    ]

];
