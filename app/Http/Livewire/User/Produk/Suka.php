<?php

namespace App\Http\Livewire\User\Produk;

use App\Model\Admin\Barang;
use App\Model\User\Dislike;
use App\Model\User\Like;
use Livewire\Component;

class Suka extends Component
{
    public $barangId;
    public $resep;

    public function mount($barang)
    {
        $barang = Barang::find($barang->id);
        if ($barang) {
            $this->barangId = $barang->id;
        }
    }
    public function render()
    {
        return view('livewire.user.produk.suka', [
            'barang' =>  Barang::find($this->barangId),
            'likes' => Like::where('barang_id', $this->barangId)->where('pembeli_id', session('id'))->first(),
            'dislikes' => Dislike::where('barang_id', $this->barangId)->where('pembeli_id', session('id'))->first(),
        ]);
    }
    public function tambahLike()
    {
        if (!session('id')) {
            session()->flash('message', 'Silahkan Login Terlebih Dahulu');
            return redirect('/user/login');
        }


        Like::create([
            'pembeli_id' => session('id'),
            'barang_id' => $this->barangId,
        ]);
    }
    public function hapusLike($id)
    {
        if (!session('id')) {
            session()->flash('message', 'Silahkan Login Terlebih Dahulu');
            return redirect('/user/login');
        }
        if ($id) {
            $data = Like::findOrfail($id);
            $data->delete();
        }
    }
    public function tambahDislike()
    {
        if (!session('id')) {
            session()->flash('message', 'Silahkan Login Terlebih Dahulu');
            return redirect('/user/login');
        }


        Dislike::create([
            'pembeli_id' => session('id'),
            'barang_id' => $this->barangId,
        ]);
    }
    public function hapusDislike($id)
    {
        if (!session('id')) {
            session()->flash('message', 'Silahkan Login Terlebih Dahulu');
            return redirect('/user/login');
        }
        if ($id) {
            $data = Dislike::findOrfail($id);
            $data->delete();
        }
        return back();
    }
}
