<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Info extends Model
{

    protected $table = 'user_info';
    protected $fillable = [
        'full_name',
        'user_name',
        'email',
        'role',
        'u_id',
        'mobile',
        'dept',
        'type',
    ];
      
}

