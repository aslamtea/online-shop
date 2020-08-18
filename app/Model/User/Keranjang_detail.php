<?php

namespace App\Model\User;

use App\Model\Admin\Barang;
use Illuminate\Database\Eloquent\Model;

class Keranjang_detail extends Model
{
    protected $table = 'keranjang_detail';
    protected $guarded = ['id'];
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'keranjang_id', 'id');
    }
}
