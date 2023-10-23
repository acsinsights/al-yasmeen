<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div style="margin-bottom: 20px;" class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand"href="{{ '/' }}" aria-label="logo image">
                    <img style="width:190px;" src="{{ asset('user-assets\images\al-yasmeen.svg') }}" width="132"
                        height="72" alt="logo" />
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ URL::current() == route('admin.dashboard') ? 'active' : '' }} nav-item">
                <a class="mt-2 d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">
                        Dashboards
                    </span>
                </a>
            </li>
            <li class="nav-item {{ URL::current() == route('admin.profile') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.profile') }}"">
                    <i data-feather="user" class="font-medium-3 mr-1"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">
                        Account Settings
                    </span>
                </a>
            </li>
            <li class=" navigation-header">
                <span data-i18n="Posts &amp; Pages">
                    Projects
                </span>
                <i data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item {{ URL::current() == route('admin.project.index') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.project.index') }}"">
                    <i class="fa-solid fa-table-cells"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">
                        All Projects
                    </span>
                </a>
            </li>
            <li class="nav-item {{ URL::current() == route('admin.project.create') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.project.create') }}">
                    <i class="fa-solid fa-plus"></i>
                    <span class="menu-title text-truncate" data-i18n="Todo">
                        Add Projects
                    </span>
                </a>
            </li>





            <li class=" navigation-header">
                <span data-i18n="OUR CLIENTELE">
                    OUR CLIENTELE
                </span>
                <i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item {{ URL::current() == route('admin.testimonial.index') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.testimonial.index') }}">
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <span class="menu-title text-truncate" data-i18n="Colors">
                        Testimonial
                    </span>
                </a>
            </li>
            <li class=" navigation-header">
                <span data-i18n="OUR CLIENTELE">
                    Forms
                </span>
                <i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item {{ URL::current() == route('admin.message.index') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.message.index') }}">
                    <i class="fa-solid fa-table-columns"></i>
                    <span class="menu-title text-truncate" data-i18n="Colors">
                        Contact Form
                    </span>
                </a>
            </li>
            <li class=" nav-item {{ URL::current() == route('admin.enquiry.index') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.enquiry.index') }}">
                    <i class="fa-solid fa-address-book"></i>
                    <span class="menu-title text-truncate" data-i18n="Colors">
                        Enquiry Form
                    </span>
                </a>
            </li>
            <li class=" navigation-header">
                <span data-i18n="OUR CLIENTELE">
                    Integration
                </span>
                <i data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item  ">
                <a class="d-flex align-items-center" href=" ">
                    <i class="fa-solid fa-toolbox"></i>
                    <span class="menu-title text-truncate" data-i18n="Colors">
                        Widgets
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
