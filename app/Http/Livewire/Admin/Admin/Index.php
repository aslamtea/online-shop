<?php

namespace App\Http\Livewire\Admin\Admin;

use App\User;
use Livewire\Component;

class Index extends Component
{

    public $statusUpdate = false;
    public function render()
    {
        return view('livewire.admin.admin.index', [
            'admins' => User::all()
        ]);
    }
}
