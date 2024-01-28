<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class offermiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // if(status::check() && status::offer()->status)
        // {
        //     $status = status::offer()->status=="1";
        //     status::Activate();

        //     if($status == 1){
        //         $message = "Activate";
        //     }
        //     elseif($status == 0){
        //         $message = "Deactivate";
        //     }

            
        // }
    }
}
