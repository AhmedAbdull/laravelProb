<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
//if(auth()->check()) 
     //   {
        if(auth()->check()){
        if (auth()->user()->isAdmin ) 
        {
             
               return $next($request);
        }   
           }
    
return response('Forbbiden.', 403);
      /*  
    } else {
        return response('Forbbiden.', 403);
    }*/
    //}
}
}
