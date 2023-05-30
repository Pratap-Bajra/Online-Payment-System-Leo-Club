<?php

namespace App\Models\Admin\Banner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'url',
        'status',
        'image',
        'slug'
    ];


    public function getRules($act='add')
    {
        $rules=[
            'title'=>'required|string',
            'url'=>'nullable|url',
            'status'=>'required|in:active,inactive',
            'image'=>'required|image|max:5000'
        ];

        if($act !='add')
        {
            $data['image']='sometimes|image|max:5000';
        }

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
