<?php

namespace App\Http\Livewire\Admin\Barang;

use App\Model\Admin\Barang;
use App\Model\Admin\Kategori;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\User;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $isi;
    public $kategori_id;
    public $berat;
    public $stok;
    public $harga;
    public $gambar;

    public function render()
    {
        return view('livewire.admin.barang.create', [
            'kategoris' => Kategori::all(),
        ]);
    }
    public function create()
    {
        $this->validate([
            'name' => 'required|min:3',
            'isi' => 'required|min:3',
            'kategori_id' => 'required|numeric',
            'berat' => 'required|numeric',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'image'
        ]);
        $filename = $this->gambar->store('barang');

        Barang::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'isi' => $this->isi,
            'stok' => $this->stok,
            'harga' => $this->harga,
            'berat' => $this->berat,
            'kategori_id' => $this->kategori_id,
            'user_id' => Auth()->user()->id,
            'gambar' => $filename
        ]);


        $this->emit('barangCreate');
        session()->flash('message', 'Data Sudah Di  Masukan');
        return redirect('/admin/barang');
    }
}
