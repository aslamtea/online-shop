<?php

namespace App\Http\Livewire\Admin\Profil;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\String\b;

class Ganti extends Component
{

    public $userId;
    public $password;
    public $password_baru;
    public $password_confirmation;

    public function mount()
    {
        $tea = auth()->user()->id;
        $user = User::find($tea);
        if ($user) {
            $this->userId = $user->id;
        }
    }

    public function render()
    {
        return view('livewire.admin.profil.ganti');
    }

    public function ganti()
    {
        if (!(Hash::check($this->password, Auth::user()->password))) {
            session()->flash('message', 'Data  sudah Di Rubah');
            return redirect()->to('/admin/profil');
        }
        $this->validate([
            'password' => 'required|string|min:4',
            'password_baru' => 'required|string|min:4',
            'password_confirmation' => 'required|string|min:4',
        ]);
    }
}
