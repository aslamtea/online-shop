<?php

namespace App\Http\Livewire\User\Tempat;

use Livewire\Component;

class Pesan extends Component
{
    public $oke = false;

    protected $listeners = [
        'getKeluar' => 'handelKeluar',
    ];
    public function render()
    {
        return view('livewire.user.tempat.pesan');
    }
    public function handelKeluar()
    {
        $this->oke = true;
        // dd($this->oke);
    }
    public function takjadi()
    {
        $this->oke = false;
    }
    public function oke()
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
