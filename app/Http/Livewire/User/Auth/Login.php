<?php

namespace App\Http\Livewire\User\Auth;

use App\Model\Admin\Barang;
use App\Model\User\Pembeli;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.user.auth.login', [
            'barangs' => Barang::paginate(8),
        ]);
    }

    public function login()
    {

        $data = Pembeli::where('email', $this->email)->first();

        if (!empty($data) && Hash::check($this->password, $data->password)) {

            session([
                'id'       => $data->id,
                'email'       => $data->email,
                'password'    => $data->password,
            ]);
            session()->flash('message', 'Selamat Anda Berhasil Login');
            return redirect('/user/produk');
        } else {
            session()->flash('gagal', 'Password Atau Email Salah');
            return back();
        }
    }
}
