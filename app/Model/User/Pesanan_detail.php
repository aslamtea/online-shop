<?php

namespace App\Model\User;

use App\Model\Admin\Barang;
use Illuminate\Database\Eloquent\Model;

class Pesanan_detail extends Model
{
    protected $table = 'pesanan_detail';
    protected $guarded = ['id'];
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
