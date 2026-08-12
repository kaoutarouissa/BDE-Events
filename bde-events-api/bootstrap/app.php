<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\EtudiantMiddleware;
use App\Http\Middleware\EtudiantMiddleware as MiddlewareEtudiantMiddleware;
use App\Http\Middleware\EtudiantMiddleware as HttpMiddlewareEtudiantMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
->withMiddleware(function ($middleware) {
    $middleware->alias([
        'bde' => AdminMiddleware::class,
    ]);
})
->withMiddleware(function ($middleware) {
    $middleware->alias([
        'etudiant' => EtudiantMiddleware::class,
    ]);

})
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
    
