<?php

return [
    'paths' => [
        'api/*', 
        'api/v1/*',  
        'sanctum/csrf-cookie',
    ],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],

    'allowed_origins' => [
        'http://localhost:3000',
        'https://ruchicart.com',
    ],

    'allowed_headers' => [
        'Content-Type',
        'X-Requested-With',
        'Authorization', 
        'X-CSRF-TOKEN',
        'Accept',
        'X-localization'
    ],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];