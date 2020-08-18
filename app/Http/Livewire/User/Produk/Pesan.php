<?php

namespace App\Http\Livewire\User\Produk;

use Livewire\Component;

class Pesan extends Component
{
    public $oke = false;
    protected $listeners = [
        'getLogin' => 'handelLogin',
        'cekoutUpdate' => 'handelupdate',
        'cekoutHapus' => 'handelHapus',
    ];
    public function render()
    {
        return view('livewire.user.produk.pesan');
    }
    public function handelLogin()
    {
        //
    }
    public function handelupdate()
    {
        session()->flash('message', 'Jumlah Pesanan Sudah Dirubah');
    }
    public function handelHapus()
    {
        session()->flash('message', ' Pesanan Sudah Hapus');
    }
    public function oke()
    {
        session()->forget([
            'message',
        ]);
    }
}
