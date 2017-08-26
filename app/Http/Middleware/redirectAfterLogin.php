<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class redirectAfterLogin
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
      $req = $next($request);
      $sit = Session::get('current_sit', 0);
      if ($sit > 0 && Session::get('logued', false)) {
        return redirect('/buy/'.$sit);
      } else {
        redirect()->action('homeController@index');
      }
    }
}
