<?php

namespace App\Http\Livewire\Admin\Tempat;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    protected $listeners = [
        'userEdit' => 'handelEdit',
    ];
    public function render()
    {
        return view('livewire.admin.tempat.navbar');
    }
    public function handelEdit()
    {
        //
    }
    public function keluar()
    {
        $this->emit('adminKeluar');
    }
}
