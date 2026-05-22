<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'service_category_id', 'title', 'slug', 'tagline', 'excerpt', 'description',
        'icon', 'hero_image_path', 'tech_stack', 'features', 'process_blurb', 'faq',
        'meta_title', 'meta_description', 'og_image_path', 'is_published', 'sort_order', 'published_at',
    ];

    protected $casts = [
        'tech_stack'   => 'array',
        'features'     => 'array',
        'faq'          => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];
}
