<?php

namespace App\Models\Admin\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'status',
        'image',
        'description'
    ];

    public function getRules($act='add')
    {
        $rules=[
            'title'=>'required|string',
            'description'=>'nullable|string',
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
