<?php

namespace App\Http\Livewire\Admin\MenuUrl;

use App\Model\Admin\Menu_url;
use App\Model\Admin\Submenu;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $url;
    public $submenu_id;

    public function render()
    {
        return view('livewire.admin.menu-url.create', [
            'submenus' => Submenu::all(),
        ]);
    }
    public function create()
    {
        $this->validate([
            'name' => 'required|min:3',
            'url' => 'required|min:3',
            'submenu_id' => 'required|numeric',
        ]);
        Menu_url::create([
            'name' => $this->name,
            'url' => $this->url,
            'submenu_id' => $this->submenu_id,
        ]);

        $this->resetInput();

        $this->emit('menu_urlCreate');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->url = null;
        $this->submenu_id = null;
    }
}
