<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id', 'tanggal_resepsi', 'tempat_resepsi', 'alamat_resepsi', 'link_map'
    ];

    protected $hidden = [];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'orders_id', 'id');
    }
}
