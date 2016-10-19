<?php

namespace App\Http\Middleware;

use App, Closure, Session;

class Locale
{
    
    protected $languages = ['en','fr','es','pt','de','it'];
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
        
    public function handle($request, Closure $next)
    {
        
        if(!Session::has('locale'))
        {
            Session::put('locale', $request->getPreferredLanguage($this->languages));
        }
        
        App::setLocale(Session::get('locale'));
        
        return $next($request);
    }
}
