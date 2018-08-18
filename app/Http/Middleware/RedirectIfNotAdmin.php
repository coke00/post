<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin {

    public function handle($request, Closure $next)
    {
        if (!Auth::user()->isAdmin()){
            // return whatever you want here, I'd redirect to homepage for example or some 401 page
        }

        return $next($request);
    }

}
