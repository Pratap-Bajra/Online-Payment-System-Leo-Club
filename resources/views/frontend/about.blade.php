@extends('frontend.template')

@section('title','About Us Page')

@section('main-content')


{{-- {{ dd($members)}} --}}
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
  
          <h2>About</h2>
          <ol>
            
            <li>About</li>
          </ol>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4" data-aos="fade-up">
            <div class="col-lg-4">
              <img src="{{ asset('uploads/aboutus/'.$aboutus->image)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8">
              <div class="content ps-lg-5">
                <h3>{{ ucfirst($aboutus->title)}}</h3>
                <p>
                  {!! $aboutus->description!!}
                </p>
                
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
      <!-- ======= Why Choose Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>About Leo</h2>
            <p>{{ ucfirst($aboutus->about_leo)}}</p>
  
          </div>
  
          <div class="row g-0" >
  
            <div class="col-xl-4 "  style="background-image: url('{{ asset('uploads/aboutus/'.$aboutus->leo_image)}}');background-repeat:no-repeat;;height:300px;width:300px; margin-right:100px">

            </div>
            <div class="col-xl-7 slides  position-relative">
  
                <p>
                    {!! $aboutus->leo_description!!}
                </p>
              
            </div>
  
          </div>
  
        </div>
      </section><!-- End Why Choose Us Section -->
  
      <!-- ======= Call To Action Section ======= -->
      <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h3>Contact Us</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
  
        </div>
      </section><!-- End Call To Action Section -->
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Core Team</h2>
  
          </div>
  
          <div class="row gy-4">

            @foreach($members as $data)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                  <div class="member-img" style="border-radius:50%;">
                    <img src="{{ 'uploads/member/'.$data->image}}" style="width:100%;height:100%;"class="img-fluid" alt="">
                    <div class="social">
                      <a href="{{ $data->fb_link}}" target="_blank"><i class="bi bi-facebook"></i></a>
                      <a href="{{ $data->insta_link}}" target="_blank"><i class="bi bi-instagram"></i></a>
                      <a href="{{ $data->google_link}}" target="_blank"><i class="bi bi-google"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ ucfirst($data->name)}}</h4>
                    <span>{{ ucfirst($data->post)}}</span>
                  </div>
                </div>
              </div><!-- End Team Member -->
            @endforeach
  
            
  
            
  
          </div>
  
        </div>
      </section><!-- End Team Section -->
  
@endsection