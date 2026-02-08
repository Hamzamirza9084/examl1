<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckName
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->name !== 'hamza') {
            return response('Access Denied: Only Hamza Allowed', 403);
        }

        return $next($request);
    }
}
