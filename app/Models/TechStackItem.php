<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechStackItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'logo_path', 'sort_order', 'is_featured'];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}
