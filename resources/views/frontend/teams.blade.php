@extends('frontend.template')

@section('title','Member')

@section('main-content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/team-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>All Member</h2>
      <ol>
        <
        <li>Member</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Team</h2>

      </div>

      <div class="row gy-4">
        @foreach($members as $data)
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ asset('uploads/member_register/'.@$data->UserInfo->image)}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{ ucfirst($data->name)}}</h4>
              <span>{{ ucfirst($data->role)}}</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endforeach

        @foreach($member_team as $data)
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ asset('uploads/member/'.@$data->image)}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{ ucfirst($data->name)}}</h4>
              <span>{{ ucfirst($data->role)}}</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endforeach

        

      </div>

    </div>
  </section><!-- End Team Section -->
@endsection