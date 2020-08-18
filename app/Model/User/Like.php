<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'like';
    protected $guarded = ['id'];


    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }
}
