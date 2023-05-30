@include('frontend.partials.header')

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="frontend/Nova/assets/img/miracle.png" alt=""> 
        <h1 class="d-flex align-items-center">Leo Clubs Of Kathmandu <br> Miracle</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      @include('frontend.partials.nav-bar')
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

  <main id="main">
    
    @yield('main-content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Leo Club</span>
            </a>
            <p>
              Leo Club Of Kathmandu Miracle
              This is the website about LEO club of Kathmandu Miracle where we believe in Team magic and Never Giving up Attitude.
            </p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>About Us</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="{{ route('home')}}">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('aboutus')}}">About</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('services')}}">Work</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('teams')}}">Member</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('news')}}">News</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('contact')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Legal</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

 @include('frontend.partials.footer')