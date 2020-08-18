<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function render()
    {
        return view('livewire.admin.auth.login');
    }
    public function login()
    {

        $this->validate([
            'form.email' => 'required',
            'form.password' => 'required',
        ]);

        if (Auth::attempt($this->form)) {
            // session()->flash('message', 'Selamat Anda Berhasil Login');
            return redirect('/admin/profil');
        }
        session()->flash('gagal', 'Password Atau Email Salah');
        return back();
    }
}
