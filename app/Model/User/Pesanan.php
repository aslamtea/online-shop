<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $guarded = ['id'];
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }
    public function pesanan_detail()
    {
        return $this->hasMany(Pesanan_detail::class);
    }
}
