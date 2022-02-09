<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class BirthDate
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
        $dateOfBirth = auth()->user()->birth_date;
$age = \Carbon\Carbon::parse($dateOfBirth)->age;

        if ($age> 30) {
            return $next($request);
          }
      else{
       return   redirect()->route('dashboard');
      }
        
          
    }
}
