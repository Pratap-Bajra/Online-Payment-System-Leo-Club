<?php

namespace App\Http\Controllers\Admin\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AboutUs\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $aboutus=null;

    public function __construct(AboutUs $aboutus)
    {
        $this->aboutus=$aboutus;
    }
    public function index()
    {
        return view('admin.aboutus.index')
        ->with('aboutus',$this->aboutus->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(AboutUs $aboutus,$id)
    {
        $aboutus=$aboutus->findOrFail($id);

        return view('admin.aboutus.form')->with('data',$aboutus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->aboutus=$this->aboutus->findOrFail($id);
        
        $rules=$this->aboutus->getRules();
        $request->validate($rules);
        $data=$request->except(['image','leo_image']);
        
        $data['slug']=$this->aboutus->getSlugs($request->title);
        
        if($request->image)
        {
            $image=uploadImage($request->image,'aboutus','1080x1920');
            if($image)
            {
                if($this->aboutus->image && $this->aboutus->image !=null)
                {
                    deleteImage($this->aboutus->image,'aboutus');
                }
                $data['image']=$image;
            }
        }

        if($request->leo_image)
        {
            $leo_image=uploadImage($request->leo_image,'aboutus','300x300');
            if($leo_image)
            {
                if($this->aboutus->leo_image && $this->aboutus->leo_image !=null)
                {
                    deleteImage($this->aboutus->leo_image,'aboutus');
                }
                $data['leo_image']=$leo_image;
            }
        }

        $this->aboutus->fill($data);
        $status=$this->aboutus->save();
        if($status)
        {
            $request->session()->flash('success','About Us Page Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry There Was A Problem While Updating About Us Page !');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
