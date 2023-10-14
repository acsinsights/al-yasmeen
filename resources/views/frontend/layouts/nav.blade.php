    <!-- Header Area Start -->
    <header class="header-style-03">
        <div class="header-topbar">
            <div class="container">
                <div class="topbar-wrapper">
                    <ul class="topbar-info">
                        <li>
                            <i class="base-icon-email1"></i>
                            @auth
                            <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
                            @endauth
                        </li>
                    </ul>
                    @auth
                    <ul class="topbar-social">
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
                            <a href="{{ '/' }}">Home</a>
                        </li>
                        <li class=" {{ URL::current() == url('/services') ? 'active' : '' }}">
                            <a href="{{ '/services' }}">Services</a>
                        </li>
                        <li class="{{ URL::current() == url('/projects') ? 'active' : '' }}">
                            <a href="{{ '/projects' }}">Projects</a>
                        </li>
                        <li class="{{ URL::current() == url('/about') ? 'active' : '' }}">
                            <a href="{{ '/about' }}">About Us</a>
                        </li>
                        <li class="{{ URL::current() == url('/contact') ? 'active'  : '' }}">
                            <a href="{{ '/contact' }}">Contact</a>
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
                                    @auth
                                    <a href="tel:{{ Auth::user()->sales_no }}">{{ Auth::user()->sales_no }}</a>
                                    @endauth
                                </h5>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Area End -->
