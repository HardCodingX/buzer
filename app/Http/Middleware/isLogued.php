<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Input;

class isLogued
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
      if (Session::get('logued', false)) {
        return $next($request);
      } else {
        //  $sit = Input::get('id', 0);
        $sit = $request->id;
        Session::put('current_sit', $sit);
        return redirect()->action('authController@login');
      }

    }
}
