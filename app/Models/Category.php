<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';    

    protected $fillable = [
        'title'
    ];

    // one to many relationship with blogs table
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
