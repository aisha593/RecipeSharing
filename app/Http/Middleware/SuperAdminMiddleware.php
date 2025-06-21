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
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->role == 0) {
                // Super Admin
                return $next($request);
            } elseif ($user->role == 2) {
                // Redirect if not Super Admin (e.g., role 2 is admin)
                return $next($request);
            } elseif ($user->role == 1) {
                // Redirect if not Super Admin and not admin (e.g., role 1 is normal user)
                return redirect('/');
            }
        }

        abort(403, message: 'Unauthorized access.');

    }
}
