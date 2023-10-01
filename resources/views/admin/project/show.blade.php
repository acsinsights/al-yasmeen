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
                        <a href="{{ route('admin.project.create') }}" class="btn btn-primary mr-1">
                            Add Image
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-body">
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
