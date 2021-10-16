<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'packages_id', 'nama', 'harga', 'deskrpsi', 'thumbnail', 'link'
    ];

    protected $hidden = [];

    public function packages()
    {
        return $this->belongsTo(Package::class, 'packages_id', 'id');
    }
}
