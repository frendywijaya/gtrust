<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;

    protected $table = 'inboxes';    

    protected $fillable = [
        'full_name',
        'company_name',
        'email',
        'phone',
        'subject',
        'message',
    ];
}
