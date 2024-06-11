<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SupervisorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		$supervisor = auth()->guard('supervisor');
		
        if (!$supervisor->check())
			return redirect(route('supervisor.login'));
           
		if (!$supervisor->user()->is_activated)
			return redirect(route('account.supervisor.activation'));
		
		return $next($request);
    }
}
