<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; //custom
use Illuminate\Http\Request;
use Session; //custom
use App\Models\Permission; //custom

class checkRole
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
            $user = User::where('status', 1)
                    ->where('id', currentAdminUserId())
                    ->where('role_id', 1)
                    ->first();
            if (!$user) {
                return redirect()->route('admin.logout');
            } else if ($user->full_access == "1") {
                return $next($request);
            } else {
                $auto_accept = array("POST", "PUT");
                if (in_array($request->route()->methods[0], $auto_accept)) {
                    return $next($request);
                } else {
                    if (Permission::where('role_id', $user->role_id)->where('name', $request->route()->getName())->exists())
                        return $next($request);
                    else {
                        \Toastr::warning("You don't have permission to access this page");
                        return redirect()->back();
                    }
                }
            }
        }
        return redirect()->route('admin.logout');
    }
}
