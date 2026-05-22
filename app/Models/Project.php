<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project_category_id', 'title', 'slug', 'client_name', 'tagline', 'summary',
        'problem', 'solution', 'outcome', 'tech_stack', 'banner_image_path',
        'logo_image_path', 'live_url', 'playstore_url', 'appstore_url', 'github_url',
        'region', 'industry', 'duration_from', 'duration_to', 'team_size',
        'is_featured', 'is_published', 'sort_order', 'meta_title', 'meta_description', 'published_at',
    ];

    protected $casts = [
        'tech_stack'   => 'array',
        'is_featured'  => 'boolean',
        'is_published' => 'boolean',
        'duration_from' => 'date',
        'duration_to'   => 'date',
        'published_at'  => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
