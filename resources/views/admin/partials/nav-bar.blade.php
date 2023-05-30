<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    {{-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> --}}

      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('AdminLTE-3.2.0/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('AdminLTE-3.2.0/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('AdminLTE-3.2.0/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> --}}
      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> --}}

      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </button>
        <div class="dropdown-menu btn-hover">
          <a class="dropdown-item " href="javascript:;"  style="background-color:rgb(96, 207, 22);padding:5px 15px;color:white" data-toggle="modal" data-target="#exampleModal" >
            <i class="fa fa-user"></i>
            Update Profile</a>
          <a class="dropdown-item" href="javascript:;"  style="background-color:rgb(36, 140, 238);padding:5px 15px;color:white" data-toggle="modal" data-target="#updatePassword" >
            <i class="fa fa-key"></i>
            Update Password</a>
          
          <a href="javascript:;" onclick="event.preventDefault();document.getElementById('logout').submit();" class="dropdown-item" style="background-color:red;padding:5px 15px;color:white">
            {{ Form::open(['url'=>route('logout'),'id'=>'logout'])}}
            {{ Form::close()}}
            <i class="fa fa-sign-out"></i>
                <span>Logout</span>
            </a>
        </div>
      </div>


     
    </ul>
  </nav>


  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title " id="exampleModalLabel">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ Form::open(['url'=>route('user.updateProfile',auth()->user()->id),'files'=>true])}}
        @method('put')
        <div class="form-group">
          {{ Form::label('name','Name:')}}
          {{ Form::text('name',auth()->user()->name ?? '',['class'=>'form-control form-control-sm '.($errors->has('name') ?'is-invalid':''),'placeholder'=>'Enter Your Name.....','required'=>true])}}
          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          {{ Form::label('email','Email:')}}
          {{ Form::email('email',auth()->user()->email ?? '',['class'=>'form-control form-control-sm '.($errors->has('email') ?'is-invalid':''),'placeholder'=>'Enter Your Email.....','required'=>true,'disabled'=>true])}}
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          {{ Form::label('address','Address:')}}
          {{ Form::textarea('address',auth()->user()->UserInfo->address ?? '',['class'=>'form-control form-control-sm '.($errors->has('address') ?'is-invalid':''),'placeholder'=>'Enter Your Address.....','required'=>false,'rows'=>05,'style'=>'resize:none;'])}}
          @error('address')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          {{ Form::label('phone','Phone:')}}
          {{ Form::text('phone',auth()->user()->UserInfo->phone ?? '',['class'=>'form-control form-control-sm '.($errors->has('phone') ?'is-invalid':''),'placeholder'=>'Enter Your Phone.....','required'=>false])}}
          @error('phone')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          {{ Form::label('image','profile Image:')}}
          {{ Form::file('image',['class'=>' '.($errors->has('image') ?'is-invalid':''),'required'=>false])}}
          @error('image')
            <span class="text-danger">{{ $message }}</span>
          @enderror

          @if(auth()->user()->UserInfo && auth()->user()->Userinfo->image !=null)
            <div class="col-md-4">
              <img src="{{ asset('uploads/user/'.auth()->user()->UserInfo->image)}}" alt="" class="img-fluid img-thumbnail">
            </div>
          @endif
        </div>
        <div class="modal-footer">
          {{ Form::button('<i class="fa fa-times"></i> Reset',['class'=>'btn btn-sm btn-danger','type'=>'reset'])}}
          {{ Form::button('<i class="fa fa-paper-plane"></i> Update Profile',['class'=>'btn btn-sm btn-success','type'=>'submit'])}}
          
        </div>

        {{ Form::close()}}
      </div>
      
    </div>
  </div>
</div>

 

{{-- -------------------------------------Update Password---------------------------------------- --}}
<div class="modal fade" id="updatePassword" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white">Update Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ Form::open(['url'=>route('user.update-password',auth()->user()->id),'files'=>true,'class'=>'row g-3'])}}
        @method('put')
          <div class="col-12">
            {{ Form::label('old_password','Old Password:')}}
            {{ Form::password('old_password',['class'=>'form-control form-control-sm '.($errors->has('old_password') ?'is-invalid':''),'required'=>true,'placeholder'=>'Enter Old Password Here.....'])}}
            @error('old_password')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-12">
            {{ Form::label('password','New Password:')}}
            {{ Form::password('password',['class'=>'form-control form-control-sm '.($errors->has('password') ?'is-invalid':''),'required'=>true,'placeholder'=>'Enter New Password Here.....'])}}
            @error('password')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="col-12">
            {{ Form::label('password_confirmation','Re-Type Password:')}}
            {{ Form::password('password_confirmation',['class'=>'form-control form-control-sm '.($errors->has('password_confirmation') ?'is-invalid':''),'required'=>true,'placeholder'=>'Enter Password Again.....'])}}
            @error('password_confirmation')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

    
          <div class="modal-footer">
            {{ Form::button('<i class="fa fa-times"></i> Reset',['class'=>'btn btn-sm btn-danger','type'=>'reset'])}}
            {{ Form::button('<i class="fa fa-paper-plane"></i> Update',['class'=>'btn btn-sm btn-success','type'=>'submit'])}}
          </div>
        {{ Form::close()}}
      </div>
      
    </div>
  </div>
</div>
{{-- -------------------------------------Update Password---------------------------------------- --}}

