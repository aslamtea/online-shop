<?php

namespace App\Http\Livewire\Admin\Submenu;

use App\Model\Admin\Menu;
use App\Model\Admin\Submenu;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $icon;
    public $menu_id;

    public function render()
    {
        return view('livewire.admin.submenu.create', [
            'menus' => Menu::all(),
        ]);
    }
    public function create()
    {
        $this->validate([
            'name' => 'required|min:3',
            'icon' => 'required|min:3',
            'menu_id' => 'required|numeric',
        ]);
        Submenu::create([
            'name' => $this->name,
            'icon' => $this->icon,
            'menu_id' => $this->menu_id,
        ]);

        $this->resetInput();

        $this->emit('SubmenuCreate');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->icon = null;
        $this->menu_id = null;
    }
}
