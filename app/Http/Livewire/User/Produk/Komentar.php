<?php

namespace App\Http\Livewire\User\Produk;

use App\Model\Admin\Barang;
use Livewire\Component;
use App\Model\User;

class Komentar extends Component
{
    public $conten;
    public $barangId;

    public function mount($barang)
    {
        $barang = Barang::find($barang->id);
        if ($barang) {
            $this->barangId = $barang->id;
        }
    }
    public function render()
    {
        return view('livewire.user.produk.komentar', [
            'barang' =>  Barang::find($this->barangId),
            // 'komentars' => User\Komentar::where('barang_id', $this->barangId)->first(),
        ]);
    }
    public function komen()
    {
        if (!session('id')) {
            session()->flash('message', 'Silahkan Login Terlebih Dahulu');
            return redirect('/user/login');
        }
        $this->validate([
            'conten' => 'required|min:3',
        ]);

        User\Komentar::create([
            'pembeli_id' => session('id'),
            'barang_id' => $this->barangId,
            'conten' => $this->conten,
        ]);

        $this->resetInput();
        session()->flash('message', 'Komentar Anda Sudah Di Posting');
    }
    public function hapus($id)
    {
        if ($id) {
            $data = User\Komentar::findOrfail($id);
            $data->delete();
            session()->flash('berhasil', 'Komentar Anda Sudah Di Hapus');
        }
    }

    private function resetInput()
    {
        $this->conten = null;
    }
}
