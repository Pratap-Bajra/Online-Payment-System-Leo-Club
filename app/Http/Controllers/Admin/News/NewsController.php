<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\News\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $news=null;
    
    public function __construct(News $news)
    {
        $this->news=$news;
    }
    public function index()
    {
        $this->news=$this->news->get();

        return view('admin.news.index')
        ->with('news',$this->news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=$this->news->getRules();
        $request->validate($rules);
        
        $data=$request->except('image');
       
        $image=uploadImage($request->image,'news','1920x1080');
        if($image)
        {
            $data['image']=$image;
        }

        $data['slug']=$this->news->getSlugs($request->title);

        $this->news->fill($data);
        $status=$this->news->save();
        if($status)
        {
            $request->session()->flash('success','News Added Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A problem While Adding News !');
        }

        return redirect()->route('news.index');
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
    public function edit(News $news)
    {
        return view('admin.news.form')
        ->with('data',$news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $news)
    {
        $rules=$news->getRules('update');
        $request->validate($rules);

        $data=$request->except('image');

        if($request->image && $request->image !=null)
        {
            $image=uploadImage($request->image,'news','1080x1920');
            if($image)
            {
                if($news->image && $news->image !=null)
                {
                    deleteImage($news->image,'news');
                }
                $data['image']=$image;
            }
        }
        

        $news->fill($data);
        $status=$news->save();
        if($status)
        {
            $request->session()->flash('success','News Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Updating News');
        }

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $image=$news->image;
        $del=$news->delete();
        if($del)
        {
            if($image && $image !=null)
            {
                deleteImage($image,'news');
            }
            request()->session()->flash('success','News Deleted Successfully !');
        }
        else
        {
            request()->session()->flash('error','Sorry ! There Was A Problem While deleting News');
        }

        return redirect()->route('news.index');
    }
}
