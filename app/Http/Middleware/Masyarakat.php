<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Masyarakat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth()->guard('masyarakat')->check())
        {
            // dd(Auth(), Auth()->guard('masyarakat')->check());
            //\Log::info('User not authenticated as masyarakat.');
            return redirect()->to('/login');
        }
        //\Log::info('User authenticated as masyarakat.');
        return $next($request);
    }


}
