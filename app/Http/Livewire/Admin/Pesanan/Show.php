<?php

namespace App\Http\Livewire\Admin\Pesanan;

use App\Model\User\Pesanan;
use App\Model\User\Pesanan_detail;
use Livewire\Component;

class Show extends Component
{
    public $pesananId;

    public function mount($id)
    {
        $pesanan = Pesanan::find($id);
        if ($pesanan) {
            $this->pesananId = $pesanan->id;
        }
    }
    public function render()
    {
        return view('livewire.admin.pesanan.show', [
            'pesanan' => Pesanan::find($this->pesananId),
            'details' => Pesanan_detail::where('pesanan_id', $this->pesananId)->get()
        ]);
    }
}
