<?php

return [
    'url' => 'laravel-timezone',
    'controller' => \Sawirricardo\LaravelTimezone\Http\Controllers\LaravelTimezoneController::class,

    'allowed_timezones' => [
        ...timezone_identifiers_list(),
    ],

    'middleware' => [
        'web',
    ],

];
