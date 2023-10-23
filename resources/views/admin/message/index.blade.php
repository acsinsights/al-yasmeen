@extends('admin.includes.app')
@section('title', 'Contact Form')
@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-md-6">
                            <h2 class="content-header-title float-left mb-0">Contact Form</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Contact Form
                                    </li>
                                </ol>
                            </div>
                            <hr class="d-md-none d-block">
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('admin.message.export') }}" method="post">
                                <div class="row">
                                    @csrf
                                    <div class="col-sm-4 ">
                                        <input class=" form-control" type="date" name="start_date" id="">
                                        @error('start_date')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 ">
                                        <input class=" form-control" type="date" name="end_date" id="">
                                        @error('end_date')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <button class="btn btn-info">Export data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="col-md-5 alert-message">
                        @include('admin.message')
                    </div> --}}
                </div>
            </div>
            <div class="content-body">
                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-inbox table-hover text-nowrap">
                                    @if ($forms->isNotEmpty())
                                        <thead>
                                            <tr>
                                                <th>#No</th>
                                                <th>Email</th>
                                                <th>Name</th>
                                                <th>Phone no</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($forms as $key => $fm)
                                                @csrf
                                                @method('put')
                                                <a href="javascript:void(0);">
                                                    <tr class="emailForm">
                                                        <th style="text-align: left;" scope="row">
                                                            {{ $key + 1 }}</th>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->email }}
                                                            </a>
                                                        </td>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->name }}
                                                            </a>
                                                        </td>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->phone }}
                                                            </a>
                                                        </td>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->message }}
                                                            </a>
                                                        </td>

                                                        <td class="view-message text-end text-muted">
                                                            <a href="javascript:void(0);">
                                                                {{ date_format($fm->created_at, 'd/M/Y') }}
                                                            </a>
                                                        </td>
                                                        <td colspan="1">
                                                            <a href="{{ route('admin.message.destroy', $fm->id) }}"
                                                                class="btn btn-danger"
                                                                onclick="return confirm('Are you sure?');">


                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                    <path
                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                                </svg>

                                                            </a>
                                                        </td>
                                                    </tr>
                                                </a>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="text-center" colspan="5">
                                                    No messages found!
                                                </td>
                                            </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $forms->links() }}
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
                            <a style="color: #ec2024;" href="https://publicize360.com/" target="_blank">Publicize 360</a>
                            CMS by <a style="color: #04733b;" href="https://acsinsights.com/" target="_blank">ACS
                                Insights</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </footer>

@endsection
{{-- @include('admin.includes.footer') --}}
