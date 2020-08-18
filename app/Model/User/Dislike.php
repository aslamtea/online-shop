<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    protected $table = 'dislike';
    protected $guarded = ['id'];


    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }
}
