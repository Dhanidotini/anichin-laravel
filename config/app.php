<?php

return [

    'name' => env('APP_NAME', 'Laravel'),

    'logo' => env('APP_LOGO', null),

    'description' => env('APP_DESCRIPTION', 'This is a description of the application.'),

    'visibility' => [
        'logo' => (bool) env('APP_LOGO_VISIBILITY', false),
        'name' => (bool) env('APP_NAME_VISIBILITY', false),
    ],

    'env' => env('APP_ENV', 'production'),

    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    'timezone' => 'UTC',

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
