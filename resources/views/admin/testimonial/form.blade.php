@extends('admin.template')

@section('title','Admin || Testimonial-Form')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonial Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Testimonial List</li>
              <li class="breadcrumb-item active">Testimonial Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title text-center">Field Items</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @isset($data)
              {{ Form::open(['url'=>route('testimonial.update',$data->id),'files'=>true])}}
              @method('put')
              @else
              {{ Form::open(['url'=>route('testimonial.store'),'files'=>true])}}
              @endisset
                <div class="card-body">
                  <div class="form-group">
                    {{ Form::label('name','Name')}}
                    {{ Form::text('name',@$data->name,['class'=>'form-control '.($errors->has('name') ?'is-invalid':''),'placeholder'=>'Enter  Name Here.....','required'=>true])}}
                    @error('name')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    {{ Form::label('post','Post')}}
                    {{ Form::text('post',@$data->post,['class'=>'form-control '.($errors->has('post') ?'is-invalid':''),'placeholder'=>'Enter  post Here.....','required'=>true])}}
                    @error('post')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    {{ Form::label('message','Message')}}
                    {{ Form::textarea('message',@$data->message,['class'=>'form-control '.($errors->has('message') ?'is-invalid':''),'placeholder'=>'Enter Testimonial message Here.....','required'=>false,'rows'=>'05','style'=>'resize:none;'])}}
                    @error('message')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    {{ Form::label('status','Status')}}
                    {{ Form::select('status',['active'=>'Active','inactive'=>'In-Active'],@$data->status,['class'=>'form-control '.($errors->has('status') ?'is-invalid':''),'placeholder'=>'-----Select Any One-----','required'=>true])}}
                    @error('status')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    {{ Form::label('image','Testimonial Image')}}
                    {{ Form::file('image',['class'=>''.($errors->has('image') ?'is-invalid':''),'required'=>false])}}
                    @error('image')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror

                    @isset($data->image)
                      <div class="col-md-2">
                        <img src="{{ asset('uploads/testimonial/'.$data->image)}}" alt="" class="img img-fluid img-thumbnail">
                      </div>
                    @endisset
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  {{ Form::button('Reset',['class'=>'btn btn-danger','type'=>'reset'])}}
                 @isset($data)
                 {{ Form::button('Update',['class'=>'btn btn-primary','type'=>'submit'])}}
                 @else
                 {{ Form::button('Add',['class'=>'btn btn-primary','type'=>'submit'])}}
                 @endisset
                </div>
              {{ Form::close()}}
            </div>
            <!-- /.card -->

            

          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection