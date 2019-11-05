<?php

namespace App\Http\Middleware;

use Closure;

class EmailActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (\Auth::user()->emailApprove == true) {
            return $next($request);
        }
            \Auth::logout();
            return redirect()->route('login')->withErrors(['errors'=>'من فضلك فعل حسابك']);
    }
}
