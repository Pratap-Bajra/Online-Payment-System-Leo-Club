<?php

namespace App\Models\Admin\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'summary',
        'description',
        'status',
        'image'
    ];

    public function getRules($act='add')
    {
        $rules=[
            'title'=>'required|string',
            'summary'=>'nullable|string',
            'description'=>'nullable|string',
            'status'=>'required|in:active,inactive',
            'image'=>'required|image|max:5000'
        ];

        if($act !='add')
        {
            $rules['image']='sometimes|image|max:5000';
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
