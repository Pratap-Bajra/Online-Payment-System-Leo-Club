<?php

namespace App\Models\Admin\Bank;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable=[
        'bank_name',
        'bank_acc',
        'status'
    ];
}
