<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class adminApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next,$guard=false)
    {
        if($guard ==='adminApi'){
            if (!Auth::guard($guard)->check()) {
                $data = [];
                $data['message']= "falied";
                $data['en']= "you must login";
                $data['ar'] = "يجب تسجيل الدخول";
                return response()->json($data);
                
            }
                return $next($request);
        }
         

    }

    
}
