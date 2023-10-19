@extends('admin.includes.app')
@section('title', 'Enquiries')
@section('cdn')
    <link rel="stylesheet" href="{{ url('backend/vendors/flatpickr/flatpickr.min.css') }}">
@endsection
@section('content')









    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header justify-content-between row">
                <div class="content-header-left col-md-6 col-12">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Contact Form Entries</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Contact Form Entries
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-5 alert-message">
                        @include('admin.message')
                    </div> --}}

                </div>
                <form action="" method="POST">
                    @csrf
                    <div class=" d-flex align-items-center justify-content-end flex-wrap">
                        <div class="form-group d-flex">
                            <div>
                                <input type="text" id="startDate" placeholder="Start date" name="start_date"
                                    class="form-control mb-3  " required autocomplete="off">
                                @error('start_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <input type="text" id="endDate" class="form-control mb-3  "
                                    placeholder="End date" name="end_date" required autocomplete="off">
                                @error('end_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="ml-2 mb-5 btn btn-primary">Export CSV</button>
                    </div>
                </form>

            </div>
            <div class="content-body">
                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-inbox table-hover text-nowrap">
                                    @if ($enquiryforms->isNotEmpty())
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
                                            @foreach ($enquiryforms as $key => $fm)
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
                                                            <form action="/admin/enquiry-delete/{{ $fm->id }}"
                                                                method="POST" onclick="return confirm('Are you sure?');">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">
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
    <style>
        .nowarp-table tr,
        .nowarp-table th {
            white-space: nowrap;
        }

        .nowarp-table .white-space-normal {
            white-space: normal;
        }

        .nowarp-table tr {
            overflow: scroll;
            width: 100%;
        }
    </style>
@endsection
@section('js')
    <script src="{{ url('backend/js/flatpickr.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.7/plugins/rangePlugin.js"></script>
    <script>
        flatpickr('#startDate', {
            allowInput: true,
            dateFormat: "Y-m-d",
            "plugins": [new rangePlugin({
                input: "#endDate"
            })]
        });
    </script>
@endsection
