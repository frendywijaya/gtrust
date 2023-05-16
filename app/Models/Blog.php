<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    const PATH = 'uploads/blogs/';

    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'writer',
        'category_id',
        'status',
        'date'
    ];

    // relation with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
