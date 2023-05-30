@extends('frontend.template')

@section('title','News Detail')

@section('main-content')
 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>{{ ucfirst($news_detail->title)}}</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>News Details</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{ asset('uploads/news/'.$news_detail->image)}}" alt="" class="img-fluid img-thumbnail" >
            </div>

            <h2 class="title">{{ ucfirst($news_detail->title)}}</h2>

            <div class="meta-top">
              <ul>
                
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$news_detail->created_at->diffForHumans()}}</time></a></li>
                
              </ul>
            </div><!-- End meta top -->

            <div class="content">
              <p>
                {!! $news_detail->description !!}
              </p>

              

            </div><!-- End post content -->

            {{-- <div class="meta-bottom">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="#">Business</a></li>
              </ul>

              <i class="bi bi-tags"></i>
              <ul class="tags">
                <li><a href="#">Creative</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End meta bottom --> --}}

          </article><!-- End blog post -->

         

        </div>

        
      </div>

    </div>
  </section><!-- End Blog Details Section -->
@endsection