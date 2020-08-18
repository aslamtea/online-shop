<?php

namespace App\Http\Livewire\Admin\Kupon;

use App\Model\User\Kupon;
use Livewire\Component;

class Create extends Component
{
    public $code;
    public $persen;
    public function render()
    {
        return view('livewire.admin.kupon.create');
    }
    public function store()
    {
        $this->validate([
            'code' => 'required',
            'persen' => 'required|max:3'
        ]);

        Kupon::create([
            'user_id' => auth()->user()->id,
            'code' => $this->code,
            'persen' => $this->persen,
        ]);

        $this->resetInput();

        $this->emit('kuponCreate');
    }

    private function resetInput()
    {
        $this->name = null;
    }
}
