<?php

namespace App\Providers;

use App\Services\SmsSenderInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SmsSenderInterface::class, function(){
            return new SmsSenderService('777', 'nfajgj');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
