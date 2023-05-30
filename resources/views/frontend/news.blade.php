@extends('frontend.template')

@section('title','News')

@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>News</h2>
      <ol>
       
        <li>News</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->
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
                  <a href="{{route('news-detail',$data->slug)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>
            </div>
          @endforeach
  
        
  
       
  
      </div>
  
    </div>
  </section><!-- End Recent Blog Posts Section -->
@endsection