<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $data = [
            ['name' => 'kazu', 'mail' => 'kazu@kazu'],
            ['name' => 'gaku', 'mail' => 'gaku@gaku'],
            ['name' => 'kim', 'mail' => 'kim@kim'],
        ];
        $request -> merge(['data' => $data]);
        return $next($request);
    }
}
