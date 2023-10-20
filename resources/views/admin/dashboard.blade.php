@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')



    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dashboard-analytics">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card card-congratulations">
                                <div class="card-body text-center">
                                    <img src="{{ asset('admin-assets/images/elements/decore-left.png') }}"
                                        class="congratulations-img-left" alt="card-img-left">
                                    <img src="{{ asset('admin-assets/images/elements/decore-right.png') }}"
                                        class="congratulations-img-right" alt="card-img-right">
                                    <div class="avatar avatar-xl bg-primary shadow">
                                        <div class="avatar-content">
                                            <i data-feather="award" class="font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-1 text-white">Welcome {{ Auth::user()->name }}</h1>
                                        <p class="card-text m-auto w-75">
                                            You Can Now Manage Your Portfolio From Here.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div cla s="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="package" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">{{ $projects->count() }}</h2>
                                    <p class="card-text">Total Projects</p>
                                </div>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">0{{ $users->count() }}</h2>
                                    <p class="card-text">Total Users</p>
                                </div>
                                <div id="order-chart"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">


                </div>
            </div>

        </div>
    </div>


    <!-- END: Content-->
    <footer class="col-12 admin-footer footer-static footer-light">
        <div class="row pdt-30 footer-copyright-area">
            <div class="col-xl-12">
                <div class="text-center">
                    <span>Copyright ©2023 AL Yasmeen All Rights Reserved Developed by
                        <span>
                            <a style="color: #ec2024;" href="https://publicize360.com/"
                                target="_blank">Publicize 360</a>
                            CMS by <a style="color: #04733b;" href="https://acsinsights.com/"
                                target="_blank">ACS Insights</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </footer>
@endsection

