<?php

namespace App\Http\Livewire\Admin\Kategori;

use App\Model\Admin\Kategori;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;
    public $hilang;

    public $listeners = [
        'kategoriCreate' => 'handelStored',
        'kategoriEdit' => 'handelStored',
    ];

    public function render()
    {
        return view('livewire.admin.kategori.index', [
            'kategoris' => Kategori::all(),
        ]);
    }
    public function getKategori($id)
    {
        $this->statusUpdate = true;
        $kategori =  Kategori::findOrfail($id);
        $this->emit('getKategori', $kategori);
    }

    public function hilangkan($id)
    {
        $this->hilang = $id;
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Kategori::find($id);
            $data->delete();

            $this->emit('kategoriDelete');
        }
    }
    public function handelStored()
    {
        $this->statusUpdate = false;
    }
}
