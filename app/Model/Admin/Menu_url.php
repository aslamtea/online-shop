<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu_url extends Model
{
    protected $table = 'menu_url';
    protected $guarded = ['id'];
    public function submenu()
    {
        return $this->belongsTo(Submenu::class, 'submenu_id', 'id')->orderBy('name', 'asc');
    }
}
