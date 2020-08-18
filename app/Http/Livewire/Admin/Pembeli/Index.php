<?php

namespace App\Http\Livewire\Admin\Pembeli;

use App\Model\User\Pembeli;
use Livewire\Component;

class Index extends Component
{

    public $statusUpdate = false;
    public function render()
    {
        return view('livewire.admin.pembeli.index', [
            'pembelis' => Pembeli::all()
        ]);
    }
}
