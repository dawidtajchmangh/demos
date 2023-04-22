<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'my_email',
        'user_email',
        'my_message',
        'user_message',
        'filenames',
        'type'
    ];
   
}

