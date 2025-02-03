<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
//use Kris\LaravelFormBuilder\FormBuilderServiceProvider;
//use Barryvdh\DomPDF\ServiceProvider as DomPDFServiceProvider;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
//$app->register(FormBuilderServiceProvider::class);
//$app->register(DomPDFServiceProvider::class);

//return $app;
