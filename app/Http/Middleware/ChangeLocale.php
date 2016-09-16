<?php

namespace App\Http\Middleware;

use App;
use Closure, Session;

class ChangeLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    protected $languages = ['en','fr','es','pt','de','it'];
    
    public function handle($request, Closure $next)
    {
                
        /*if(!session()->has('langue'))
        {
            session()->put('langue', $request->getPreferredLanguage($this->languages));
        }

        app()->setLocale(session('langue')); */
        
        
        echo Session::get('locale');
        echo $request->get('locale');
        
        if(!Session::has('locale'))
        {
            Session::put('locale', $request->getPreferredLanguage($this->languages));
        }
        
        //app()->setLocale();
        
        return $next($request);
    }
}
