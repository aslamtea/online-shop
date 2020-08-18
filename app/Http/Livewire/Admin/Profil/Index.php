<?php

namespace App\Http\Livewire\Admin\Profil;

use App\User;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = [
        'userUpdate' => 'handelUpdate',
        'userGanti' => 'handelGanti',
    ];

    public function render()
    {
        return view('livewire.admin.profil.index');
    }

    public function handelUpdate()
    {
        session()->flash('message', 'Data  sudah Di Rubah');
    }

    public function handelGanti()
    {
        session()->flash('message', 'Data  sudah Di Rubah');
    }
}
