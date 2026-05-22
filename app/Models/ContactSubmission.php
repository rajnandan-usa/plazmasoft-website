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
    ];
}
