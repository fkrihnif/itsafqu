<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestGreeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id', 'nama', 'pesan'
    ];

    protected $hidden = [];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'orders_id', 'id');
    }
}
