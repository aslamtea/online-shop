<?php

namespace App\Http\Livewire\Admin\MenuUrl;

use App\Model\Admin\Menu_url;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;

    public $listeners = [
        'menu_urlCreate' => 'handelStored',
        'menu_urlEdit' => 'handelStored',
    ];
    public function render()
    {
        return view('livewire.admin.menu-url.index', [
            'menu_urls' => Menu_url::all(),
        ]);
    }
    public function getMenu_url($id)
    {
        $this->statusUpdate = true;
        $menu_url =  Menu_url::findOrfail($id);
        $this->emit('getMenu_url', $menu_url);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Menu_url::find($id);
            $data->delete();

            $this->emit('menu_urlDelete');
        }
    }
    public function handelStored()
    {
        $this->statusUpdate = false;
    }
}
