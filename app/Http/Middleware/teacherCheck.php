<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class teacherCheck
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
        if((auth()->User()->permession) !="Admin" && (auth()->User()->permession)!="Teacher" ){
            abort("403","not Allowed");
        }
        
        return $next($request);
        
    }
}
