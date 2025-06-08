<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->role == 2) {
            // return response()->json(['message' => 'You are not authorized to access this route'], 403);
            return redirect()->route('dashboard');
        }
        elseif(auth()->user()->role == 1) {
            // return response()->json(['message' => 'You are not authorized to access this route'], 403);
            return redirect()->route('home');
        }
        return $next($request);
    }
}
