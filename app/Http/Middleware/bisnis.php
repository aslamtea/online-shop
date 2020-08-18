<?php

namespace App\Http\Middleware;

use App\Model\User\Keranjang;
use Closure;

class bisnis
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
        $pembeli = session('id');
        $keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        if (!session()->exists('email')) {
            session()->flash('message', 'Silahkan Login Terlebih Dahulu');
            return redirect('/user/login');
        }
        if (empty($keranjang)) {
            session()->flash('message', 'Anda Belum Memesan Apaun');
            return redirect()->back();
        }
        return $next($request);
    }
}
