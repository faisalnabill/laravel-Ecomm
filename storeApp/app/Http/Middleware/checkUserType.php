<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $type1,$type2): Response
    {
        if(!Auth::check()){
    return redirect(route('login'));
        }
        $user =Auth::user();
        if ($user->type != $type1 && $user->type !=$type2) {
            abort(403,'You\'re not admin');
        }
        return $next($request);
    }
}
