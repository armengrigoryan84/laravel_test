<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;
//use Illuminate\Support\Facades\Auth;

class AccountMiddleware extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
    
    public function handle($request, Closure $next, $guard = null)
    {
        
        if(!auth()->check()){
            return redirect('auth/login');
        }

        return $next($request);
    }
}
