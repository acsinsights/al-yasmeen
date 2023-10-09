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
                                        <span class="font-weight-bold">General</span>
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
                        <!--/ left menu section -->

                        <!-- right content section -->
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
                                            <form method="post" action="{{ route('profile.update') }}"
                                                class="mt-6 space-y-6">
                                                @csrf
                                                @method('patch')
                                                {{-- <div class="mb-20 media">
                                                    <a href="javascript:void(0);" class="mr-25">
                                                        <img src="/profile-img/{{ Auth::user()->profile_img }}"
                                                            id="account-upload-img" class="rounded mr-50"
                                                            alt="profile image" height="80" width="80">
                                                    </a>
                                                    <div class="media-body mt-75 ml-1">
                                                        <label for="account-upload"
                                                            class="btn btn-sm btn-primary mb-75 mr-75">Change Profile
                                                            Picture</label>
                                                        <input type="file" name="cover" id="account-upload"
                                                            hidden="" accept="image/*">
                                                        <p>Dimensions (85x85) px</p>
                                                    </div>
                                                </div> --}}
                                                {{-- <form class="validate-form mt-2"> --}}
                                                <div style="margin-top: 15px;" class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="name" :value="__('Name')" />
                                                        <x-text-input id="name" name="name" type="text"
                                                            class="form-control" value="{{ Auth::user()->name }}" autofocus
                                                            autocomplete="name" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="company_name" :value="__('Company Name')" />
                                                        <x-text-input id="company_name" name="company_name" type="text"
                                                            class="form-control" value="{{ Auth::user()->company_name }}"
                                                            autofocus autocomplete="company_name" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
                                                    </div>
                                                    {{-- <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-e-mail">Email (for contact and smtp
                                                                purpose)</label>
                                                            <input type="email" class="form-control"
                                                                id="account-e-mail" name="email" placeholder="Email"
                                                                value="{{ Auth::user()->email }}">
                                                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-12 col-sm-6">
                                                        <x-input-label for="email" :value="__('Email')" />
                                                        <x-text-input id="email" name="email" type="email"
                                                            class="form-control" value="{{ Auth::user()->email }}" autofocus
                                                            autocomplete="email" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                                        {{-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                            <div>
                                                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                                    {{ __('Your email address is unverified.') }}

                                                                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                                        {{ __('Click here to re-send the verification email.') }}
                                                                    </button>
                                                                </p>

                                                                @if (session('status') === 'verification-link-sent')
                                                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        @endif --}}
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <x-input-label for="phone_no" :value="__('phone no')" />
                                                            <x-text-input id="phone_no" name="phone_no" type="text"
                                                                class="form-control" value="{{ Auth::user()->phone_no }}" autofocus
                                                                autocomplete="phone_no" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('phone_no')" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-2 mr-1">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


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
                                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="err-msg"/>
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
                                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="err-msg/>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password_confirmation">Confirm Password</label>
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
                                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation', )" class="err-msg/>
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











                                        <!-- information -->
                                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                            aria-labelledby="account-pill-info" aria-expanded="false">
                                            <!-- form -->
                                            <form class="validate-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="accountTextarea">Bio</label>
                                                            <textarea class="form-control" id="accountTextarea" rows="4" placeholder="Your Bio data here..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-birth-date">Birth date</label>
                                                            <input type="text" class="form-control flatpickr"
                                                                placeholder="Birth date" id="account-birth-date"
                                                                name="dob">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="accountSelect">Country</label>
                                                            <select class="form-control" id="accountSelect">
                                                                <option>USA</option>
                                                                <option>India</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-website">Website</label>
                                                            <input type="text" class="form-control" name="website"
                                                                id="account-website" placeholder="Website address">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-phone">Phone</label>
                                                            <input type="text" class="form-control" id="account-phone"
                                                                placeholder="Phone number" value="(+656) 254 2568"
                                                                name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-1 mr-1">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-secondary mt-1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ information -->

                                        <!-- social -->
                                        <div class="tab-pane fade" id="account-vertical-social" role="tabpanel"
                                            aria-labelledby="account-pill-social" aria-expanded="false">
                                            <!-- form -->
                                            <form class="validate-form">
                                                <div class="row">
                                                    <!-- social header -->
                                                    <div class="col-12">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <i data-feather="link" class="font-medium-3"></i>
                                                            <h4 class="mb-0 ml-75">Social Links</h4>
                                                        </div>
                                                    </div>
                                                    <!-- twitter link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-twitter">Twitter</label>
                                                            <input type="text" id="account-twitter"
                                                                class="form-control" placeholder="Add link"
                                                                value="https://www.twitter.com">
                                                        </div>
                                                    </div>
                                                    <!-- facebook link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-facebook">Facebook</label>
                                                            <input type="text" id="account-facebook"
                                                                class="form-control" placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <!-- google plus input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-google">Google+</label>
                                                            <input type="text" id="account-google"
                                                                class="form-control" placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <!-- linkedin link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-linkedin">LinkedIn</label>
                                                            <input type="text" id="account-linkedin"
                                                                class="form-control" placeholder="Add link"
                                                                value="https://www.linkedin.com">
                                                        </div>
                                                    </div>
                                                    <!-- instagram link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-instagram">Instagram</label>
                                                            <input type="text" id="account-instagram"
                                                                class="form-control" placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <!-- Quora link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-quora">Quora</label>
                                                            <input type="text" id="account-quora" class="form-control"
                                                                placeholder="Add link">
                                                        </div>
                                                    </div>

                                                    <!-- divider -->
                                                    <div class="col-12">
                                                        <hr class="my-2">
                                                    </div>

                                                    <div class="col-12 mt-1">
                                                        <!-- profile connection header -->
                                                        <div class="d-flex align-items-center mb-3">
                                                            <i data-feather="user" class="font-medium-3"></i>
                                                            <h4 class="mb-0 ml-75">Profile Connections</h4>
                                                        </div>

                                                        <div class="row">
                                                            <!-- twitter user -->
                                                            <div class="col-6 col-md-3 text-center mb-1">
                                                                <p class="font-weight-bold">Your Twitter</p>
                                                                <div class="avatar mb-1">
                                                                    <span class="avatar-content">
                                                                        <img src="../../../app-assets/images/avatars/11-small.png"
                                                                            alt="avatar img" width="40"
                                                                            height="40">
                                                                    </span>
                                                                </div>
                                                                <p class="mb-0">@johndoe</p>
                                                                <a href="javascript:void(0)">Disconnect</a>
                                                            </div>
                                                            <!-- facebook button -->
                                                            <div class="col-6 col-md-3 text-center mb-1">
                                                                <p class="font-weight-bold mb-2">Your Facebook</p>
                                                                <button class="btn btn-outline-primary">Connect</button>
                                                            </div>
                                                            <!-- google user -->
                                                            <div class="col-6 col-md-3 text-center mb-1">
                                                                <p class="font-weight-bold">Your Google</p>
                                                                <div class="avatar mb-1">
                                                                    <span class="avatar-content">
                                                                        <img src="../../../app-assets/images/avatars/3-small.png"
                                                                            alt="avatar img" width="40"
                                                                            height="40">
                                                                    </span>
                                                                </div>
                                                                <p class="mb-0">@luraweber</p>
                                                                <a href="javascript:void(0)">Disconnect</a>
                                                            </div>
                                                            <!-- github button -->
                                                            <div class="col-6 col-md-3 text-center mb-2">
                                                                <p class="font-weight-bold mb-1">Your GitHub</p>
                                                                <button class="btn btn-outline-primary">Connect</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <!-- submit and cancel button -->
                                                        <button type="submit" class="btn btn-primary mr-1 mt-1">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-secondary mt-1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ social -->

                                        <!-- notifications -->
                                        <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                            aria-labelledby="account-pill-notifications" aria-expanded="false">
                                            <div class="row">
                                                <h6 class="section-label mx-1 mb-2">Activity</h6>
                                                <div class="col-12 mb-2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            checked="" id="accountSwitch1">
                                                        <label class="custom-control-label" for="accountSwitch1">
                                                            Email me when someone comments onmy article
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            checked="" id="accountSwitch2">
                                                        <label class="custom-control-label" for="accountSwitch2">
                                                            Email me when someone answers on my form
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="accountSwitch3">
                                                        <label class="custom-control-label" for="accountSwitch3">Email me
                                                            hen someone follows me</label>
                                                    </div>
                                                </div>
                                                <h6 class="section-label mx-1 mt-2">Application</h6>
                                                <div class="col-12 mt-1 mb-2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            checked="" id="accountSwitch4">
                                                        <label class="custom-control-label" for="accountSwitch4">News and
                                                            announcements</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            checked="" id="accountSwitch6">
                                                        <label class="custom-control-label" for="accountSwitch6">Weekly
                                                            product updates</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-75">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="accountSwitch5">
                                                        <label class="custom-control-label" for="accountSwitch5">Weekly
                                                            blog digest</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mt-2 mr-1">Save
                                                        changes</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-secondary mt-2">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ notifications -->
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
