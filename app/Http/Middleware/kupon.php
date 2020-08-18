<?php

namespace App\Http\Middleware;

use Closure;

class kupon
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
        if ($request->session()->exists('ongkir')) {

            $request->session()->forget([
                'code',
                'persen',
                'diskon',
                'total',
                'city',
                'courier',
                'ongkir',
                'hari',
            ]);
        }
        return $next($request);
    }
}
