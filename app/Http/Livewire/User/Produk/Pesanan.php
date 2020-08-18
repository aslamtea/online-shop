<?php

namespace App\Http\Livewire\User\Produk;

use App\Model\Admin\Barang;
use App\Model\User\Keranjang;
use App\Model\User\Keranjang_detail;
use Carbon\Carbon;
use Livewire\Component;

class Pesanan extends Component
{
    public $barangId;
    public $jumlah = 1;

    public function mount($barang)
    {
        $barang = Barang::find($barang->id);
        if ($barang) {
            $this->barangId = $barang->id;
        }
    }
    public function render()
    {
        return view('livewire.user.produk.pesanan');
    }
    public function tambah()
    {
        $this->jumlah++;
    }
    public function kurang()
    {
        $this->jumlah--;
    }
    public function pesan()
    {
        $barang = Barang::where('id', $this->barangId)->first();
        $pembeli = session('id');
        $tanggal = Carbon::now();
        if (!$pembeli) {
            session()->flash('gagal', 'Silahkan Login Terlebih Dahulu');
            return redirect('/user/login');
        }
        if ($this->jumlah > $barang->stok) {
            session()->flash('gagal', 'Jumlah Pesanan Anda Melebihi Stok');
            return back();
        }
        if ($this->jumlah == 0) {
            session()->flash('gagal', 'Jumlah Pesanan Harus Di Isi');
            return redirect()->back();
        }

        $cek_keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        if (empty($cek_keranjang)) {
            Keranjang::create([
                'pembeli_id' => $pembeli,
                'tanggal' => $tanggal,
                'status' => 0,
                'jumlah_harga' => 0,
                'jumlah_berat' => 0,
            ]);
        }
        $keranjang_baru = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        $cek_keranjang_detail = Keranjang_detail::where('barang_id', $barang->id)->where('keranjang_id', $keranjang_baru->id)->first();
        if (empty($cek_keranjang_detail)) {
            $kr = Keranjang_detail::create([
                'barang_id' => $barang->id,
                'keranjang_id' => $keranjang_baru->id,
                'jumlah' => $this->jumlah,
                'jumlah_harga' => $barang->harga * $this->jumlah,
                'jumlah_berat' => $barang->berat * $this->jumlah,
            ]);
            $kr->save();
        } else {
            $keranjang_detail = Keranjang_detail::where('barang_id', $barang->id)->where('keranjang_id', $keranjang_baru->id)->first();
            $keranjang_detail->update([
                'jumlah' => $keranjang_detail->jumlah + $this->jumlah,
                'jumlah_harga' => $keranjang_detail->jumlah_harga + $barang->harga * $this->jumlah,
                'jumlah_berat' => $keranjang_detail->jumlah_berat + $barang->berat * $this->jumlah,
            ]);
        }
        $keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        $keranjang->update([
            'jumlah_harga' => $keranjang->jumlah_harga + $barang->harga * $this->jumlah,
            'jumlah_berat' => $keranjang->jumlah_berat + $barang->berat * $this->jumlah
        ]);
        session()->flash('message', 'Anda Sudah Memesan');
        return redirect('/user/cekout');
    }
}
