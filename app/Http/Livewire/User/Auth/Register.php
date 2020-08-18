<?php

namespace App\Http\Livewire\User\Auth;

use App\Model\Admin\Barang;
use Livewire\Component;
use App\Model\User\Pembeli;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $konci1;

    public function render()
    {
        return view('livewire.user.auth.register', [
            'barangs' => Barang::paginate(8),
        ]);
    }
    public function register()
    {
        $this->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:pembeli',
            'password' => 'required|min:4',
            'konci1' => 'required|same:password'
        ]);


        Pembeli::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        session()->flash('message', 'Register Anda Berhasil Silahkan Login');
        return redirect('/user/login');
    }
}
