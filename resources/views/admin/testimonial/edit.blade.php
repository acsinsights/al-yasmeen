@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')

    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit Testimonial Here</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Edit Testimonial Here</a>
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
                                    <form class="form" action="{{ route('admin.testimonial.update', $testimonials->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Customer Name</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        value="{{ $testimonials->custname }}" placeholder="name"
                                                        name="name">
                                                    @error('name')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Customer Designation</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        value="{{ $testimonials->custdesignation }}"
                                                        placeholder="Customer Designation" name="custdesignation">
                                                    @error('custdesignation')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
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
                                                        @error('cover')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Date</label>
                                                    <input type="date" id="first-name-column" class="form-control"
                                                        value="{{ $testimonials->date }}" placeholder="Customer Designation"
                                                        name="date">
                                                    @error('date')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Customer Company Name</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        value="{{ $testimonials->custcompany }}"
                                                        placeholder="Customer Company name" name="custcompany">
                                                    @error('custcompany')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Customer Review</label>
                                                    <textarea class="form-control" name="review" maxlength="120" id="" cols="30" rows="3">{{ $testimonials->custreview }}</textarea>
                                                    @error('review')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                    <div class="text-right" id="count">
                                                        <span id="current_count">0</span>
                                                        <span id="maximum_count">/ 120</span>
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
    <script type="text/javascript">
        $('textarea').keyup(function() {
            var characterCount = $(this).val().length,
                current_count = $('#current_count'),
                maximum_count = $('#maximum_count'),
                count = $('#count');
            current_count.text(characterCount);
        });
    </script>
@endsection
@include('admin.includes.footer')
