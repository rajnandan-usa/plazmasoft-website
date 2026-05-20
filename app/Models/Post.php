<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'admin_id', 'title', 'slug', 'description', 'image', 'content', 'status'];


    // Boot method to hook into the model events
    protected static function booted()
    {
        // Automatically generate a slug before saving the post
        static::saving(function ($post) {
            if (empty($post->slug)) {
                $slug = Str::slug($post->title); // Generate slug from the title

                // Ensure the slug is unique
                $originalSlug = $slug;
                $count = 1;
                while (Post::where('slug', $slug)->exists()) {
                    $slug = "{$originalSlug}-{$count}";
                    $count++;
                }

                $post->slug = $slug;
            }
        });



        // Ensure slug is updated when the post is updated (in case title changes after saving)
        static::updating(function ($post) {
            // Only update the slug if the title has changed
            if ($post->isDirty('title')) {
                $slug = Str::slug($post->title);

                // Ensure the slug is unique
                $originalSlug = $slug;
                $count = 1;
                while (Post::where('slug', $slug)->where("id", "!=", $post->id)->exists()) {
                    $slug = "{$originalSlug}-{$count}";
                    $count++;
                }

                $post->slug = $slug;
            }
        });
    }


    protected $casts = [
        'status' => 'boolean',
    ];



    // Define relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
