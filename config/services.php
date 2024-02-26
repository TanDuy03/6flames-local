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
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'google' => [
        'client_id' => '102135239434-odjec47fp3lcc0dtith1hk0dusbnsq08.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://6flames.id.vn/auth/google/callback',
    ],
    
    'facebook' => [

        'client_id' => '680851580416078',
        'client_secret' => '38951f7901df732e88260aedb4429849',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],

];
