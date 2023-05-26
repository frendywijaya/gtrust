<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandLogo extends Model
{
    use HasFactory;

    protected $table = 'brand_logos';

    protected $fillable = [
        'title',
        'image',
    ];

    const PATH = 'uploads/brand-logo/';
}
