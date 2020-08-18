<?php

namespace App\Http\Livewire\User\Tempat;

use App\Model\Admin\Kategori;
use Livewire\Component;

class Sidebar extends Component
{

    public function render()
    {
        return view('livewire.user.tempat.sidebar', [
            'kategoris' => Kategori::all()
        ]);
    }
}
