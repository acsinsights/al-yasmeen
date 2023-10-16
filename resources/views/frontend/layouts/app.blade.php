<!doctype html>
<html lang="en">

<head>
    <title> AL Yasmeen | @yield('title') </title>
    @include('frontend.layouts.header')
</head>
<body>
    <!-- Preloader Start -->
    <section>
        <div id="preloader">
          <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
              <div class="spinner"></div>
              <div class="txt-loading">
                <span data-text-preloader="A" class="letters-loading">A</span>
                <span data-text-preloader="L" class="letters-loading">L</span>
                <span data-text-preloader="-" class="letters-loading">-</span>
                <span data-text-preloader="Y" class="letters-loading">Y</span>
                <span data-text-preloader="A" class="letters-loading">A</span>
                <span data-text-preloader="S" class="letters-loading">S</span>
                <span data-text-preloader="M" class="letters-loading">M</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="N" class="letters-loading">N</span>
              </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
          </div>
        </div>
      </section>
      <!-- Preloader End -->


    @include('frontend.layouts.nav')

    @yield('page')

    @include('frontend.layouts.footer')


 <!-- Mobile Nav Sidebar Content Start -->
 <div class="mobile-nav-wrapper">
    <div class="mobile-nav-overlay mobile-nav-toggler"></div>
    <div class="mobile-nav-content">
      <a href="#" class="mobile-nav-close mobile-nav-toggler">
        <span></span>
        <span></span>
      </a>
      <div class="logo-box">
        <a href="{{ '/' }}" aria-label="logo image">
          <img style="width:170px;" src="{{ asset('user-assets\images\al-yasmeen.svg') }}" width="132" height="72" alt="logo" />
        </a>
      </div>
      <div class="mobile-nav-container"></div>
      @auth
      <ul class="list-items mobile-sidebar-contact">
        <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>   {{ Auth::user()->company_address }}</li>
        <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a href="mailto:{{ Auth::user()->sales_mail }}">   {{ Auth::user()->sales_mail }}</a></li>
        <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:{{ Auth::user()->phone_no }}">{{ Auth::user()->phone_no }}</a></li>
      </ul>
      @endauth
      @auth
      <ul class="social-list list-primary-color">
        <li>
            <a href="{{ Auth::user()->linkedin }}"><i class="fab fa-linkedin"></i></a>
        </li>
        <li>
            <a href="{{ Auth::user()->facebook }}"><i class="fab fa-facebook"></i></a>
        </li>

        <li>
            <a href="{{ Auth::user()->instagram }}"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
      @endauth
    </div>
  </div>
  <!-- Mobile Nav Sidebar Content End -->

  <!-- Header Search Popup Start -->
  <div class="search-popup">
    <div class="search-popup-overlay search-toggler"></div>
    <div class="search-popup-content">
      <form action="#">
        <label for="search" class="sr-only">search here</label>
        <input type="text" id="search" placeholder="Search Here..." />
        <button type="submit" aria-label="search submit" class="thm-btn">
          <i class="base-icon-search-1"></i>
        </button>
      </form>
    </div>
  </div>
  <!-- Header Search Popup End -->
  <!-- Back to Top Start -->
  <div class="anim-scroll-to-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- Back to Top end -->
  <!-- Integrated important scripts here -->




  <script src="{{ asset('user-assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/jquery.appear.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/jquery.event.move.js') }}"></script>
  <script src="{{ asset('user-assets/js/jquery.twentytwenty.js') }}"></script>
  <script src="{{ asset('user-assets/js/tilt.jquery.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('user-assets/js/backtotop.js') }}"></script>
  <script src="{{ asset('user-assets/js/trigger.js') }}"></script>

</body>

</html>
