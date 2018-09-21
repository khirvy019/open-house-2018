<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AdminMiddleware
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
        if (Auth::User()) {
            if (Auth::User()->role === 'admin') {
            } else {
				
				return redirect()->to('/dashboard');
            }
        }else{
			return redirect()->guest('/login');
		}
        return $next($request);
    }
}
