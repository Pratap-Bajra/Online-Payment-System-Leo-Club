@extends('frontend.template')

@section('title','Work')

@section('main-content')
{{-- {{ dd($projects)}} --}}
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Our Work</h2>
      <ol>
       
        <li>Services</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Services Section ======= -->
  {{-- <section id="services-list" class="services-list">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Work</h2>

      </div>

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
          <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Our Services Section --> --}}

  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-posts" class="recent-posts">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <h2>Our Works</h2>

    </div>

    <div class="row gy-5">

        @foreach($projects as $data)
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
                <div class="post-img"><img src="{{ asset('uploads/project/'.$data->image) }}" class="img-fluid" alt=""></div>
                <div class="meta">
                <span class="post-date">{{ $data->created_at}}</span>
                <span class="post-author"> / {{ ucfirst($data->title) }}</span>
                </div>
                <h3 class="post-title">{{ ucfirst($data->summary)}}</h3>
                <p>{!! $data->description !!}</p>
                <a href="{{ route('work-detail',$data->slug)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        @endforeach

        

        </div>

    </div>

    </div>
</section><!-- End Recent Blog Posts Section -->

  

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimonials</h2>

      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

            @foreach($testimonials as $data)
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
               {{ $data->message}}
              </p>
              <div class="profile mt-auto">
                <img src="{{ asset('uploads/testimonial/'.$data->image)}}" class="testimonial-img" alt="">
                <h3>{{ ucfirst($data->name)}}</h3>
                <h4>{{ ucfirst($data->post)}}</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->
          @endforeach

          

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
@endsection