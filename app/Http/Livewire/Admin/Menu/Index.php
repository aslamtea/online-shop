<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Model\Admin\Menu;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;

    public $listeners = [
        'menuCreate' => 'handelStored',
        'menuEdit' => 'handelStored',
    ];

    public function render()
    {
        return view('livewire.admin.menu.index', [
            'menus' => Menu::all(),
        ]);
    }
    public function getMenu($id)
    {
        $this->statusUpdate = true;
        $akses =  Menu::findOrfail($id);
        $this->emit('getMenu', $akses);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Menu::find($id);
            $data->delete();

            $this->emit('menuDelete');
        }
    }
    public function handelStored()
    {
        $this->statusUpdate = false;
    }
}
