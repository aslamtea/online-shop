<?php

namespace App\Http\Livewire\User\Cekout;

use App\Model\Admin\Barang;
use App\Model\User\Keranjang;
use Livewire\Component;
use App\Model\User\Keranjang_detail;

class Update extends Component
{
    public $detail;
    public $jumlah;
    public $detailId;
    public $mantap = true;

    public function mount(Keranjang_detail $detail)
    {
        // dd($detail->id);
        $this->detailId = $detail->id;
        $this->jumlah = $detail->jumlah;
    }
    public function render()
    {
        return view('livewire.user.cekout.update');
    }
    public function tambah()
    {
        $this->jumlah++;
    }
    public function kurang()
    {
        $this->jumlah--;
    }
    public function update()
    {

        $pembeli = session('id');
        $detail = Keranjang_detail::where('id', $this->detailId)->first();
        $barang = Barang::where('id', $detail->barang_id)->first();
        $kera = Keranjang::where('id', $detail->keranjang_id)->where('pembeli_id', $pembeli)->first();
        if ($this->jumlah > $barang->stok) {
            session()->flash('gagal', 'Jumlah Pesanan Anda Melebihi Stok');
        }
        if ($this->jumlah == 0) {
            session()->flash('gagal', 'Jumlah Pesanan Harus Di Isi');
        }
        $kera->update([
            'jumlah_harga' => $kera->jumlah_harga - $detail->jumlah_harga,
            'jumlah_berat' => $kera->jumlah_berat - $detail->jumlah_berat,
        ]);

        $detail->update([
            'jumlah' => $this->jumlah,
            'jumlah_harga' => $barang->harga * $this->jumlah,
            'jumlah_berat' => $barang->berat * $this->jumlah,
        ]);
        $keranjang = Keranjang::where('id', $detail->keranjang_id)->where('pembeli_id', $pembeli)->first();
        $detail_h = Keranjang_detail::where('id', $this->detailId)->first();
        $keranjang->update([
            'jumlah_harga' => $keranjang->jumlah_harga + $detail_h->jumlah_harga,
            'jumlah_berat' => $keranjang->jumlah_berat + $detail_h->jumlah_berat
        ]);
        // session()->flash('message', 'Jumlah Pesanan Sudah Dirubah');
        $this->emit('cekoutUpdate');
    }
}
