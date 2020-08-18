<?php

namespace App\Http\Livewire\Admin\Pesanan;

use App\Model\User\Pesanan;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.pesanan.index', [
            'pesanans' => Pesanan::all()
        ]);
    }
}
