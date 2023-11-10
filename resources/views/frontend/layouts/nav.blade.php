    <!-- Header Area Start -->
    <header class="header-style-03">
        <div class="header-topbar">
            <div class="container">
                <div class="topbar-wrapper">
                    <ul class="topbar-info">
                        <li>
                            <i class="base-icon-email1"></i>

                            <a style="color: #ffffff" href="mailto:">
                            </a>

                       <a href="mailto: {{ $data['sales-email'] }}"> {{ $data['sales-email'] }}</a>
                        </li>
                    </ul>
                    <ul class="topbar-social">

                        <li>
                            <a href=" {{ $data['facebook-link'] }}"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href=" {{ $data['instagram-link'] }}"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href=" {{ $data['linkedin-link'] }} "><i class="fab fa-instagram"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <nav class="main-menu sticky-header">
            <div class="container">
                <div class="main-menu-wrapper">
                    <div class="main-menu-logo">
                        <a href="{{ '/' }}">
                            <img style="width:200px;" src="{{ asset('user-assets\images\al-yasmeen.svg') }}"
                                width="132" height="72" alt="logo" />
                        </a>
                    </div>
                    <ul class="main-nav-menu">
                        <li class=" {{ URL::current() == url('/') ? 'active' : '' }}">
                            <a href="{{ route('frontend.home') }}">Home</a>
                        </li>
                        <li class=" {{ URL::current() == url('/services') ? 'active' : '' }}">
                            <a href="{{ route('frontend.services') }}">Services</a>
                        </li>
                        <li class="{{ URL::current() == url('/projects') ? 'active' : '' }}">
                            <a href="{{ route('frontend.projects') }}">Projects</a>
                        </li>
                        <li class="{{ URL::current() == url('/about') ? 'active' : '' }}">
                            <a href="{{ route('frontend.about') }}">About Us</a>
                        </li>
                        <li class="{{ URL::current() == url('/contact') ? 'active'  : '' }}">
                            <a href="{{ route('frontend.contact') }}">Contact</a>
                        </li>
                    </ul>
                    <div class="main-menu-right">
                        <a href="#" class="mobile-nav-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <div class="header-contact-info">
                            <div style="background: linear-gradient(45deg, #205999, #1083c6);"
                                class="header-contact-info-icon">
                                <i class="base-icon-011-phone-1"></i>
                            </div>
                            <div class="header-contact-info-text">
                                <p class="call-text">Call Anytime</p>

                           <h5 class="phone-no">
                                   
                                    <a href="tel: {{ $data['sales-number'] }}"> {{ $data['sales-number'] }}</a>

                                </h5>

                                <a style="color: #555" href="tel: ">

                                </a>


                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Area End -->
