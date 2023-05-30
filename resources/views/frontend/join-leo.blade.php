@extends('frontend.template')

@section('title','Join Leo Form')

@section('main-content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Join Leo</h2>
        <ol>
            
            <li>Register</li>
        </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <section id="recent-posts" class="recent-posts">
        <div class="container" data-aos="fade-up">
      
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
              
                {{ Form::open(['url'=>route('join.store'),'files'=>true])}}
                  @method('put')
                  <div class="row">
                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('name','Name:')}}
                      {{ Form::text('name','',['class'=>'form-control '.($errors->has('name') ?'is-invalid':''),'placeholder'=>'Enter Your Name .....','required'=>true])}}
                      @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('email','Email:')}}
                      {{ Form::text('email','',['class'=>'form-control '.($errors->has('email') ?'is-invalid':''),'placeholder'=>'Enter Your Email .....','required'=>true])}}
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
 
                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('password','Password:')}}
                      {{ Form::password('password',['class'=>'form-control '.($errors->has('password') ?'is-invalid':''),'placeholder'=>'Enter Your Password .....','required'=>true])}}
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('address','Address 1:')}}
                      {{ Form::textarea('address','',['class'=>'form-control '.($errors->has('address') ?'is-invalid':''),'placeholder'=>'Enter Your Temporary .....','required'=>false,'rows'=>05,'style'=>'resize:none;'])}}
                      @error('address')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('address2','Address 2:')}}
                      {{ Form::textarea('address2','',['class'=>'form-control '.($errors->has('address2') ?'is-invalid':''),'placeholder'=>'Enter Your Permanent .....','required'=>false,'rows'=>05,'style'=>'resize:none;'])}}
                      @error('address2')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('phone','Phone:')}}
                      {{ Form::text('phone','',['class'=>'form-control '.($errors->has('phone') ?'is-invalid':''),'placeholder'=>'Enter Your Phone .....','required'=>false])}}
                      @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>      
                    
                    
                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('date_birth','date Of Birth:')}}
                      {{ Form::date('date_birth','',['class'=>'form-control '.($errors->has('date_birth') ?'is-invalid':''),'placeholder'=>'Enter Your Date Birth .....','required'=>false])}}
                      @error('date_birth')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>   

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                        {{ Form::label('blood_group','Blood Group:')}}
                      {{ Form::text('blood_group','',['class'=>'form-control '.($errors->has('blood_group') ?'is-invalid':''),'placeholder'=>'Enter Your Blood Group .....','required'=>false])}}
                      @error('blood_group')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                      
                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                       
                        {{ Form::label('profession','Profession:')}}
                      {{ Form::text('profession','',['class'=>'form-control '.($errors->has('profession') ?'is-invalid':''),'placeholder'=>'Enter Your Profession .....','required'=>false])}}
                      @error('profession')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                       
                        {{ Form::label('hobbies','Hobbies:')}}
                      {{ Form::text('hobbies','',['class'=>'form-control '.($errors->has('hobbies') ?'is-invalid':''),'placeholder'=>'Enter Your Hobbies .....','required'=>false])}}
                      @error('hobbies')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>  


                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                       
                        {{ Form::label('gender','Gender:')}}
                      {{ Form::select('gender',['male'=>'Male','female'=>'Female'],[],['class'=>'form-control '.($errors->has('gender') ?'is-invalid':''),'placeholder'=>'-----Select Any One-----','required'=>true])}}
                      @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div> 

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                       
                        {{ Form::label('image','Image:')}}
                      {{ Form::file('image',['class'=>' '.($errors->has('image') ?'is-invalid':''),'required'=>true])}}
                      @error('image')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div> 

                    <hr>
                    <h1 style="text-align: center;background-color:grey;color:white">Bank details</h1>
                    <hr>

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                       
                        {{ Form::label('bank_id','Bank Id:')}}
                      {{ Form::select('bank_id',@$bank->pluck('bank_name','id'),[],['class'=>'form-control '.($errors->has('bank_id') ?'is-invalid':''),'placeholder'=>'-----Select Any One-----','required'=>true])}}
                      @error('bank_id')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div> 

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                       
                        {{ Form::label('account_num','Account Num:')}}
                      {{ Form::text('account_num','',['class'=>'form-control '.($errors->has('account_num') ?'is-invalid':''),'placeholder'=>'Enter Your Account Num .....','required'=>true])}}
                      @error('account_num')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-md-6 form-group" style="margin-bottom: 20px;">
                       
                        {{ Form::label('payment',' Payment:')}}
                      {{ Form::text('payment','',['class'=>'form-control '.($errors->has('payment') ?'is-invalid':''),'placeholder'=>'Enter Total Payment Amount .....','required'=>true])}}
                      @error('payment')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  <div class="text-center" style="margin-top:10px">
                    {{ Form::button('<i class=""></i>Register',['class'=>'btn btn-sm btn-success','type'=>'submit'])}}
                  </div>
                {{ Form::close()}}
    
              </div><!-- End Contact Form -->
    
      
        </div>
      </section>
 
@endsection