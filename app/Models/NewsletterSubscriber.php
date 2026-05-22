<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'email', 'source', 'token', 'is_confirmed', 'confirmed_at', 'unsubscribed_at',
    ];

    protected $casts = [
        'is_confirmed'    => 'boolean',
        'confirmed_at'    => 'datetime',
        'unsubscribed_at' => 'datetime',
        'created_at'      => 'datetime',
    ];
}
