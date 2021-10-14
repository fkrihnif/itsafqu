<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id', 'tanggal_akad', 'tempat_akad', 'alamat_akad',
    ];

    protected $hidden = [];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'orders_id', 'id');
    }
}
