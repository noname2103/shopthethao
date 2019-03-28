<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
      if(!empty(session('adminlogin')))
      {
          return$next($request);
      }
      else

          return redirect()->route('getdangnhapadmin');
    }
}
