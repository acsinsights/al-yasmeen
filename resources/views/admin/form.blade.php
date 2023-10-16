@extends('admin.includes.app')
@section('title', 'All Posts')
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
                            <h2 class="content-header-title float-left mb-0">All Enquiries</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">All Enquiries
                                    </li>
                                </ol>
                            </div>
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
                                                                {{ $fm->date }}
                                                            </a>
                                                        </td>
                                                        <td colspan="1" class="text-center">
                                                            <form action="/admin/f-delete/{{ $fm->id }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure?');">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                        <path
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                                    </svg>
                                                                </button>
                                                            </form>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    {{--
<div class="container">
<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body p-6">
                <div class="inbox-body">
                    <div class="table-responsive">
                        <table class="table table-inbox table-hover text-nowrap">
                            @if ($forms->isNotEmpty())
                                <thead>
                                    <th colspan="5" class="text-right">
                                        <form action="/admin/all-delete" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                onclick="alert('Are you sure you want to delete all')"
                                                class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($forms as $fm)
                                        @csrf
                                        @method('put')
                                        <a href="/admin/message/{{ $fm->id }}">
                                            <tr class="emailForm">
                                                <td type="submit" class="inbox-small-cells">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        <i class="fa-solid fa-envelope"></i>
                                                    </a>
                                                </td>
                                                <td class="view-message dont-show font-weight-semibold">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->email }}
                                                    </a>
                                                </td>
                                                <td class="view-message dont-show font-weight-semibold">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->name }}
                                                    </a>
                                                </td>
                                                <td class="view-message dont-show font-weight-semibold">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->phone }}
                                                    </a>
                                                </td>
                                                <td class="view-message dont-show font-weight-semibold">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->message }}
                                                    </a>
                                                </td>

                                                <td class="view-message text-end text-muted">
                                                    <a href="/admin/message/{{ $fm->id }}">
                                                        {{ $fm->created_at }}
                                                    </a>
                                                </td>
                                                <td colspan="1" class="text-right">
                                                    <form action="/admin/f-delete/{{ $fm->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-trash"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                <path
                                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                            </svg>
                                                        </button>
                                                    </form>
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
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}

@endsection
@include('admin.includes.footer')
