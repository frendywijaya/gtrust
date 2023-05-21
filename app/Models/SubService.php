<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $table = 'sub_services';

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'description',
        'category',
    ];

    const PATH = 'images/sub_services/';
}
