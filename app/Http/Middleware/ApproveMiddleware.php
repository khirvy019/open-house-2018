<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class ApproveMiddleware
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
            if (Auth::User()->isApproved === 1) {
            } else {
				return view('auth.wait_approval');
            }
        }else{
			return redirect()->guest('/login');
		}
        return $next($request);
    }
}
