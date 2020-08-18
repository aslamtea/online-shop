<?php

namespace App\Http\Livewire\Admin\Akses;

use App\Model\Admin\Akses;
use App\Model\Admin\Menu;
use Livewire\Component;

class Update extends Component
{
    public $role;
    public $menu_id;
    public $aksesId;

    protected $listeners = [
        'getAkses' => 'showAkses'
    ];

    public function render()
    {
        return view('livewire.admin.akses.update', [
            'menus' => Menu::all(),
        ]);
    }

    public function showAkses($akses)
    {
        $this->role = $akses['role'];
        $this->menu_id = $akses['menu_id'];
        $this->aksesId = $akses['id'];
    }

    public function update()
    {
        $this->validate([
            'role' => 'required|min:3',
            'menu_id' => 'required|numeric|max:15'
        ]);

        if ($this->aksesId) {
            $akses = Akses::find($this->aksesId);
            $akses->update([
                'role' => $this->role,
                'menu_id' => $this->menu_id
            ]);
            $this->resetInput();

            $this->emit('aksesEdit');
        }
    }
    public function resetInput()
    {
        $this->role = null;
        $this->menu_id = null;
    }
}
