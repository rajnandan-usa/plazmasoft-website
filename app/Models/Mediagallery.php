<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediagallery extends Model
{
    use HasFactory;

 
    protected $fillable = ['mediaFile', 'type', 'description',"tags",'status'];


    public function galleryTag()
    {
        return $this->belongsTo(GalleryTag::class, 'gallery_tag_id');
    }
}
