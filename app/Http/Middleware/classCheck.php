<?php

namespace App\Http\Middleware;

use App\Models\Classes;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class classCheck
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
        
        // $ff = Classes()->User()->where()->get();
    //    $test =Classes::find(1)->User()->get();
        $test = DB::table("user_classes")->where("user_id",auth()->id())->Where("classes_id",$request->class->id)->get();
        if(count($test)==0){
                abort("403","not allowed");
            }
        return $next($request);
    }
}
