<?php

namespace App\Http\Livewire\User\Home;

use App\Model\User\Pembeli;
use Livewire\Component;

class Akun extends Component
{
    protected $listeners = [
        'pembeliUpdate' => 'handelUpdate',
    ];

    public function render()
    {
        return view('livewire.user.home.akun', [
            'pembeli' => Pembeli::where('id', session('id'))->first()
        ]);
    }
    public function handelUpdate()
    {
        // session()->flash('message', 'Data Berhasil Di Rubah');
    }
}
