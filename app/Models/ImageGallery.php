<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_templates_id', 'gallery'
    ];

    protected $hidden = [];

    public function image_templates()
    {
        return $this->belongsTo(ImageTemplate::class, 'image_templates_id', 'id');
    }
}
