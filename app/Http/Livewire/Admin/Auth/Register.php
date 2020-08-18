<?php

namespace App\Http\Livewire\Admin\Auth;

use App\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $konci1;

    public function render()
    {
        return view('livewire.admin.auth.register');
    }
    public function register()
    {
        $this->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:pembeli',
            'password' => 'required|min:4',
            'konci1' => 'required|same:password'
        ]);


        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => 'user',
            'password' => bcrypt($this->password),
        ]);
        session()->flash('message', 'Register Anda Berhasil Silahkan Login');
        return redirect('/login');
    }
}
