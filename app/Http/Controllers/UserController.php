<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;
use Hash;
class UserController extends Controller
{
    protected $user=null;
    protected $user_info=null;

    public function __construct(User $user,UserInfo $user_info)
    {
        $this->user=$user;
        $this->user_info=$user_info;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function updateProfile(Request $request,$id)
    {
       
        $this->user=$this->user->findOrFail($id);
        
        $rules=$this->user->getRules();
        $request->validate($rules);
        $data=$request->except('image');

        

        $this->user->fill($data);
        $status=$this->user->save();
        if($status)
        {

            $this->user_info=$this->user->UserInfo;

            if(! $this->user_info)
            {
                $this->user_info=new UserInfo();
            }

            if($request->image)
            {
                $image=uploadImage($request->image,'user','200x200');
                if($image)
                {
                    if($this->user->UserInfo && $this->user->UserInfo->image !=null)
                    {
                        deleteImage($this->user->UserInfo->image,'user');
                    }
                    $data['image']=$image;
                }
            }

            $data['user_id']=$this->user->id;

            $this->user_info->fill($data);
            $this->user_info->save();


            $request->session()->flash('success','Your Profile Has Been Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Updating Your Profile');
        }
        
        return redirect()->back();
    }


    public function updatePassword(Request $request,$id)
    {
        // dd($request->all());
        $this->user=$this->user->findOrFail($id);

        $rules=[
            'old_password'=>'required',
            'password'=>'required|confirmed'
        ];

        $request->validate($rules);

        $d=$request->old_password;

        $result=Hash::check($d, $this->user->password);

       
        
        if(!$result)
        {
            $request->session()->flash('error','Your Old Password Doesnot Match Our Records !');
            

            return redirect()->back();
        }

        $this->user->password=bcrypt($request->password);
        $status=$this->user->save();

        if($status)
        {
            $request->session()->flash('success','User Password Has Been Updated Successfully !');
        }
        else
        {
            $request->session()->flash('error','Soory ! There Was A Problem While Updating User Password !');
        }
        
        return redirect()->back();
    }
}
