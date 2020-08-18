<?php

namespace App\Http\Livewire\Admin\Kategori;

use App\Model\Admin\Kategori;
use Livewire\Component;
use Illuminate\Support\Str;

class Update extends Component
{
    public $name;
    public $kategoriId;
    protected $listeners = [
        'getKategori' => 'showKategori'
    ];

    public function render()
    {
        return view('livewire.admin.kategori.update');
    }
    public function showKategori($kategori)
    {
        $this->name = $kategori['name'];
        $this->kategoriId = $kategori['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
        ]);

        if ($this->kategoriId) {
            $kategori = Kategori::find($this->kategoriId);
            $kategori->update([
                'name' => $this->name,
                'slug' => Str::slug($this->name),
                'user_id' => auth()->user()->id,
            ]);

            $this->emit('kategoriEdit');
        }
    }
}
