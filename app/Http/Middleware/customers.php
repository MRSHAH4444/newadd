<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class customers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if($request->session()->has('customers_login')) {
    

            
        } else {
            $request -> session()-> has('error','Access only by Admin'); 
                     return redirect('/customers/login');
                    // return back()->with('error', 'Access only by Admin.');


        }
        return $next($request);
    }
}
