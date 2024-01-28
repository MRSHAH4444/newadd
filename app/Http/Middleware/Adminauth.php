<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Adminauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->session()->has('Admin_login')) {
    

            
        } else {
            $request -> session()-> has('error','Access only by Manager'); 
                     return redirect('/Admin/login');
                    // return back()->with('error', 'Access only by manager.');
        }

        return $next($request);
    
    }
}

