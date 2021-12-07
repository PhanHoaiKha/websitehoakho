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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '422923966046399',
        'client_secret' => 'ec9fec61abc1055772a7acd529432374',
        'redirect' => 'https://hoakho.abc/callback'
    ],
    'google' => [
        'client_id' => '833324492195-u5j2ndr0o00pp3vimr4cqb1nllorrucd.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://hoakho.abc/google/callback'
    ],

];
