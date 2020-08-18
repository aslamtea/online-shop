<?php

namespace App\Http\Livewire\User\Home;

use App\Model\User\Pembeli;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Ganti extends Component
{
    public $pembeliId;
    public $password;
    public $password_baru;
    public $password_confirm;

    public function mount()
    {
        $pembeli = Pembeli::find(session('id'));
        if ($pembeli) {
            $this->pembeliId = $pembeli->id;
        }
    }
    public function render()
    {
        return view('livewire.user.home.ganti');
    }
    public function ganti()
    {
        $this->validate([
            'password' => 'required|min:4|max:20',
            'password_baru' => 'required|min:4|max:20',
            'password_confirm' => 'required|min:4|max:20|same:password_baru',
        ]);
        $pembeli = Pembeli::find($this->pembeliId);
        if (Hash::check($this->password, $pembeli->password)) {
            $pembeli->update([
                'password' => bcrypt($this->password_baru),
            ]);
            $this->resetInput();
            session()->flash('message', 'Password Berhasil Di Rubah');
            return;
        } else {
            session()->flash('message', 'Password Lama Salah Ey');
            return;
        }
    }
    public function resetInput()
    {
        $this->password = null;
        $this->password_baru = null;
        $this->password_confirm = null;
    }
}
