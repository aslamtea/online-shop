<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Model\Admin\Menu;
use Livewire\Component;

class Create extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.admin.menu.create');
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
        ]);

        $menus = Menu::create([
            'name' => $this->name,
        ]);

        $this->resetInput();

        $this->emit('menuCreate');
    }

    private function resetInput()
    {
        $this->name = null;
    }
}
