<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitationType extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_undangan',
    ];

    protected $hidden = [];

    public function templates()
    {
        return $this->hasMany(Template::class, 'invitation_types_id', 'id');
    }
}
