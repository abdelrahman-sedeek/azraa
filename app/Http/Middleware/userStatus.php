<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class userStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the user is authenticated
         if (Auth::check()) {
            // Check if the user has a status property
            if (Auth::user()->status == 1) {
                return $next($request);
            } else {
                return redirect()->route('pending');
            }
        }

        // If not authenticated, redirect to login
        return redirect()->route('login');
    }
}
