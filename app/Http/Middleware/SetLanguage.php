<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLanguage
{
  
    public function handle(Request $request, Closure $next)
    {
        \App::setLocale($request->language);
        return $next($request);
    }
}
