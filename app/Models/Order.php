<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'templates_id', 'users_id', 'nama_lengkap_pria', 'nama_panggilan_pria', 'ayah_pria', 'ibu_pria', 'nama_lengkap_pr', 'nama_panggilan_pr', 'ayah_pr', 'ibu_pr', 'kode_pesanan', 'status', 'is_aktif'
    ];

    protected $hidden = [];

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
}
