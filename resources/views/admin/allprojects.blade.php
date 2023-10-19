@extends('admin.includes.app')
@section('title', 'All Projects')
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
                            <h2 class="content-header-title float-left mb-0">All Project</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">All Projects
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
                        <a href="{{ route('admin.project.create') }}" class="btn btn-primary mr-1">Add Project</a>
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
                                <table style="width: 105%;" class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">#No</th>
                                            <th style="text-align: center;">Media</th>
                                            <th>Project Title</th>
                                            <th>date</th>
                                            <th>Sub-Service</th>
                                            <th style="text-align: center;">Edit</th>
                                            <th style="text-align: center;">Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($projects->isNotEmpty())
                                            @foreach ($projects as $key => $project)
                                                <tr style="vertical-align: middle;">
                                                    <th style="text-align: center;" scope="row">
                                                        {{ $key + 1 }}</th>
                                                    <td style="text-align: center;"><img
                                                            src="/projects-img/{{ $project->media }}" class="img-responsive"
                                                            style="max-height:100px; max-width:100px" alt=""
                                                            srcset="">
                                                    </td>
                                                    <td>{{ $project->projecttitle }}</td>
                                                    <td>{{ $project->date }}</td>
                                                    <td>{{ $project->subservice }}</td>
                                                    <td style="text-align: center;"> <a
                                                            href="/admin/editproject/{{ $project->id }}"
                                                            class="btn btn-flat-primary border">Edit</a>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a class="btn btn-flat-danger border"
                                                            onclick="return confirm('Are you sure?');"
                                                            href="/admin/deleteproject/{{ $project->id }}">Delete</a>
                                                    </td>
                                                    {{-- @if ($post->featured_post == 1)
                                                        <td class="text-center vertical-center">
                                                            @if ($post->fstatus == 1)
                                                                <p class="text-success">Added</p>
                                                            @else
                                                                <p class="text-danger">Removed</p>
                                                            @endif
                                                            <form action="/admin/fstatus/{{ $post->id }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <select name="fstatus" id="status" class="form-control">
                                                                    <option value="1">Add</option>
                                                                    <option value="0">Remove</option>
                                                                </select>
                                                                <button class="btn btn-sm btn-outline-secondary mt-2"
                                                                    type="submit">Submit</button>
                                                            </form>
                                                        </td>
                                                    @endif --}}
                                                    <td>


                                                        {{-- <div class="custom-control custom-switch custom-switch-primary">
                                                            <form action="/admin/status/{{ $post->id }}"
                                                                method="post">
                                                            <input type="checkbox" class="custom-control-input" value="{{ $post->id }}" id="customSwitch10" checked="">
                                                            <label class="custom-control-label" for="customSwitch10">


                                                                    <input type="hidden" value="{{ $post->id }}"
                                                                        id="id">
                                                                    <label class="switch">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            {{ $post->featured_post == 1 ? 'checked' : '' }}>
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </form>



                                                                <span class="switch-icon-left"><i data-feather="check"></i></span>

                                                                <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                            </label>
                                                        </div> --}}

                                                        {{-- featured post column --}}

                                                        {{-- <div class="toggle-button-cover" id="margin-zero">
                                                            <div class="button-cover" id="button-cover">
                                                                <div class="button r" id="button-3">
                                                                    <form action="/admin/status/{{ $post->id }}"
                                                                        method="post">
                                                                        <input type="hidden" value="{{ $post->id }}"
                                                                            id="id">
                                                                        <label class="switch">
                                                                            <input type="checkbox"
                                                                                {{ $post->featured_post == 1 ? 'checked' : '' }}>
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        {{-- <div class="toggle-button-cover" id="margin-zero">
                                                            <div class="button-cover" id="button-cover">
                                                                <div class="button r" id="button-3">
                                                                    <form action="/admin/status/{{ $post->id }}"
                                                                        method="post">
                                                                        <input type="hidden" value="{{ $post->id }}"
                                                                            id="id">
                                                                        <label class="switch">
                                                                            <input type="checkbox"
                                                                                {{ $post->featured_post == 1 ? 'checked' : '' }}>
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <label class="m-2">Play Button</label> --}}

                                                        {{-- <div class="toggle-button-cover" id="margin-zero">
                                                            <div class="button-cover" id="button-cover">
                                                                <div class="button r" id="button-3">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="featured" id="featured" value="1">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="10" class="text-center">No records found!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>


                            </div>
                        </div>
                        {{-- {{ $posts->links() }} --}}
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@include('admin.includes.footer')
