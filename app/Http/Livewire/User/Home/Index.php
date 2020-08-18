<?php

namespace App\Http\Livewire\User\Home;

use App\Model\Admin\Barang;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.user.home.index', [
            'barangs' => Barang::take(12)->get()
        ]);
    }
}
