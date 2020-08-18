<?php

namespace App\Http\Livewire\User\Cekout;

use App\Model\User\Keranjang;
use App\Model\User\Keranjang_detail;
use App\Model\User\Pesanan_detail;
use Carbon\Carbon;
use Livewire\Component;
use App\Model\User;
use App\Model\User\City;

class Pesanan extends Component
{
    public $oke = false;
    public $nama_lengkap;
    public $alamat;
    public $no_telepon;
    public $bank;
    public $no_rekening;
    public $pemilik_rekening;
    public $keterangan;

    public $listeners = [
        'tempatKirim' => 'handelKirim',
        'getKupon' => 'handelKupon',
    ];
    public function render()
    {
        $pembeli = session('id');
        $city = session('city');
        $keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        $cities = City::where('id', $city)->first();
        return view('livewire.user.cekout.pesanan', [
            'keranjang' => $keranjang,
            'cities' => $cities,
        ]);
    }
    public function ongkir()
    {
        $this->emit('ongkirBarang');
    }
    public function oke()
    {
        $this->oke = true;
    }
    public function handelKirim()
    {
        session()->flash('success', 'Alamat Pengiriman Sudah Di pilih');
    }
    public function handelKupon()
    {
        // session()->flash('success', 'Alamat Pengiriman Sudah Di pilih');
    }
    public function pesan()
    {
        $this->validate([
            'nama_lengkap' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'bank' => 'required',
            'no_rekening' => 'required',
            'pemilik_rekening' => 'required',
        ]);

        if (!session()->exists('ongkir')) {
            session()->flash('gagal', 'Pilih Alamat Pengiriman Dahulu');
            $this->oke = false;
            return back();
        }
        $pembeli = session('id');
        $tanggal = Carbon::now();
        $city = session('city');
        $cities = City::where('id', $city)->first();
        $keranjang = Keranjang::where('pembeli_id', $pembeli)->where('status', 0)->first();
        $keranjang_details = Keranjang_detail::where('keranjang_id', $keranjang->id)->get();
        if (session()->has('code')) {
            $jumlah_harga =  session()->get('ongkir') + session()->get('total');
            $diskon = session('diskon');
            $potongan = session('persen');
        } else {
            $jumlah_harga = session()->get('ongkir') + $keranjang->jumlah_harga;
            $diskon = 0;
            $potongan = 0;
        }

        $pesan = User\Pesanan::create([
            'pembeli_id' => $pembeli,
            'nama_lengkap' => $this->nama_lengkap,
            'no_telepon' => $this->no_telepon,
            'alamat' => $this->alamat,
            'jumlah' => $keranjang->jumlah_harga,
            'diskon' => $diskon,
            'potongan' => $potongan,
            'ongkir' => session('ongkir'),
            'waktu_kirim' => session('hari'),
            'kurir' => session('courier'),
            'tujuan' => $cities->city_name,
            'jumlah_harga' => $jumlah_harga,
            'bank' => $this->bank,
            'no_rekening' => $this->no_rekening,
            'pemilik_rekening' => $this->pemilik_rekening,
            'tanggal' => $tanggal,
            'status' => 0,
            'keterangan' => $this->keterangan,
        ]);

        $pesan->save();
        foreach ($keranjang_details as $detail) {
            Pesanan_detail::create([
                'barang_id' => $detail->barang_id,
                'pesanan_id' => $pesan['id'],
                'jumlah' => $detail->jumlah,
                'total_berat' => $detail->jumlah_berat,
                'jumlah_harga' => $detail->jumlah_harga,
            ]);
        }
        session()->flash('message', 'Pesanan Sudah Di Order');
        return redirect('/user/pesanan');
    }
}
