<?php

namespace App\Models\Admin\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'image',
        'about_leo',
        'leo_description',
        'leo_image',
        'slug'
    ];

    public function getRules()
    {
        $rules=[
            'title'=>'required|string',
            'description'=>'nullable|string',
            'image'=>'sometimes|image|max:5000',
            'about_leo'=>'nullable|string',
            'leo_description'=>'nullable|string',
            'leo_image'=>'sometimes|image|max:5000'
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
