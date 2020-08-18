<?php

namespace App\Http\Livewire\Admin\Kupon;

use App\Model\User\Kupon;
use Livewire\Component;

class Update extends Component
{
    public $code;
    public $persen;
    public $kuponId;

    protected $listeners = [
        'getKupon' => 'showKupon'
    ];
    public function render()
    {
        return view('livewire.admin.kupon.update');
    }
    public function showKupon($kupon)
    {
        $this->code = $kupon['code'];
        $this->persen = $kupon['persen'];
        $this->kuponId = $kupon['id'];
    }

    public function update()
    {
        $this->validate([
            'code' => 'required',
            'persen' => 'required|max:3',
        ]);

        if ($this->kuponId) {
            $kupon = Kupon::find($this->kuponId);
            $kupon->update([
                'code' => $this->code,
                'persen' => $this->persen,
            ]);

            $this->emit('kuponEdit');
        }
    }
}
