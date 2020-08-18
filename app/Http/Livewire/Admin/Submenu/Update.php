<?php

namespace App\Http\Livewire\Admin\Submenu;

use App\Model\Admin\Menu;
use App\Model\Admin\Submenu;
use Livewire\Component;

class Update extends Component
{
    public $name;
    public $icon;
    public $menu_id;
    public $submenuId;

    protected $listeners = [
        'getSubmenu' => 'showSubmenu'
    ];

    public function render()
    {
        return view('livewire.admin.submenu.update', [
            'menus' => Menu::all(),
        ]);
    }
    public function showSubmenu($submenu)
    {
        $this->name = $submenu['name'];
        $this->icon = $submenu['icon'];
        $this->menu_id = $submenu['menu_id'];
        $this->submenuId = $submenu['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'icon' => 'required|min:3',
            'menu_id' => 'required|numeric|max:15'
        ]);

        if ($this->submenuId) {
            $submenu = Submenu::find($this->submenuId);
            $submenu->update([
                'name' => $this->name,
                'icon' => $this->icon,
                'menu_id' => $this->menu_id
            ]);
            $this->resetInput();
        }
        $this->emit('submenuEdit');
    }
    public function resetInput()
    {
        $this->name = null;
        $this->menu_id = null;
    }
}
