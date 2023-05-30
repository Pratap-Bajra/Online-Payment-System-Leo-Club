@extends('admin.template')

@section('title','Admin || About Us-Form')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Us List</li>
              <li class="breadcrumb-item active">About Us Form</li>
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
              {{ Form::open(['url'=>route('aboutus.update',$data->id),'files'=>true])}}
              @method('put')
              @else
              {{ Form::open(['url'=>route('aboutus.store'),'files'=>true])}}
              @endisset
                <div class="card-body">
                  <div class="form-group">
                    {{ Form::label('title','Title')}}
                    {{ Form::text('title',@$data->title,['class'=>'form-control '.($errors->has('title') ?'is-invalid':''),'placeholder'=>'Enter About Us Title Here.....','required'=>true])}}
                    @error('title')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    {{ Form::label('description','Description')}}
                    {{ Form::textarea('description',@$data->description,['class'=>'form-control '.($errors->has('description') ?'is-invalid':''),'placeholder'=>'Enter About Us description Here.....','required'=>false,'rows'=>'05','style'=>'resize:none;'])}}
                    @error('description')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

              

                  <div class="form-group">
                    {{ Form::label('image','About Us Image')}}
                    {{ Form::file('image',['class'=>''.($errors->has('image') ?'is-invalid':''),'required'=>false])}}
                    @error('image')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror

                    @isset($data->image)
                      <div class="col-md-2">
                        <img src="{{ asset('uploads/aboutus/'.$data->image)}}" alt="" class="img img-fluid img-thumbnail">
                      </div>
                    @endisset
                  </div>

                </div>


               
                <div class="card-body">
                  <h1>About Leo</h1>
                  <div class="form-group">
                    {{ Form::label('about_leo','About Leo')}}
                    {{ Form::textarea('about_leo',@$data->about_leo,['class'=>'form-control '.($errors->has('about_leo') ?'is-invalid':''),'placeholder'=>'Enter about_leo Here.....','required'=>false,'rows'=>'03','style'=>'resize:none;'])}}
                    @error('about_leo')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    {{ Form::label('leo_description','Leo Description')}}
                    {{ Form::textarea('leo_description',@$data->leo_description,['class'=>'form-control '.($errors->has('leo_description') ?'is-invalid':''),'placeholder'=>'Enter About Us leo_description Here.....','required'=>false,'rows'=>'05','style'=>'resize:none;'])}}
                    @error('leo_description')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    {{ Form::label('leo_image','Leo Image')}}
                    {{ Form::file('leo_image',['class'=>''.($errors->has('leo_image') ?'is-invalid':''),'required'=>false])}}
                    @error('leo_image')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror

                    @isset($data->leo_image)
                      <div class="col-md-2">
                        <img src="{{ asset('uploads/aboutus/'.$data->leo_image)}}" alt="" class="img img-fluid img-thumbnail">
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

  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('leo_description', {
filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
filebrowserUploadMethod: 'form'
});
</script>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('description', {
filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
filebrowserUploadMethod: 'form'
});
</script>
@endsection