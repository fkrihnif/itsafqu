<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $fillable = [
        'invitation_types_id', 'nama', 'deskrpsi', 'thumbnail', 'link'
    ];

    protected $hidden = [];

    public function invitation_type()
    {
        return $this->belongsTo(InvitationType::class, 'invitation_types_id', 'id');
    }
}
