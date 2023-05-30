<?php

namespace App\Http\Controllers\Admin\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Testimonial\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $testimonial=null;

     public function __construct(Testimonial $testimonial)
     {
        $this->testimonial=$testimonial;
     }
    public function index()
    {
        return view('admin.testimonial.index')
        ->with('testimonials',$this->testimonial->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.form');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules=$this->testimonial->getRules();
        $request->validate($rules);
        
        $data=$request->except('image');
       
        $image=uploadImage($request->image,'testimonial','1920x1080');
        if($image)
        {
            $data['image']=$image;
        }

        $data['slug']=$this->testimonial->getSlugs($request->title);

        
        

        $this->testimonial->fill($data);
        $status=$this->testimonial->save();
        if($status)
        {
            $request->session()->flash('success','Testimonial Added Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A problem While Adding Testimonial !');
        }

        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.form')
        ->with('data',$testimonial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Testimonial $testimonial)
    {
        $rules=$testimonial->getRules();
        $request->validate($rules);

        $data=$request->except('image');

        if($request->image && $request->image !=null)
        {
            $image=uploadImage($request->image,'testimonial','1080x1920');
            if($image)
            {
                if($testimonial->image && $testimonial->image !=null)
                {
                    deleteImage($testimonial->image,'testimonial');
                }
                $data['image']=$image;
            }
        }
        

        $testimonial->fill($data);
        $status=$testimonial->save();
        if($status)
        {
            $request->session()->flash('success','Testimonial Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Updating Testimonial');
        }

        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $image=$testimonial->image;
        $del=$testimonial->delete();
        if($del)
        {
            if($image && $image !=null)
            {
                deleteImage($image,'testimonial');
            }
            request()->session()->flash('success','Testimonial Deleted Successfully !');
        }
        else
        {
            request()->session()->flash('error','Sorry ! There Was A Problem While deleting Testimonial');
        }

        return redirect()->route('testimonial.index');
    
    }
}
