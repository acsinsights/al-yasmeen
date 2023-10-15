@extends('admin.includes.app')
@section('title', 'Dashboard')
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
                            <h2 class="content-header-title float-left mb-0">Account Settings</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Account Settings
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
                                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Admin Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-general" data-toggle="pill"
                                        href="#account-vertical-business-profile" aria-expanded="true">
                                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Business Profile</span>
                                    </a>
                                </li>
                                <!-- change password -->
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-password" data-toggle="pill"
                                        href="#account-vertical-password" aria-expanded="false">
                                        <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Change Password</span>
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
                                                <div class="mb-20 media">
                                                    <a href="javascript:void(0);" class="mr-25">
                                                        <img src="/profile-img/akhil-raj.jpg" id="account-upload-img"
                                                            class="rounded mr-50" alt="profile image" height="80"
                                                            width="80">
                                                    </a>
                                                    <div class="media-body mt-75 ml-1">
                                                        <label for="account-upload"
                                                            class="btn btn-sm btn-primary mb-75 mr-75">Change Profile
                                                            Picture</label>
                                                        <input type="file" name="profile_img" id="account-upload"
                                                            hidden="" accept="image/*">
                                                        <p>Dimensions (85x85) px</p>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 15px;" class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="name" :value="__('Name')" />
                                                        <x-text-input id="name" name="name" type="text"
                                                            class="form-control" value="{{ Auth::user()->name }}" autofocus
                                                            autocomplete="name" />
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('name')" />
                                                    </div>


                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="email" :value="__('Email')" />
                                                        <x-text-input id="email" name="email" type="email"
                                                            class="form-control" value="{{ Auth::user()->email }}" autofocus
                                                            autocomplete="email" />
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('email')" />
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <x-input-label for="phone_no" :value="__('phone no')" />
                                                            <x-text-input id="phone_no" name="phone_no" type="text"
                                                                class="form-control" value="{{ Auth::user()->phone_no }}"
                                                                autofocus autocomplete="phone_no" />
                                                            <x-input-error :messages="$errors->get('phone_no')"
                                                                class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 " />
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-2 mr-1">Save
                                                            changes</button>

                                                        @if (session('status') === 'profile-updated')
                                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                                x-init="setTimeout(() => show = false, 2000)"
                                                                class="text-sm text-gray-600 dark:text-gray-400">
                                                                {{ __('Profile Saved Successfully.') }}
                                                            </p>
                                                        @endif
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

                                                    <div class="col-12  ">
                                                        <div class="d-flex align-items-center mb-2">
                                                            {{-- <i data-feather="link" class="font-medium-3"></i> --}}
                                                            <h4 class="mb-0 ml-75">Profile Details</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="company_name" :value="__('Company Name')" />
                                                        <x-text-input id="company_name" name="company_name"
                                                            type="text" class="form-control"
                                                            value="{{ Auth::user()->company_name }}" autofocus
                                                            autocomplete="company_name" />
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('company_name')" />
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="sales_no" :value="__('Sales No')" />
                                                        <x-text-input id="sales_no" name="sales_no" type="text"
                                                            class="form-control" value="{{ Auth::user()->sales_no }}"
                                                            autofocus autocomplete="sales_no" />
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('sales_no')" />
                                                    </div>
                                                    <div class="col-12 ">
                                                        <x-input-label for="company_address" :value="__('Company Address')" />
                                                        <x-text-input id="company_address" name="company_address"
                                                            type="text" class="form-control"
                                                            value="{{ Auth::user()->company_address }}" autofocus
                                                            autocomplete="company_address" />
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('company_address')" />
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h4 class="mb-0 ml-75">Social Links</h4>
                                                        </div>
                                                    </div>

                                                    <!-- facebook link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="facebook" :value="__('Facebook')" />
                                                        <x-text-input id="facebook" name="facebook" type="url"
                                                            class="form-control" value="{{ Auth::user()->facebook }}"
                                                            autofocus autocomplete="facebook" />

                                                    </div>
                                                    <!-- linkedin link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="instagram" :value="__('Instagram')" />
                                                        <x-text-input id="instagram" name="instagram" type="url"
                                                            class="form-control" value="{{ Auth::user()->instagram }}" />
                                                    </div>
                                                    <!-- instagram link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="linkedin" :value="__('LinkedIn')" />
                                                        <x-text-input name="linkedin" type="url" class="form-control"
                                                            value="{{ Auth::user()->linkedin }}" />
                                                        <x-input-error
                                                            class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                            :messages="$errors->get('linkedin')" />
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

                                        <!-- change password -->
                                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                            aria-labelledby="account-pill-password" aria-expanded="false">
                                            <!-- form -->
                                            <section>
                                                <form method="post" action="{{ route('password.update') }}"
                                                    class="mt-6 space-y-6">
                                                    @csrf
                                                    @method('put')
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-old-password">Current Password</label> <br>

                                                            <div
                                                                class="input-group form-password-toggle input-group-merge">
                                                                <x-text-input id="current_password"
                                                                    name="current_password" type="password"
                                                                    class="form-control"
                                                                    autocomplete="current-password" />
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <i data-feather="eye"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="err-msg" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-old-password">New Password</label> <br>
                                                            <div
                                                                class="input-group form-password-toggle input-group-merge">
                                                                <x-text-input id="password" name="password"
                                                                    type="password" class="form-control"
                                                                    autocomplete="new-password" />
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <i data-feather="eye"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="err-msg" />
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password_confirmation">Confirm
                                                                Password</label>
                                                            <br>
                                                            <div
                                                                class="input-group form-password-toggle input-group-merge">
                                                                <x-text-input id="password_confirmation"
                                                                    name="password_confirmation" type="password"
                                                                    class="form-control" autocomplete="new-password" />
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <i data-feather="eye"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-error :messages="$errors->updatePassword->get(
                                                                                'password_confirmation',)"class="err-msg"/>
                                                                                </div>
                                                                            </div>
                                                                                <div class="col-12">
                                                                                <button class="btn btn-primary mr-1 mt-1">Save
                                                                                    changes</button>
                                                                                  @if (session('status') === 'password-updated')
                                                                <p x-data="{ show: true }" x-show="show" x-transition
                                                                    x-init="setTimeout(() => show = false, 2000)"
                                                                    class="text-sm text-gray-600 dark:text-gray-400">
                                                                    {{ __('Saved.') }}
                                                                </p>
                                                                @endif
                                                        </div>
                                                        {{-- <div class="flex items-center gap-4">
                                                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                                                    </div> --}}
                                                </form>
                                            </section>
                                        </div>
                                        <!--/ change password -->



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
@endsection
