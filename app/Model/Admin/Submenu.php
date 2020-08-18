<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $table = 'submenu';
    protected $guarded = ['id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function menu_url()
    {
        return $this->hasMany(Menu_url::class);
    }
}
