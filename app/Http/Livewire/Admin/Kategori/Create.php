<?php

namespace App\Http\Livewire\Admin\Kategori;

use App\Model\Admin\Kategori;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.admin.kategori.create');
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
        ]);

        $kategoris = Kategori::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'user_id' => auth()->user()->id,
        ]);

        $this->resetInput();

        $this->emit('kategoriCreate');
    }

    private function resetInput()
    {
        $this->name = null;
    }
}
