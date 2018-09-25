<?php

namespace App\Http\Middleware;

use Closure;
use Theme;

class SetTheme
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $end)
    {
        switch ($end) {
            case 'BACK':
                if (Theme::exists('admin-sb')) {
                    Theme::set('admin-sb');
                }
            break;
            case 'FRONT':
                if (Theme::exists('site-default')) {
                    Theme::set('site-default');
                }
            break;
        }
        
        return $next($request);
    }
}
