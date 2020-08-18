<?php

namespace App\Http\Livewire\User\Home;

use App\Model\Admin\Barang;
use Livewire\Component;

class Cari extends Component
{
    public $cari;

    public function render()
    {

        $barang = [];
        if (strlen($this->cari) > 0) {
            $barang = Barang::where('name', 'like', '%' . $this->cari . '%')->get();
        }
        return view('livewire.user.home.cari', [
            'barangs' => collect($barang)->take(8)
        ]);
    }
}
