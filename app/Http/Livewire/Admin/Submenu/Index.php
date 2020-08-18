<?php

namespace App\Http\Livewire\Admin\Submenu;

use App\Model\Admin\Submenu;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;

    public $listeners = [
        'SubmenuCreate' => 'handelStored',
        'submenuEdit' => 'handelStored',
    ];
    public function render()
    {
        return view('livewire.admin.submenu.index', [
            'submenus' => Submenu::all(),
        ]);
    }
    public function getSubmenu($id)
    {
        $this->statusUpdate = true;
        $submenu =  Submenu::findOrfail($id);
        $this->emit('getSubmenu', $submenu);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Submenu::find($id);
            $data->delete();
        }
        $this->emit('submenuDelete');
    }
    public function handelStored()
    {
        $this->statusUpdate = false;
    }
}
