<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $project=null;

    public function __construct(Project $project)
    {
        $this->project=$project;
    }
    public function index()
    {
        return view('admin.project.index')
        ->with('projects',$this->project->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=$this->project->getRules();
        $request->validate($rules);
        
        $data=$request->except('image');
       
        $image=uploadImage($request->image,'project','1920x1080');
        if($image)
        {
            $data['image']=$image;
        }

        $data['slug']=$this->project->getSlugs($request->title);

      

        $this->project->fill($data);
        $status=$this->project->save();
        if($status)
        {
            $request->session()->flash('success','Project Added Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A problem While Adding Project !');
        }

        return redirect()->route('project.index');
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
    public function edit(Project $project)
    {
        return view('admin.project.form')
        ->with('data',$project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,project $project)
    {
        
        
        $rules=$project->getRules('update');
        $request->validate($rules);

        $data=$request->except('image');

        if($request->image && $request->image !=null)
        {
            $image=uploadImage($request->image,'project','1080x1920');
            if($image)
            {
                if($project->image && $project->image !=null)
                {
                    deleteImage($project->image,'project');
                }
                $data['image']=$image;
            }
        }
        

        $project->fill($data);
        $status=$project->save();
        if($status)
        {
            $request->session()->flash('success','Project Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Updating Project');
        }

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $image=$project->image;
        $del=$project->delete();
        if($del)
        {
            if($image && $image !=null)
            {
                deleteImage($image,'project');
            }
            request()->session()->flash('success','Project Deleted Successfully !');
        }
        else
        {
            request()->session()->flash('error','Sorry ! There Was A Problem While deleting Project');
        }

        return redirect()->route('project.index');
    }
}
