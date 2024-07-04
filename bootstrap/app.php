<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
      using: function (\Illuminate\Routing\Router $router){

        /* ruta api */
        $router->middleware('api')
        ->prefix('api')
        ->group(base_path('routes/api.php'));

        /* ruta web */
        $router->middleware('web')
        ->group(base_path('routes/web.php'));

        /* ruta admin */
        $router->middleware('web')
        ->prefix('admin')
        ->group(base_path('routes/admin.php'));
        
      }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
