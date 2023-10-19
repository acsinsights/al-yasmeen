<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <title> AL Yasmeen | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('user-assets\images\favicon.svg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user-assets\images\favicon.svg') }}" width="132"
        height="72" alt="logo">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('admin.includes.sidebar')
    <!-- App-Content -->
    <div class="app-content main-content">
        <div class="side-app">

            @include('admin.includes.header')
            @yield('content')

        </div>
    </div>
    <!-- End app-content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin-assets/vendors/js/vendors.min.js') }}""></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin-assets/vendors/js/charts/apexcharts.min.js') }}""></script>
    <script src="{{ asset('admin-assets/vendors/js/extensions/toastr.min.js') }}""></script>
    <script src="{{ asset('admin-assets/vendors/js/extensions/moment.min.js') }}""></script>
    <script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.min.js') }}""></script>
    <script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}""></script>
    <script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}""></script>
    <script src="{{ asset('admin-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}""></script>
    <script src="{{ asset('admin-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js') }}""></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin-assets/js/core/app-menu.js') }}""></script>
    <script src="{{ asset('admin-assets/js/core/app.js') }}""></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin-assets/js/scripts/pages/dashboard-analytics.js') }}""></script>
    <script src="{{ asset('admin-assets/js/scripts/pages/app-invoice-list.js') }}""></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    @yield('js')
</body>
<!-- END: Body-->
</html>
