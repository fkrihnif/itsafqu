<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_paket',
    ];

    protected $hidden = [];

    public function video_template()
    {
        return $this->hasMany(VideoTemplate::class, 'packages_id', 'id');
    }

    public function web_template()
    {
        return $this->hasMany(VideoTemplate::class, 'packages_id', 'id');
    }

    public function image_template()
    {
        return $this->hasMany(VideoTemplate::class, 'packages_id', 'id');
    }
}
