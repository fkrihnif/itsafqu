<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_templates_id', 'video_templates_id', 'web_templates_id', 'users_id', 'nama_lengkap_pria', 'nama_panggilan_pria', 'ayah_pria', 'ibu_pria', 'nama_lengkap_pr', 'nama_panggilan_pr', 'ayah_pr', 'ibu_pr', 'kode_pesanan', 'status', 'is_aktif'
    ];

    protected $hidden = [];

    public function image_template()
    {
        return $this->belongsTo(ImageTemplate::class, 'image_templates_id', 'id');
    }

    public function video_template()
    {
        return $this->belongsTo(VideoTemplate::class, 'video_templates_id', 'id');
    }

    public function web_template()
    {
        return $this->belongsTo(WebTemplate::class, 'web_templates_id', 'id');
    }

    public function templates()
    {
        return $this->belongsTo(Template::class, 'templates_id', 'id');
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class, 'orders_id', 'id');
    }

    public function receptions()
    {
        return $this->hasMany(Reception::class, 'orders_id', 'id');
    }

    public function guests()
    {
        return $this->hasMany(Guest::class, 'orders_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function love_story()
    {
        return $this->hasMany(Guest::class, 'orders_id', 'id');
    }

    public function guest_greeting()
    {
        return $this->hasMany(GuestGreeting::class, 'orders_id', 'id');
    }
}
