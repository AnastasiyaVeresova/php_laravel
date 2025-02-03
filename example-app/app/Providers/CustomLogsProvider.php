<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Services\CustomLogServiceInterface;
use App\Services\CustomLogDbService;

class CustomLogsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(CustomLogServiceInterface::class, function () {
            return new CustomLogDbService(DB::table('logs'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
