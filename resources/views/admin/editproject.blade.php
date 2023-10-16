@extends('admin.includes.app')
@section('title', 'Dashboard')
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
                            <h2 class="content-header-title float-left mb-0">Edit Project</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ '/admin/dashboard' }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Edit Project</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content-body">


                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h4 class="card-title">Multiple Column</h4>
                                </div> --}}

                                <div class="card-body">
                                    <form class="form" action="/admin/updateproject/{{ $projects->id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Title</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        value="{{ $projects->projecttitle }}"
                                                        placeholder="write your project title here" name="projecttitle">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Title</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        value="{{ $projects->subservice }}"
                                                        placeholder="write your project title here" name="subservice">
                                                </div>
                                            </div>

                                            {{-- <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Location</label>
                                                    <input type="text" id="country-floating" class="form-control"
                                                        value="{{ $projects->location }}" name="location"
                                                        placeholder="Location">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Date</label>
                                                    <input type="date" id="company-column" class="form-control"
                                                        value="{{ $projects->date }}" name="date" placeholder="Date">
                                                </div>
                                            </div> --}}
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Hyperlink(optional)</label>
                                                    <input type="url" id="country-floating" class="form-control"
                                                        value="{{ $projects->hyperlinks }}" name="hyperlinks"
                                                        placeholder="put hyperlink here">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Date</label>
                                                    <input type="date" id="company-column" class="form-control" value="{{ $projects->date }}" name="date" placeholder="Date">
                                                </div>
                                            </div>

                                            {{-- <label class="m-2">Media (Cover Image) &nbsp;<span class="text-danger">(570 × 600
                                                px)</span></label>
                                        <input type="file" id="input-file-now-custom-3" class="form-control" name="cover"
                                            required> --}}
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="customFile">Media (Cover Image) &nbsp;<span
                                                            class="text-danger">(570 × 600
                                                            px)</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" name="cover" class="custom-file-input"
                                                            id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@include('admin.includes.footer')
