<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    protected $guarded = ['id'];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id');
    }
    public function Keranjang_detail()
    {
        return $this->hasMany(Keranjang_detail::class);
    }
}
