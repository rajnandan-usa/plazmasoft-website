<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'company', 'project_type', 'budget_range',
        'message', 'attachment_path', 'source', 'source_url', 'ip_address',
        'user_agent', 'status', 'admin_notes',
        'open_token', 'autoreply_sent_at', 'email_opened_at', 'email_open_count',
    ];

    protected $casts = [
        'autoreply_sent_at' => 'datetime',
        'email_opened_at'   => 'datetime',
    ];
}
