<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authh
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if($guard ==='api'){
            if (!Auth::guard($guard)->check()) {
                $data = [];
                $data['status']= false;
                $data['en']= "you must login";
                $data['ar'] = "يجب تسجيل الدخول";
                return response()->json($data);
                
            }
                return $next($request);
        }

    }

    
}
