<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'author_name', 'author_role', 'author_company', 'author_location',
        'author_avatar_path', 'quote', 'rating', 'is_featured', 'sort_order', 'is_published',
    ];

    protected $casts = [
        'is_featured'  => 'boolean',
        'is_published' => 'boolean',
        'rating'       => 'integer',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
