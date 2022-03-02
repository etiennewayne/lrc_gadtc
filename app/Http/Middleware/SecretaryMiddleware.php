<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecretaryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $role = Auth::user()->role;
        if($role === 'SECRETARY'){
            return $next($request);
        }

        abort(403);
    }
}
