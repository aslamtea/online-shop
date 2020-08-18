<?php

namespace App\Http\Livewire\User\Cekout;

use App\Model\User\Keranjang;
use App\Model\User\Keranjang_detail;
use Livewire\Component;

class Index extends Component
{

    public $hilang;
    protected $listeners = [
        'cekoutUpdate' => 'handelupdate',
    ];

    public function render()
    {
        $pembeli = session('id');
        $keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        $keranjang_detail = Keranjang_detail::where('keranjang_id', $keranjang->id)->get();
        return view('livewire.user.cekout.index', [
            'keranjangs' => $keranjang,
            'keranjang_details' => $keranjang_detail,
        ]);
    }

    public function hapus($id)
    {
        $this->hilang = $id;
    }
    public function destroy($id)
    {
        if ($id) {
            $data = Keranjang_detail::find($id);
            $keranjang = Keranjang::where('id', $data->keranjang_id)->firstOrFail();
            $keranjang->update([
                'jumlah_harga' => $keranjang->jumlah_harga - $data->jumlah_harga,
                'jumlah_berat' => $keranjang->jumlah_berat - $data->jumlah_berat
            ]);
            $data->delete();
            $this->emit('cekoutHapus');
        }
    }
    public function handelupdate()
    {
        //
    }
}
