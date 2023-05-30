<?php

namespace App\Models\Admin\Testimonial;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'status',
        'message',
        'post',
        'image'
    ];

    public function getRules()
    {
        $rules=[
            'name'=>'required|string',
            'post'=>'nullable|string',
            'message'=>'nullable|string',
            'status'=>'required|in:active,inactive',
            'image'=>'sometimes|image|max:5000'
        ];

        

        return $rules;
    }

    public function getSlugs($title)
    {
        $slug=\Str::slug($title);

        if($this->where('slug',$slug)->count() >0)
        {
            $slug=$slug.'-'.rand(0,9999);
            $this->getSlugs($slug);
        }

        return $slug;
    }
}
