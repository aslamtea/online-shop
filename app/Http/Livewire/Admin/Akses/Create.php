<?php

namespace App\Http\Livewire\Admin\Akses;

use App\Model\Admin\Akses;
use App\Model\Admin\Menu;
use Livewire\Component;

class Create extends Component
{
    public $menu_id;
    public $role;


    public function render()
    {
        return view('livewire.admin.akses.create', [
            'menus' => Menu::all(),
        ]);
    }
    public function create()
    {
        $this->validate([
            'role' => 'required|min:3',
            'menu_id' => 'required|numeric',
        ]);

        $menus = Akses::create([
            'role' => $this->role,
            'menu_id' => $this->menu_id,
        ]);

        $this->resetInput();

        $this->emit('aksesCreate', $menus);
    }

    private function resetInput()
    {
        $this->role = null;
        $this->menu_id = null;
    }
}
