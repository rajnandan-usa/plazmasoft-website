<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'role', 'bio', 'avatar_path', 'email',
        'linkedin_url', 'github_url', 'twitter_url',
        'sort_order', 'is_published', 'is_founder',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_founder'   => 'boolean',
    ];
}
