<?php

namespace App\Http\Livewire\Admin\Tempat;

use Livewire\Component;

class Pesan extends Component
{
    protected $listeners = [
        // edit
        'userEdit' => 'handelEdit',
        'aksesEdit' => 'handelEdit',
        'menuEdit' => 'handelEdit',
        'submenuEdit' => 'handelEdit',
        'menu_urlEdit' => 'handelEdit',

        'kuponEdit' => 'handelEdit',

        'kategoriEdit' => 'handelEdit',
        'barangEdit' => 'handelEdit',
        // edit

        // create
        'menuCreate' => 'handelCreate',
        'aksesCreate' => 'handelCreate',
        'SubmenuCreate' => 'handelCreate',
        'menu_urlCreate' => 'handelCreate',

        'kuponCreate' => 'handelCreate',

        'kategoriCreate' => 'handelCreate',
        'barangCreate' => 'handelCreate',
        // create

        // delete
        'aksesDelete' => 'handelDelete',
        'menuDelete' => 'handelDelete',
        'submenuDelete' => 'handelDelete',
        'menu_urlDelete' => 'handelDelete',

        'kuponDelete' => 'handelDelete',

        'kategoriDelete' => 'handelDelete',
        'barangDelete' => 'handelDelete',
        // delete
    ];
    public function render()
    {
        return view('livewire.admin.tempat.pesan');
    }
    public function handelCreate()
    {
        session()->flash('message', 'Data Sudah Di  Masukan');
    }
    public function handelEdit()
    {
        session()->flash('message', 'Data Sudah Di  Edit');
    }
    public function handelDelete()
    {
        session()->flash('message', 'Data Sudah Di  Hapus');
    }
}
