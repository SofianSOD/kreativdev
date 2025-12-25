<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $type = 'home'): Response
    {
        $today = now()->toDateString();

        \App\Models\DailyVisit::firstOrCreate(
            ['date' => $today, 'type' => $type],
            ['count' => 0]
        )->increment('count');

        return $next($request);
    }
}
