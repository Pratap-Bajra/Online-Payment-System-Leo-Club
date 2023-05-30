<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Member\Member;
use App\Models\User;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $member=null;
    protected $user=null;

    public function __construct(Member $member,User $user)
    {
        $this->member=$member;
        $this->user=$user;
    }
    public function index()
    {
        return view('admin.member.index')
        ->with('members',$this->member->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $rules=$this->member->getRules();
        $request->validate($rules);
        
        $data=$request->except('image');
       
        $image=uploadImage($request->image,'member','1920x1080');
        if($image)
        {
            $data['image']=$image;
        }

        $data['slug']=$this->member->getSlugs($request->name);

        
        

        $this->member->fill($data);
        $status=$this->member->save();
        if($status)
        {
            $request->session()->flash('success','Member Added Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A problem While Adding Member !');
        }

        return redirect()->route('member.index');
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
    public function edit(Member $member)
    {
        return view('admin.member.form')
        ->with('data',$member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Member $member)
    {
        $rules=$member->getRules();
        $request->validate($rules);

        $data=$request->except('image');

        if($request->image && $request->image !=null)
        {
            $image=uploadImage($request->image,'member','1080x1920');
            if($image)
            {
                if($member->image && $member->image !=null)
                {
                    deleteImage($member->image,'member');
                }
                $data['image']=$image;
            }
        }
        

        $member->fill($data);
        $status=$member->save();
        if($status)
        {
            $request->session()->flash('success','Member Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Updating Member');
        }

        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $image=$member->image;
        $del=$member->delete();
        if($del)
        {
            if($image && $image !=null)
            {
                deleteImage($image,'member');
            }
            request()->session()->flash('success','Member Deleted Successfully !');
        }
        else
        {
            request()->session()->flash('error','Sorry ! There Was A Problem While deleting Member');
        }

        return redirect()->route('member.index');
    }

    public function allMember(Request $request)
    {
        $this->user=$this->user->where('role','member')->get();
        return view('admin.member.allmember')
        ->with('members',$this->user);
    }

    public function deleteMember(Request $request,$id)
    {
       $this->user=$this->user->findOrFail($id);
       if($this->user->UserInfo && $this->user->UserInfo->image !=null)
       {
        $image=$this->user->UserInfo->image;
        if($image && $image !=null)
        {
            deleteImage($image,'user');
        }
       }
      
       $status=$this->user->delete();
       if($status)
       {
        
        $request->session()->flash('success','Member Has Been Deleted Successfully !');
       }
       else
       {
        $request->session()->flash('error','Sorry ! There Was A Problem While deleteing Member');
       }
       
       return redirect()->back();
    }
}
