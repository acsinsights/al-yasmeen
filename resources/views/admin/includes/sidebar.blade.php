    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div style="   margin-bottom: 20px;margin-left: 4px;" class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">

                  {{-- <img src="{{ asset('user-assets/img/logo/adfj.svg') }}" class="header-brand-img desktop-lgo"
                    alt="AdFj Studios" style="margin-right: 70px;"> --}}
                    <a href="{{ '/' }}" aria-label="logo image">
                        <img style="width:180px;" src="{{ asset('user-assets\images\al-yasmeen.svg') }}" width="132" height="72" alt="logo" />
                      </a>

                        {{-- <h2 class="brand-text">ADFJ</h2> --}}
                    </a></li>

                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route("admin.dashboard") }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
                    {{-- <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route("admin.dashboard") }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li class="active"><a class="d-flex align-items-center" href="{{ route("admin.dashboard") }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul> --}}
                </li>
                <li class=" navigation-header"><span data-i18n="Posts &amp; Pages">Posts</span><i data-feather="more-horizontal"></i>
                </li>
       <li class="nav-item {{ URL::current() == route('admin.allprojects') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.allprojects') }}""><i class="fa-solid fa-table-cells"></i><span class="menu-title text-truncate" data-i18n="Email">All Projects</span></a>
                </li>






                <li class="nav-item {{ URL::current() == route('admin.add-project') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.add-project') }}"><i class="fa-solid fa-plus"></i><span class="menu-title text-truncate" data-i18n="Todo">Add Projects</span></a>
                </li>








                <li class=" navigation-header"><span data-i18n="OUR CLIENTELE">OUR CLIENTELE</span><i data-feather="more-horizontal"></i>
                </li>
                {{-- <li class=" nav-item {{ URL::current() == route('admin.our-clientlele') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.our-clientlele') }}"><i class="fa-solid fa-users"></i><span class="menu-title text-truncate" data-i18n="Typography">Client Logo</span></a>
                </li> --}}
                <li class=" nav-item {{ URL::current() == route('admin.alltestimonial') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.alltestimonial') }}"><i class="fa-solid fa-star-half-stroke"></i><span class="menu-title text-truncate" data-i18n="Colors">Testimonial</span></a>
                </li>



                <li class=" navigation-header"><span data-i18n="OUR CLIENTELE">Forms</span><i data-feather="more-horizontal"></i>
                </li>
                {{-- <li class=" nav-item {{ URL::current() == route('admin.our-clientlele') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.our-clientlele') }}"><i class="fa-solid fa-users"></i><span class="menu-title text-truncate" data-i18n="Typography">Client Logo</span></a>
                </li> --}}
                <li class=" nav-item {{ URL::current() == route('admin.inbox') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.inbox') }}"><i class="fa-solid fa-star-half-stroke"></i><span class="menu-title text-truncate" data-i18n="Colors">Contact Form</span></a>
                </li>



                {{-- <li class=" navigation-header"><span data-i18n="OUR CLIENTELE">FORMS</span><i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item {{ URL::current() == route('admin.alloffer') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.alloffer') }}"><i class="fa-solid fa-tags"></i><span class="menu-title text-truncate" data-i18n="Typography">Contact Form</span></a>
                </li>
                <li class="nav-item {{ URL::current() == route('admin.alloffer') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin.alloffer') }}"><i class="fa-solid fa-tags"></i><span class="menu-title text-truncate" data-i18n="Typography">Enquiry Form</span></a>
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
