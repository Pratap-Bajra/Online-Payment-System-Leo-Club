@extends('frontend.template')

@section('title','Contact')

@section('main-content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
  
          <h2>Contact</h2>
          <ol>
            <li>Contact</li>
          </ol>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container position-relative" data-aos="fade-up">
  
          <div class="row gy-4 d-flex justify-content-end">
  
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
  
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->
  
            </div>
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
              
              {{ Form::open(['url'=>route('contact.message')])}}
                @method('put')
                <div class="row">
                  <div class="col-md-6 form-group">
                    {{ Form::text('name','',['class'=>'form-control '.($errors->has('name') ?'is-invalid':''),'placeholder'=>'Enter Your Name .....','required'=>true])}}
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    {{ Form::text('email','',['class'=>'form-control '.($errors->has('email') ?'is-invalid':''),'placeholder'=>'Enter Your Email .....','required'=>true])}}
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                  </div>
                </div>
                <div class="form-group mt-3">
                  {{ Form::text('subject','',['class'=>'form-control '.($errors->has('subject') ?'is-invalid':''),'placeholder'=>'Enter Subject .....','required'=>true])}}
                    @error('subject')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  
                </div>
                <div class="form-group mt-3">
                  
                  
                  <textarea class="form-control" name="message" rows="5" placeholder="Message....." required></textarea>
                  @error('message')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="text-center" style="margin-top:10px">
                  {{ Form::button('Submit',['class'=>'btn btn-sm btn-success','type'=>'submit'])}}
                </div>
              {{ Form::close()}}
  
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
@endsection