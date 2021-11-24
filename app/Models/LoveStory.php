<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id', 'tanggal', 'judul', 'cerita'
    ];

    protected $hidden = [];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'orders_id', 'id');
    }
}
