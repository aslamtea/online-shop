<?php

namespace App\Http\Livewire\Admin\Kupon;

use App\Model\User\Kupon;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;

    public $listeners = [
        'kuponCreate' => 'handelStored',
        'kuponEdit' => 'handelStored',
    ];

    public function render()
    {
        return view('livewire.admin.kupon.index', [
            'kupons' => Kupon::all(),
        ]);
    }
    public function getKupon($id)
    {
        $this->statusUpdate = true;
        $kupon =  Kupon::findOrfail($id);
        $this->emit('getKupon', $kupon);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Kupon::find($id);
            $data->delete();

            $this->emit('kuponDelete');
        }
    }
    public function handelStored()
    {
        $this->statusUpdate = false;
    }
}
