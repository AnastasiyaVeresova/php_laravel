<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Illuminate\Auth\Events\Registered' => [
            'App\Listeners\HashUserPassword',
        ],
    ];
}

