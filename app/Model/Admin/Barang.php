<?php

namespace App\Model\Admin;

use App\Model\User\Dislike;
use App\Model\User\Komentar;
use App\Model\User\Like;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Barang extends Model
{
    protected $table = 'barang';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
    public function dislike()
    {
        return $this->hasMany(Dislike::class);
    }
}
