<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $guarded = ['id'];


    public function asaKau()
    {
        if (!$this->gambar) {
            return asset('img/pantai.jpg');
        }
        return asset('storage/' . $this->gambar);
    }
}
