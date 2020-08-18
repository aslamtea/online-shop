<?php

namespace App\Http\Livewire\Admin\Tempat;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Keluar extends Component
{
    public $oke = false;

    protected $listeners = [
        'adminKeluar' => 'handelKeluar',
    ];
    public function render()
    {
        return view('livewire.admin.tempat.keluar');
    }

    public function handelKeluar()
    {
        $this->oke = true;
    }
    public function takjadi()
    {
        $this->oke = false;
    }
    public function keluar()
    {
        Auth::logout();
        session()->flash('message', 'Anda Sudah Keluar');
        return redirect(route('login'));
    }
}
