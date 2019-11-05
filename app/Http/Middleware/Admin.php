<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard=false)
    {
        if(auth()->guard($guard)->check()){    
            return $next($request);
        }

        return redirect('admin/login');
    }
}
