<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $redirectLogin = '/login';
    public function handle($request, Closure $next)
    {
        session_start();
        if(!isset($_SESSION['loginStatus']))
        {
            return redirect($this->redirectLogin);
        }
        else
        if(isset($_SESSION['loginStatus']) && $_SESSION['loginStatus']==false)
        {
            session_unset();   
            session_destroy(); 
            return redirect($this->redirectLogin);
        }
        else
        if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800))
        {// half and hour session
            session_unset();   
            session_destroy(); 
            return redirect($this->redirectLogin);
        }       
        $_SESSION['LAST_ACTIVITY'] = time(); 
        return $next($request);
    }
}
