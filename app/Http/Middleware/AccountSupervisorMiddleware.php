<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountSupervisorMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
		if (auth()->guard('supervisor')->user()->is_activated)
			return back();
		
        return $next($request);
    }
}
