<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLevelMiddleware
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
        $admin = Auth::user();
        if ($admin->level == 2) {
            return $next($request);
        }

        return redirect('admin')->with('error', 'Bạn không đủ quyền để truy cập, vui lòng đăng nhập với với email có đủ quyền.');
    }
}
