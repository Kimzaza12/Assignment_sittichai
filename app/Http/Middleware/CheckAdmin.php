<?php

namespace App\Http\Middleware;
use App\Models\assig;
use App\Models\member;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $dataassig = new member();
    
        if ($dataassig->username == $request->username) {
            return redirect()->route('index');
        } else {
            return $next($request);
        }
    
    
    }
}
