<?php

namespace App\Http\Livewire\Admin\Profil;

use App\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{

    use WithFileUploads;

    public $name;
    public $gambar;
    public $userId;

    public function mount()
    {
        $tea = auth()->user()->id;
        $user = User::find($tea);
        if ($user) {
            $this->userId = $user->id;
            $this->name = $user->name;
            $this->gambar = $user->gambar;
        }
    }


    public function render()
    {
        return view('livewire.admin.profil.update');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'gambar' => 'image|max:4000',
        ]);

        $filename = $this->gambar->store('gambar');

        if ($this->userId) {
            $user = User::find($this->userId);
            $user->update([
                'name' => $this->name,
                'gambar' => $filename,
            ]);

            $this->emit('userEdit', $user);
        }
    }
}
