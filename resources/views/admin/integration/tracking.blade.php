@extends('admin.includes.app')
@section('title', 'Tracking')
@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class=" content-header row">
                <div style="margin-bottom: 30px;" class="content-header-left col-md-9 col-12">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Tracking</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Tracking
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                                        href="#account-vertical-general" aria-expanded="true">
                                        <i class="fa-brands fa-meta font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Meta Pixel</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-general" data-toggle="pill"
                                        href="#account-vertical-business-profile" aria-expanded="true">
                                        <i class="fa-solid fa-chart-line font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Google Analytics</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">

                            {{-- <x-input-error :messages="$errors->updatePassword->get('current_password')" class="alert alert-danger alert-validation-msg err-msg" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="alert alert-danger alert-validation-msg err-msg" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="alert alert-danger alert-validation-msg err-msg" /> --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- general tab -->
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                            aria-labelledby="account-pill-general" aria-expanded="true">
                                            <form method="post" enctype="multipart/form-data"
                                                action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                                @csrf
                                                @method('patch')

                                                <div class="row">
                                                    <div class="col-12">
                                                        <x-input-label for="meta_pixel" :value="__('Paste Your Code Here')" />
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Paste Your Code Here" id="meta_pixel" name="meta_pixel" type="text" class=" form-control" autocomplete="meta_pixel">{{ Auth::user()->meta_pixel }}</textarea>
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('meta_pixel')" />
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-2 mr-1">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- social -->
                                        <div class="tab-pane fade" id="account-vertical-business-profile" role="tabpanel"
                                            aria-labelledby="account-pill-social" aria-expanded="false">
                                            <form method="post" enctype="multipart/form-data"
                                            action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                                @csrf
                                                @method('patch')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <x-input-label for="g_analytics" :value="__('Paste Your Code Here')" />
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Paste Your Code Here"id="g_analytics" name="g_analytics" type="text" class=" form-control" autocomplete="g_analytics" >{{ Auth::user()->g_analytics }}</textarea>
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('g_analytics')" />
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-2 mr-1">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ social -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ right content section -->
                    </div>
                </section>
                <!-- / account setting page -->
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

