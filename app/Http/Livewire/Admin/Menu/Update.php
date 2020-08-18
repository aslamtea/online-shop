<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Model\Admin\Menu;
use Livewire\Component;

class Update extends Component
{
    public $name;
    public $menuId;

    protected $listeners = [
        'getMenu' => 'showMenu'
    ];

    public function render()
    {
        return view('livewire.admin.menu.update');
    }
    public function showMenu($menu)
    {
        $this->name = $menu['name'];
        $this->menuId = $menu['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
        ]);

        if ($this->menuId) {
            $menu = Menu::find($this->menuId);
            $menu->update([
                'name' => $this->name,
            ]);

            $this->emit('menuEdit');
        }
    }
}
