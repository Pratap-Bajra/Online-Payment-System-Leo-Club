@extends('frontend.template')

@section('title','Leo Club')

@section('main-content')


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
    <div class="row">
        <div class="col-xl-4">
        <h2 data-aos="fade-up">Learn Together Live Together</h2>
        <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>We encourage youths to develop leadership qualities by participating in the fields of health care, elders, children, education, and self-development. </p>
        </blockquote>
        {{-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div> --}}

        </div>
    </div>
    </div>
</section><!-- End Hero Section -->
<!-- ======= Why Choose Us Section ======= -->
{{-- <section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Why Choose Us</h2>

    </div>

    <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

      <div class="col-xl-5 img-bg" style="background-image: url('{{ asset('frontend/Nova/assets/img/why-us-bg.jpg') }}')"></div>
      <div class="col-xl-7 slides  position-relative">

        <div class="slides-1 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Let's grow your business together</h3>
                <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima maiores quidem, dolorum.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam perferendis asperiores explicabo vel tempore velit totam, natus nesciunt accusantium dicta quod quibusdam ipsum maiores nobis non, eum. Ullam reiciendis dignissimos laborum aut, magni voluptatem velit doloribus quas sapiente optio.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Unde perspiciatis ut repellat dolorem</h3>
                <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos aliquam quis.</h4>
                <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat dolor.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Aliquid non alias minus</h3>
                <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4>
                <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim dolorum fugiat aut.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum soluta nihil est. Eum similique neque autem ut.</h4>
                <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
              </div>
            </div><!-- End slide item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>

    </div>

  </div>
</section><!-- End Why Choose Us Section --> --}}

<!-- ======= Our Services Section ======= -->

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

<!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="call-to-action">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h3>Leo Club</h3>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
        <a class="cta-btn" href="{{ route('contact')}}">Contact Us</a>
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


<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-posts" class="recent-posts">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Recent News</h2>

    </div>

    <div class="row gy-5">

        @foreach($news as $data)
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-box">
                <div class="post-img"><img src="{{ asset('uploads/news/'.$data->image) }}" class="img-fluid" alt=""></div>
                <div class="meta">
                    <span class="post-date">{{ $data->created_at}}</span>
                </div>
                <h3 class="post-title">{{ ucfirst($data->title)}}</h3>
                <p>{!! Str::limit($data->description, 100)!!}</p>
                <a href="{{ route('news-detail',$data->slug)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
          </div>
        @endforeach

      

     

    </div>

  </div>
</section><!-- End Recent Blog Posts Section -->
@endsection