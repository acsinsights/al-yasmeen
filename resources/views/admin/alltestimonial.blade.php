@extends('admin.includes.app')
@section('title', 'All Testimonials')
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
                            <h2 class="content-header-title float-left mb-0">Testimonial</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Testimonial
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="card-options">
                        <form style="margin-right: 67px;" action="" method="post">
                            @csrf
                            @method('put')
                            <a href="{{ route('admin.addtestimonial') }}" class="btn btn-primary mr-1">Add Testimonial</a>
                    </div>


                </div>

            </div>
            <div class="content-body">
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th>SR. No</th> --}}
                                            <th>Client Logo</th>
                                            {{-- <th>Logo</th> --}}
                                            <th>Customer Name</th>
                                            <th>Customer Designation</th>
                                            {{-- <th>Customer Review</th> --}}
                                            <th>Customer Company</th>
                                            <th>Date</th>
                                            <th style="text-align: center;">Edit</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $tsti)
                                            <tr style="vertical-align: middle;">
                                                <td>
                                                    <img src="/testiimages/{{ $tsti->custimg }}" class="img-responsive"
                                                        style="max-height:80px; max-width:50px" alt=""
                                                        srcset="">
                                                </td>
                                                <td>{{ $tsti->custname }}</td>
                                                <td>{{ $tsti->custdesignation }}</td>
                                                <td>{{ $tsti->custcompany }}</td>

                                                <td>{{ $tsti->date }}</td>

                                                <td style="text-align: center;"><a
                                                        href="/admin/edittestimonial/{{ $tsti->id }}"
                                                        class="btn btn-flat-primary border">Edit</a>
                                                </td>
                                                <td style="text-align: center;">
                                                    {{-- <form action="/admin/deletetestimonial/{{ $tsti->id }}"
                                                        method="post">
                                                        <button class="btn btn-flat-danger border"
                                                            onclick="return confirm('Are you sure?');"
                                                            type="submit">Delete</button>
                                                        @csrf
                                                        @method('delete')
                                                    </form> --}}

                                                    <a class="btn btn-flat-danger border"
                                                    onclick="return confirm('Are you sure?');"
                                                    href="{{ route('admin.deletetestimonial', $tsti->id) }}">
                                                    Delete
                                                </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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

