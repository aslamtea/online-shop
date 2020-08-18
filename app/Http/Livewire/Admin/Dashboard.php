<?php

namespace App\Http\Livewire\Admin;

use App\Model\Admin\Barang;
use App\Model\Admin\Kategori;
use App\Model\User\Kupon;
use App\Model\User\Pembeli;
use App\Model\User\Pesanan;
use App\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'pembelis' => Pembeli::all(),
            'admins' => User::all(),
            'barangs' => Barang::all(),
            'kategoris' => Kategori::all(),
            'kupons' => Kupon::all(),
            'pesanans' => Pesanan::all(),
        ]);
    }
}
