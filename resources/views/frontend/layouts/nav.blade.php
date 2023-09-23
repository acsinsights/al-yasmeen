    <!-- Header Area Start -->
    <header class="header-style-03">
        <div class="header-topbar">
          <div class="topbar-wrapper">
            <ul class="topbar-info">
              <li>
                <i class="base-icon-email1"></i>
                <a href="mailto:example@gmail.com">example@gmail.com</a>
              </li>
              <li>
                <i class="base-icon-pin2"></i>
                121 King Street, Melbourne, Australia
              </li>
            </ul>
            <ul class="topbar-social">
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <nav class="main-menu sticky-header">
          <div class="main-menu-wrapper">
            <div class="main-menu-logo">
              <a href="{{ '/' }}">
                <img style="width:170px;"  src="{{ asset('user-assets\images\al-yasmeen.svg') }}" width="132" height="72" alt="logo" />
              </a>
            </div>
            <ul class="main-nav-menu">
              <li class=" {{ URL::current() == url('/') ? 'active' : '' }}">
                <a href="{{ '/' }}">Home</a>
              </li>
              <li class=" {{ URL::current() == url('/services') ? 'active' : '' }}">
                <a href="{{ '/services' }}">Services</a>

              </li>
              <li class="{{ URL::current() == url('/project') ? 'active' : '' }}">
                <a href="{{ '/project' }}">Projects</a>

              </li>
              <li class="{{ URL::current() == url('/about') ? 'active' : '' }}">
                <a href="{{ '/about' }}">About Us</a>

              </li>

              {{-- <li class="menu-has-sub">
                <a href="page-news.html">News</a>
                <ul>
                  <li><a href="page-news.html">News Posts</a></li>
                  <li><a href="page-news-left-sidebar.html">News Left Sidebar</a></li>
                  <li><a href="page-news-right-sidebar.html">News Right Sidebar</a></li>
                  <li><a href="page-news-details.html">News Details</a></li>
                </ul>
              </li> --}}
              <li><a href="{{ '/contact' }}">Contact</a></li>
            </ul>
            <div class="main-menu-right">
              <a href="#" class="mobile-nav-toggler">
                <span></span>
                <span></span>
                <span></span>
              </a>
              {{-- <a href="#" class="search-toggler">
                <i class="base-icon-search-1"></i>
              </a> --}}
              <div class="header-contact-info">
                <div class="header-contact-info-icon">
                  <i class="base-icon-011-phone-1"></i>
                </div>
                <div class="header-contact-info-text">
                  <p class="call-text">Call Anytime</p>
                  <h5 class="phone-no"><a href="tel:123456789">+12 345 666 789</a></h5>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <!-- Header Area End -->
