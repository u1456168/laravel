<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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
        $user =$request->user();

        if($user && $user->email == 'admin@admin.com'){

          return $next($request);
        }
          abort(404 , 'Unauthorised Access , ONLY ADMINS ALLOWED.');
    }

}
