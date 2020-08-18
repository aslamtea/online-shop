<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $guarded = ['id'];


    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }
    public function balas_komentar()
    {
        return $this->hasMany(Balas_komentar::class);
    }
}
