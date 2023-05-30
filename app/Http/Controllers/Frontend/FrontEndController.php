<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Banner\Banner;
use App\Models\Admin\AboutUs\AboutUs;
use App\Models\Admin\Member\Member;
use App\Models\Admin\Testimonial\Testimonial;
use App\Models\Admin\News\News;
use App\Models\UserInfo;
use App\Models\User;
use App\Models\Admin\Bank\Bank;
use App\Models\Admin\Bank\MemberBank;
use App\Models\Admin\Project\Project;
use App\Models\ContactMesssage;

class FrontEndController extends Controller
{

    protected $banner=null;
    protected $aboutus=null;
    protected $member=null;
    protected $testimonial=null;
    protected $news=null;

    protected $user_info=null;
    protected $user=null;
    protected $bank=null;
    protected $member_bank=null;
    protected $project=null;
    protected $contact_message=null;

    public function __construct(Banner $banner,AboutUs $aboutus,Member $member,Testimonial $testimonial,News $news,UserInfo $user_info,User $user,Bank $bank,MemberBank $member_bank,Project $project,ContactMesssage $contact_message)
    {
        $this->banner=$banner;
        $this->aboutus=$aboutus;
        $this->member=$member;
        $this->testimonial=$testimonial;
        $this->news=$news;
        $this->user_info=$user_info;
        $this->user=$user;
        $this->bank=$bank;
        $this->member_bank=$member_bank;
        $this->project=$project;
        $this->contact_message=$contact_message;

    }


    public function home()
    {
        $banner=$this->banner->where('status','active')->orderBy('id','DESC')->get();

        $aboutus=$this->aboutus->first();

        $member=$this->member->where('status','active')->orderBy('id','ASC')->get();

        $testimonial=$this->testimonial->where('status','active')->orderBy('id','DESC')->get();

        $news=$this->news->where('status','active')->orderBy('id','DESC')->limit(4)->latest()->get();

        $projects=$this->project->where('status','active')->limit(4)->get();


        
        return view('frontend.index')
        ->with('banners',$banner)
        ->with('aboutus',$aboutus)
        ->with('members',$member)
        ->with('testimonials',$testimonial)
        ->with('news',$news)
        ->with('projects',$projects);
    }

    public function joinLions()
    {
        $bank=$this->bank->where('status','active')->get();
        

        return view('frontend.join-leo')
        ->with('bank',$bank);
    }

    public function registerMember(Request $request)
    {
        
        $rules=[
            "name" => "required|string",
            "address" => "required|string",
            "address2" => "nullable|string",
            "phone" => "nullable|string",
            "date_birth" => "required|date",
            "blood_group" => "nullable|string",
            "profession" => "nullable|string",
            "hobbies" => "nullable|string",
            "image"=>'required|image|max:5000',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5',
            'gender'=>'required|in:male,female',
            'bank_id'=>'required|exists:banks,id',
            'payment'=>'required|string',
            'account_num'=>'required|string'
        ];

        $request->validate($rules);
        $data=$request->except('image');
        $data['password']=bcrypt($request->password);

       
        $data['status']='active';
        $data['role']='member';

        $this->user->fill($data);
        $status=$this->user->save();
        if($status)
        {
            $image=uploadImage($request->image,'user','216x216');
            if($image)
            {
                $data['image']=$image;
            }
            $data['user_id']=$this->user->id;

            $this->user_info->fill($data);
            $this->user_info->save();

            $data['member_id']=$this->user->id;
            $this->member_bank->fill($data);
            $this->member_bank->save();
            $request->session()->flash('success','Thanks ! Your Registration And Payment Has Been Completed Successfully !');

        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Registrating Your Account');
        }

        return redirect()->route('join.lions');
        

    }


    public function aboutUs()
    {
        $aboutus=$this->aboutus->first();

        $member=$this->member->where('status','active')->orderBy('id','ASC')->get();
        return view('frontend.about')
        ->with('aboutus',$aboutus)
        ->with('members',$member);
    }

    public function services()
    {
        $projects=$this->project->where('status','active')->get();

        $testimonial=$this->testimonial->where('status','active')->orderBy('id','DESC')->get();


        return view('frontend.services')
        ->with('projects',$projects)
        ->with('testimonials',$testimonial);
    }

    public function news()
    {

        $news=$this->news->where('status','active')->orderBy('id','DESC')->get();
        return view('frontend.news')
        ->with('news',$news);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function teams()
    {
        $member=$this->user->where('role','member')->where('status','active')->get();
        $member_team=$this->member->where('status','active')->orderBy('id','ASC')->get();
        return view('frontend.teams')
        ->with('members',$member)
        ->with('member_team',$member_team);
    }

    public function newsDetails(Request $request,$slug)
    {
       $this->news=$this->news->where('slug',$slug)->firstOrFail();
       
       return view('frontend.news_detail')
       ->with('news_detail',$this->news);
    }

    public function workdetail(Request $request,$slug)
    {
        $this->project=$this->project->where('slug',$slug)->firstOrFail();
        
        return view('frontend.work-detail')
        ->with('work',$this->project);
    }

    public function saveMessage(Request $request)
    {
        $rules=$this->contact_message->getRules();

        $request->validate($rules);
        $data=$request->all();
        
        $this->contact_message->fill($data);
        $status=$this->contact_message->save();
        if($status)
        {
            $request->session()->flash('success','Your Message Has Been Sent Successfully !');
        }
        else
        {
            $request->session()->flash('error','Sorry ! There Was A Problem While Sending A Message');
        }

        return redirect()->back();
    }
}
