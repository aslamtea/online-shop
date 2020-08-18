<?php

namespace App\Http\Livewire\User\Home;

use App\Model\User\Pembeli;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $pembeliId;
    public $name;
    public $email;
    public $nama_lengkap;
    public $no_hp;
    public $jenis_kelamin;
    public $alamat;
    public $gambar;

    public function mount()
    {
        $pembeli = Pembeli::find(session('id'));
        if ($pembeli) {
            $this->pembeliId = $pembeli->id;
            $this->name = $pembeli->name;
            $this->email = $pembeli->email;
            if (strlen($pembeli->nama_lengkap) > 3) {
                $this->nama_lengkap = $pembeli->nama_lengkap;
                $this->no_hp = $pembeli->no_hp;
                $this->jenis_kelamin = $pembeli->jenis_kelamin;
                $this->alamat = $pembeli->alamat;
            } else {
                $this->nama_lengkap = '';
                $this->no_hp = '';
                $this->jenis_kelamin = '';
                $this->alamat = '';
            }
        }
    }

    public function render()
    {
        return view('livewire.user.home.update');
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|min:3|max:100',
            'nama_lengkap' => 'required|min:3|max:100',
            'no_hp' => 'required|min:3|max:100',
            'jenis_kelamin' => 'required|min:3|max:100',
            'alamat' => 'required|min:3|max:100',
            'gambar' =>  'image|max:3024',
        ]);
        if ($this->pembeliId) {
            $filename = $this->gambar->store('pembeli');
            $pembeli = Pembeli::find($this->pembeliId);
            $pembeli->update([
                'name' => $this->name,
                'nama_lengkap' => $this->nama_lengkap,
                'no_hp' => $this->no_hp,
                'jenis_kelamin' => $this->jenis_kelamin,
                'alamat' => $this->alamat,
                'gambar' =>  $filename,
            ]);

            session()->flash('message', 'Data Berhasil Di Rubah');
            $this->emit('pembeliUpdate');
        }
    }
}
