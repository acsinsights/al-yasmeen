@extends('admin.includes.app')
@section('title', 'Edit ' . $setting->name)
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ $setting->name }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.website-settings.index') }}">Website Settings</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">{{ $setting->name }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data"
                                        action="{{ route('admin.website-settings.update', $setting->slug) }}"
                                        class="mt-6 space-y-6">
                                        @csrf
                                        <div class="row">

                                            <div class="col-12  ">
                                                <div class="d-flex align-items-center mb-2">
                                                    <i data-feather="link" class="font-medium-3"></i>
                                                    <h4 class="mb-0">Update {{ $setting->name }}</h4>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <x-input-label for="value" :value="$setting->name . ' here'" />
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Company Location"
                                                    id="value" name="value" type="text" class=" form-control" autocomplete="value">{{ $setting->value }}</textarea>
                                                <x-input-error
                                                    class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                                    :messages="$errors->get('value')" />
                                                <span class="text-warning">
                                                    Make or leave input empty if you want to remove
                                                </span>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mt-2 mr-1">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
