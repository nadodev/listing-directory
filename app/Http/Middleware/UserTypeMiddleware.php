<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $userType): Response
    {

        if(!isset($request->user()->user_type) ) {
            return  redirect()->route('login')->with('error', 'You are not logged in');
        }

        if ($request->user()->user_type === $userType) {
            return $next($request);
        }

        return to_route('user.dashboard');
    }
}
