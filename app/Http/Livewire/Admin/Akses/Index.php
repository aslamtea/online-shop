<?php

namespace App\Http\Livewire\Admin\Akses;

use App\Model\Admin\Akses;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'aksesCreate' => 'handelCreate',
        'aksesEdit' => 'handelCreate',
    ];

    public function render()
    {
        return view('livewire.admin.akses.index', [
            'akse' => Akses::all(),
        ]);
    }
    public function getAkses($id)
    {
        $this->statusUpdate = true;
        $akses =  Akses::findOrfail($id);
        $this->emit('getAkses', $akses);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Akses::findOrfail($id);
            $data->delete();

            $this->emit('aksesDelete');
        }
    }
    public function handelCreate()
    {
        $this->statusUpdate = false;
    }
}
