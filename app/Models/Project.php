<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["title","banner","logo","category","technologies","url","shortDescription","description","country","budget","type","status","startDate","endDate","videoUrl","clientName","clientAvatar","clientFeedback"];

}
