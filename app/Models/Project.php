<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable =
    [
        'title',
        'slug',
        'image',
        'description',
        'category',
        'project_date',
        'client',
        'participants',
        'goal',
        'activity',
        'status',
    ];

    const PATH = "uploads/projects/";

    const CATEGORY = [
        'Learning' => 'Learning',
        'Facilitation' => 'Facilitation',
    ];
}
