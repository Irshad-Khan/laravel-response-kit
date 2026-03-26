<?php

namespace Balouch\ResponseKit\Middleware;

use Closure;

class ApiResponseMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $response;
    }
}
