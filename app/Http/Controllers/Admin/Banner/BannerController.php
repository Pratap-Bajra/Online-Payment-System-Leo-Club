<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Banner\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $banner=null;

    public function __construct(Banner $banner)
    {
        $this->banner=$banner;
    }
    public function index()
    {
        $this->banner=$this->banner->get();

        return view('admin.banner.index')
        ->with('banners',$this->banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=$this->banner->getRules();
        $request->validate($rules);
        
        $data=$request->except('image');
        $image=uploadImage($request->image,'banner','1920x1080');
        if($image)
        {
            $data['image']=$image;
        }

        $data['slug']=$this->banner->getSlugs($request->title);

        $this->banner->fill($data);
        $status=$this->banner->save();
        if($status)
        {
            $request->session()->flash('success','Banner Added Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A problem While Adding Banner !');
        }

        return redirect()->route('banner.index');

        
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
    public function edit(Banner $banner)
    {
        return view('admin.banner.form')
        ->with('data',$banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Banner $banner)
    {
        $rules=$banner->getRules('update');
        $request->validate($rules);

        $data=$request->except('image');

        if($request->image && $request->image !=null)
        {
            $image=uploadImage($request->image,'banner','1080x1920');
            if($image)
            {
                if($banner->image && $banner->image !=null)
                {
                    deleteImage($banner->image,'banner');
                }
                $data['image']=$image;
            }
        }
        

        $banner->fill($data);
        $status=$banner->save();
        if($status)
        {
            $request->session()->flash('success','Banner Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Updating Banner');
        }

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $image=$banner->image;
        $del=$banner->delete();
        if($del)
        {
            if($image && $image !=null)
            {
                deleteImage($image,'banner');
            }
            request()->session()->flash('success','Banner Deleted Successfully !');
        }
        else
        {
            request()->session()->flash('error','Sorry ! There Was A Problem While deleting Banner');
        }

        return redirect()->route('banner.index');
    }
}
