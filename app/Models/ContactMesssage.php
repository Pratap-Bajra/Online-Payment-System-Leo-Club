<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMesssage extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'subject',
        'message'
    ];

    public function getRules()
    {
        $rules=[
            'name'=>'required|string',
            'email'=>'required|email',
            'subject'=>'required|string',
            'message'=>'required|string'
        ];

        return $rules;
    }
}
