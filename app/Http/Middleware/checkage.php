<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $limitage=$request->route('listing');
        if (!$limitage) {
            abort(404);
        }
        $user=Auth::user();
        if ($limitage->age_limit) {
            if ($user->age<=$limitage->age_limit) {
                return redirect('/listing')->with('login','you age is not over '.$limitage->age_limit);
            }
        }
        return $next($request);
    }
}
