<?php

namespace App\Http\Livewire\User\Produk;

use App\Model\Admin\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    public $cari;

    protected $updatesQueryString = ['cari'];

    public function mount()
    {
        $this->cari =  request()->query('cari', $this->cari);
    }
    public function render()
    {
        return view('livewire.user.produk.home', [
            'barangs' => $this->cari == null ?
                Barang::paginate(8) :
                Barang::latest()->where('name', 'like', '%' . $this->cari . '%')->paginate(10),
        ]);
    }
}
