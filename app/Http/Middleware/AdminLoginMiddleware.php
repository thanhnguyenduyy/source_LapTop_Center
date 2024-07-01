<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
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
        if (Auth::check()) {
            $admin = Auth::user();
            if ($admin->level == 1 || $admin->level == 2) {
                return $next($request);
            }
        }

        return redirect('admin/dang-nhap');
    }
}
