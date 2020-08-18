<?php

namespace App\Http\Livewire\User\Home;

use App\Model\User;
use App\Model\User\Pesanan_detail;
use Livewire\Component;

class Pesanan extends Component
{
    public function render()
    {
        $pesanan =  User\Pesanan::where('pembeli_id', session('id'))->first();
        return view('livewire.user.home.pesanan', [
            'pesanan' => $pesanan,
            'details' => Pesanan_detail::where('pesanan_id', $pesanan->id)->get()
        ]);
    }
}
