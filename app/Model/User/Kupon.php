<?php

namespace App\Model\User;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    protected $table = 'kupon';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
