<?php

namespace App\Http\Livewire\User\Tempat;

use Livewire\Component;

class Navbar extends Component
{
    public $oke = false;

    public function render()
    {
        return view('livewire.user.tempat.navbar');
    }
    public function keluar()
    {
        $this->emit('getKeluar');
    }
    public function takjadi()
    {
        $this->oke = false;
    }

    public function logout()
    {
        session()->forget([
            'id',
            'email',
            'password',
        ]);
        session()->flash('message', 'Anda Berhasil Keluar');
        return redirect('/user/login');
    }
}
