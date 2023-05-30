<?php

namespace App\Models\Admin\Bank;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberBank extends Model
{
    use HasFactory;

    protected $fillable=[
        'member_id',
        'bank_id',
        'account_num',
        'payment'
    ];
}
