<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class BackendAuth
{
    public function handle($request, Closure $next)
    {
        if(!Auth::guard('api')->check()){
            return response([
                'message' => 'No active user session was found'
            ], 404);
        }

        return $next($request);
    }
}
