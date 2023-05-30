<?php

namespace App\Models\Admin\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'status',
        'post',
        'image',
        'fb_link',
        'insta_link',
        'google_link'
    ];

    public function getRules()
    {
        $rules=[
            'name'=>'required|string',
            'post'=>'nullable|string',
            'status'=>'required|in:active,inactive',
            'image'=>'sometimes|image|max:5000',
            'fb_link'=>'nullable|url',
            'insta_link'=>'nullable|url',
            'google_link'=>'nullable|url'
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
