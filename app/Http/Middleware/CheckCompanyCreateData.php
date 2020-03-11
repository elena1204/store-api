<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class CheckCompanyCreateData
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
        if ($request->get('address') == 'Orce Nikolov 180') {
          Log::warning('This is not an address of a company, this is the address of Dare');

          return response()->json([
            'error' => true,
            'message' => 'Home of Dare'
          ]);
        }

        return $next($request);
    }
}
