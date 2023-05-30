<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'address',
        'phone',
        'image',
        'adrdess2',
        'gender',
        'date_birth',
        'blood_group',
        'profession',
        'hobbies'
    ];
}
