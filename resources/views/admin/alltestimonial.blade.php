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
                            <h2 class="content-header-title float-left mb-0">Testimonial</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Testimonial
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-5 alert-message">
                        @include('admin.message')
                    </div> --}}
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
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4 class="card-title">Table Basic</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                                    can use any example of below table for your table and it can be use with any type of bootstrap tables.
                                </p>
                            </div> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th>SR. No</th> --}}
                                            <th>Client Logo</th>
                                            {{-- <th>Logo</th> --}}
                                            <th>Customer Name</th>
                                            <th>Customer Designation</th>
                                            <th>Customer Review</th>
                                            <th>Customer Company</th>
                                            <th>Date</th>
                                            <th style="text-align: center;">Edit</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $tsti)
                                            <tr style="vertical-align: middle;">
                                                {{--  <th scope="row">
                                            {{ $tsti->id }}</th> --}}
                                                <td><img src="/testiimages/{{ $tsti->custimg }}" class="img-responsive"
                                                        style="max-height:80px; max-width:50px" alt=""
                                                        srcset="">
                                                </td>
                                                {{-- <td><img src="/testilogos/{{ $tsti->custlogo }}" class="img-responsive"
                                                        style="max-height:80px; max-width:50px" alt="" srcset=""></td> --}}


                                                <td>{{ $tsti->custname }}</td>

                                                <td>{{ $tsti->custdesignation }}</td>
                                                <td>{{ $tsti->custcompany }}</td>
                                                <td>
                                                    </button>
                                                    {{-- <textarea cols="auto" rows="3" style="padding: 10px;color: white;
                                            background: #2a2e3f; text-align:left" readonly class="">
                                                        {{ $tsti->custreview }}
                                                    </textarea> --}}



                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Textarea</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Textarea">{{ $tsti->custreview }}</textarea>
                                                    </div>

                                                    {{-- <textarea class="form-control" cols="auto" rows="3" style="padding: 10px; text-align:left !important" readonly>
                                                         {{ $tsti->custreview }}
                                                    </textarea> --}}
                                                </td>

                                                <td>{{ $tsti->date }}</td>

                                                <td style="text-align: center;"><a href="/admin/edittestimonial/{{ $tsti->id }}"
                                                        class="btn btn-flat-primary border">Edit</a>
                                                </td>
                                                <td  style="text-align: center;">
                                                    <form action="/admin/deletetestimonial/{{ $tsti->id }}"
                                                        method="post">

                                                        <button class="btn btn-flat-danger border"
                                                            onclick="return confirm('Are you sure?');"
                                                            type="submit">Delete</button>
                                                            @csrf
                                                            @method('delete')
                                                    </form>
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

@endsection
