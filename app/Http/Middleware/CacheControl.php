<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CacheControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request)->withHeaders([
            'Cache-Control','no-store, no-cache, max-age=0, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => 'Fri, 01 Jan 1990 00:00:00 GMT',
            'SameSite' =>  'lax',
            'X-Frame-Options' =>  'SAMEORIGIN',
            'X-XSS-Protection' =>  '1; mode=block',
            'X-Content-Type-Options' =>  'nosniff',
            'Referrer-Policy' =>  'no-referrer-when-downgrade',
            'Strict-Transport-Security' =>  'max-age=31536000; includeSubDomains',
            'X-Permitted-Cross-Domain-Policies' =>  'none',
        ]);
    }
}
