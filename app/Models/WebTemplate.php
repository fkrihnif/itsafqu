<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebTemplate extends Model
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

    public function orders()
    {
        return $this->hasMany(Order::class, 'web_templates_id', 'id');
    }
}
