<?php

namespace App\Http\Livewire\User\Cekout;

use App\Model\User\Keranjang;
use Livewire\Component;
use App\Model\User;

class Kupon extends Component
{
    public $code;
    public function render()
    {
        return view('livewire.user.cekout.kupon');
    }
    public function cupon()
    {
        $this->validate([
            'code' => 'required'
        ]);
        if (!session()->has('ongkir')) {
            session()->flash('gagal', 'Pilih Alamat Pengiriman Dulu');
            return back();
        }

        $pembeli = session('id');
        $data = User\Kupon::where('code', $this->code)->first();
        $keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();

        if (!empty($data)) {
            $diskon = ($data->persen / 100) * $keranjang->jumlah_harga;
            $harga = $keranjang->jumlah_harga - $diskon;
            session([
                'code'    => $data->code,
                'persen'    => $data->persen,
                'diskon'       => $diskon,
                'total'       => $harga,
            ]);
            $this->resetInput();
            $this->emit('getKupon');
            session()->flash('message', 'Kupon Sudah masuk');
            return back();
        } else {
            session()->flash('gagal', 'Kupon salah Silahkan Coba Lagi');
            return back();
        }
        session()->flash('gagal', 'kunaon ey salah KAbeh');

        return back();
    }
    public function resetInput()
    {
        $this->code = null;
    }
}
