@extends('admin.includes.app')
@section('title', 'show Project')
@section('content')

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project</a>
                                    </li>
                                    <li class="breadcrumb-item active"> {{ $project->title }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="card-options">
                        <a href="{{ route('admin.project.image.create', $project->id) }}" class="btn btn-primary mr-1">
                            Add Image
                        </a>
                    </div>
                </div>


                <div class="content-detached content-left">
                    <div class="">
                        <div class="blog-detail-wrapper">
                            <div class="row">
                                <div class="p-5 ">
                                    <div class="card">
                                        <img style="height: 400px;width:400px;"
                                            src="{{ url('project/preview/' . $project->preview_img) }}"
                                            class="img-fluid card-img-top" alt="Blog Detail Pic">
                                        <div class="card-body">
                                            <h4 class="card-title"> {{ $project->title }}</h4>
                                            <p class="card-text mb-2">
                                                {{ $project->description }}
                                            </p>

                                            <div class="align-items-center media">
                                                <div class=" mr-2">
                                                    <h6>Location-{{ $project->location }} </h6>
                                                    <h6>Date-{{ $project->location }}</h6>
                                                </div>

                                                <div class="avatar mr-2">
                                                    <img src="{{ url('project/client/' . $project->company_logo) }}"
                                                        width="60" height="60" alt="Avatar">
                                                </div>

                                            </div>
                                            <hr class="my-2">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pt-5">
                                    <div class="row">
                                        @forelse ($images as $img)
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <img class="card-img-top img-fluid"
                                                                src="{{ url('project/image/' . $img->image) }}"
                                                                alt="Card image cap">
                                                        </div>
                                                        <div class="card-footer">
                                                            <a onclick="return confirm('Are you sure?')"
                                                                class="btn btn-danger"
                                                                href="{{ route('admin.project.image.destroy', [$project->id, $img->id]) }}">

                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="text-danger col-12">
                                                No Image Found
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="content-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row" id="basic-table">
                            <div class="col-md-6 col-12 mb-2">
                                <b>
                                    Project Title:
                                </b>
                                {{ $project->title }}
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <b>
                                    Company Name:
                                </b>
                                {{ $project->company_name }}
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <b>
                                    Company Logo: <br>
                                </b>
                                <img src="{{ url('project/client/' . $project->company_logo) }}" class="img-responsive"
                                    style="max-height:100px; max-width:100px" alt="">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <b>
                                    Preview Image: <br>
                                </b>
                                <img src="{{ url('project/preview/' . $project->preview_img) }}" class="img-responsive"
                                    style="max-height:100px; max-width:100px" alt="">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <b>
                                    Location:
                                </b>
                                {{ $project->location }}
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <b>
                                    Date:
                                </b>
                                {{ date('d-m-Y', strtotime($project->date)) }}
                            </div>
                            <div class="col-12 mb-2">
                                <b>
                                    Project Description:
                                </b>
                                <br>
                                {{ $project->description }}
                            </div>
                            <div class="col-12 mb-2">
                                <div class="row">

                                    @forelse ($images as $img)
                                        <div class="col-lg-3 col-md-4 col-6">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <img class="card-img-top img-fluid"
                                                            src="{{ url('project/image/' . $img->image) }}"
                                                            alt="Card image cap">
                                                    </div>
                                                    <div class="card-footer">
                                                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger"
                                                            href="{{ route('admin.project.image.destroy', [$project->id, $img->id]) }}">
                                                            Delete
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="text-danger col-12">
                                            No Image Found
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
        </div>
    </div>

































@endsection
