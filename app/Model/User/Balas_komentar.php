<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Balas_komentar extends Model
{
    protected $table = 'balas_komentar';
    protected $guarded = ['id'];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }
    public function komentar()
    {
        return $this->belongsTo(Komentar::class);
    }
}
