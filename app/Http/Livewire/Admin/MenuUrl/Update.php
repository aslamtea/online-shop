<?php

namespace App\Http\Livewire\Admin\MenuUrl;

use App\Model\Admin\Menu_url;
use App\Model\Admin\Submenu;
use Livewire\Component;

class Update extends Component
{
    public $name;
    public $url;
    public $submenu_id;
    public $menu_urlId;

    protected $listeners = [
        'getMenu_url' => 'showMenu_url'
    ];

    public function render()
    {
        return view('livewire.admin.menu-url.update', [
            'submenus' => Submenu::all(),
        ]);
    }
    public function showMenu_url($submenu)
    {
        $this->name = $submenu['name'];
        $this->url = $submenu['url'];
        $this->submenu_id = $submenu['submenu_id'];
        $this->menu_urlId = $submenu['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'url' => 'required|min:3',
            'submenu_id' => 'required|numeric|max:15'
        ]);

        if ($this->menu_urlId) {
            $submenu = Menu_url::find($this->menu_urlId);
            $submenu->update([
                'name' => $this->name,
                'url' => $this->url,
                'submenu_id' => $this->submenu_id
            ]);
            $this->resetInput();

            $this->emit('menu_urlEdit');
        }
    }
    public function resetInput()
    {
        $this->name = null;
        $this->submenu_id = null;
    }
}
