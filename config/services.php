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
    'google' => [
        'client_id' => '1068578867485-rmjifanipjcof6ua93o5ts4rh27ihca0.apps.googleusercontent.com',
        'client_secret' => 'nM4WHb2KPQI8ewbJcFWHbeQO',
        'redirect' => 'http://localhost:8000/callback/google',
    ],
    'github' => [
        'client_id' => '0ae76b35236bb8896d95',
        'client_secret' => '24b9d5213e7e3d9ff9020fbb6f65031b3ae93ae3',
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    ], 
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

];
