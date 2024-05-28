<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * @method static where(string $string, string $string1, string $string2)
 */
class Producator
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!empty(Auth::user()->admin) && Auth::user()->admin != 0){
            return redirect('login');
        }
        return $next($request);
    }
}
