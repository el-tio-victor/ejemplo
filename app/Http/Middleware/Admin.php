<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     protected $auth;

     public function  __construct(){
        $this->auth=Auth::guard();;
        //dd(holis);
     }
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->admin()){
            return $next($request);
        }
        else{
            abort(401);
        }

    }
}
