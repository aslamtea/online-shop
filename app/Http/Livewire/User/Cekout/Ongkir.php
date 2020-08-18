<?php

namespace App\Http\Livewire\User\Cekout;

use App\Model\User\City;
use App\Model\User\Keranjang;
use App\Model\User\Province;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Ongkir extends Component
{
    public $listeners = [
        'ongkirBarang' => 'handelOngkir',
    ];

    public $oke = false;
    public $province;
    public $city;
    public $courier;


    public function render()
    {
        $city = City::where('province_id', $this->province)->get();
        return view('livewire.user.cekout.ongkir', [
            'provinces' => Province::all(),
            'cities' => $city,
        ]);
    }

    public function handelOngkir()
    {
        $this->oke = true;
    }
    public function takjadi()
    {
        $this->oke = false;
    }
    public function kirim()
    {
        $this->validate([
            'province' => 'required',
            'city' => 'required',
            'courier' => 'required',
        ]);

        $pembeli = session('id');
        $keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        $response  = Http::asForm()->withHeaders([
            'key' => '35d76cc2082051fe822726a638c3a374'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => 54,
            'destination' => $this->city,
            'weight' => $keranjang->jumlah_berat,
            'courier' => $this->courier,
        ]);
        $ongkir =  $response['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];
        $hari =  $response['rajaongkir']['results'][0]['costs'][0]['cost'][0]['etd'];
        session([
            'city' => $this->city,
            'courier'    => $this->courier,
            'ongkir'    => $ongkir,
            'hari'       => $hari,
        ]);
        $this->oke = false;
        $this->emit('tempatKirim');
    }
}
