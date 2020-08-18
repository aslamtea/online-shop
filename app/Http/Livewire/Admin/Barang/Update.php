<?php

namespace App\Http\Livewire\Admin\Barang;

use App\Model\Admin\Barang;
use App\Model\Admin\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Update extends Component
{

    use WithFileUploads;

    public $barangId;
    public $name;
    public $isi;
    public $kategori_id;
    public $berat;
    public $stok;
    public $harga;
    public $gambar;
    public $gambar_baru;

    public function mount($id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            $this->barangId = $barang->id;
            $this->name = $barang->name;
            $this->isi = $barang->isi;
            $this->kategori_id = $barang->kategori_id;
            $this->berat = $barang->berat;
            $this->stok = $barang->stok;
            $this->harga = $barang->harga;
            $this->gambar = $barang->gambar;
        }
    }

    public function render()
    {
        $barang = Barang::find($this->barangId);
        return view('livewire.admin.barang.update', [
            'kategoris' => Kategori::all(),
            'barang' => $barang
        ]);
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'isi' => 'required|min:3',
            'kategori_id' => 'required|numeric',
            'berat' => 'required|numeric',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);
        if ($this->gambar_baru) {
            $filename = $this->gambar_baru->store('barang');
        } else {
            $filename = $this->gambar;
        }

        $barang = Barang::find($this->barangId);
        if ($barang) {
            $barang->update([
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
        }
        $this->emit('barangEdit');
        session()->flash('message', 'Data Sudah Di  Edit');
        return redirect('/admin/barang');
    }
}
