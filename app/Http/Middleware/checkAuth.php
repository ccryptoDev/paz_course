<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; //custom
use Illuminate\Http\Request;
use Session; //custom
use App\Models\Permission; //custom

class checkAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('admin_userId') || Session::has('admin_userId') == null) {
            return redirect()->route('admin.logout');
        } else {
            $user = User::where('status', 1)->where('id', currentAdminUserId())->first();
            if (!$user)
                return redirect()->route('admin.logout'); 
            else
                return $next($request);
        }
        return redirect()->route('admin.logout');
    }
}
