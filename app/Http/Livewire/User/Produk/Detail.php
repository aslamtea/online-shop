<?php

namespace App\Http\Livewire\User\Produk;

use App\Model\Admin\Barang;
use App\Model\User\Keranjang;
use App\Model\User\Keranjang_detail;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Detail extends Component
{
    use WithPagination;
    public $barangId;
    public $slug;
    public $jumlah = 1;

    public function mount($slug)
    {
        $barang = Barang::where('slug', '=', $slug)->first();
        if ($barang) {
            $this->slug = $slug;
            $this->barangId = $barang->id;
        }
    }
    public function render()
    {
        $barang = Barang::where('slug', '=', $this->slug)->first();
        return view('livewire.user.produk.detail', [
            'barangs' => Barang::paginate(8),
            'barang' => $barang
        ]);
    }
}
