<?php

namespace App\Http\Livewire\Admin\Tempat;

use App\Model\Admin\Akses;
use App\Model\Admin\Menu;
use App\Model\Admin\Menu_url;
use App\Model\Admin\Submenu;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Sidebar extends Component
{
    protected $listeners = [
        // edit
        'userEdit' => 'handelEdit',
        'aksesEdit' => 'handelEdit',
        'menuEdit' => 'handelEdit',
        'submenuEdit' => 'handelEdit',
        'menu_urlEdit' => 'handelEdit',
        // edit

        // create
        'menuCreate' => 'handelCreate',
        'aksesCreate' => 'handelCreate',
        'SubmenuCreate' => 'handelCreate',
        'menu_urlCreate' => 'handelCreate',
        // create

        // delete
        'aksesDelete' => 'handelDelete',
        'menuDelete' => 'handelDelete',
        'submenuDelete' => 'handelDelete',
        'menu_urlDelete' => 'handelDelete',
        // delete
    ];

    public function render()
    {

        $kon = auth()->user()->role;
        $ki = DB::table('menu')
            ->select('menu.*')
            ->join('akses', 'menu.id', '=', 'akses.menu_id')
            ->where('akses.role', '=', $kon)
            ->get();

        return view('livewire.admin.tempat.sidebar', [
            'ki' => $ki,
            'menus' => Menu::all(),
            'submenus' => Submenu::orderBy('name', 'asc')->get(),
            'menu_urls' => Menu_url::all(),
        ]);
    }
    public function handelEdit()
    {
        //
    }
    public function handelCreate()
    {
        //
    }
    public function handelDelete()
    {
        //
    }
}
