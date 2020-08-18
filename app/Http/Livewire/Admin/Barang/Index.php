<?php

namespace App\Http\Livewire\Admin\Barang;

use App\Model\Admin\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $hilang;
    public $cari;

    public $listeners = [
        'barangCreate' => 'handelStored',
        'barangEdit' => 'handelStored',
    ];
    public function render()
    {
        return view('livewire.admin.barang.index', [
            'barangs' => $this->cari == null ?
                Barang::latest()->paginate(10) :
                Barang::latest()->where('name', 'like', '%' . $this->cari . '%')->paginate(10)
        ]);
    }


    public function hilangkan($id)
    {
        $this->hilang = $id;
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Barang::find($id);
            $data->delete();

            $this->emit('barangDelete');
        }
    }
    public function handelStored()
    {
        $this->statusUpdate = false;
    }
}
