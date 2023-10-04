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
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ url('project/preview/' . $project->preview_img) }}" class="img-fluid product-img" alt="Project image">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h2 style="font-weight: 800"> {{ $project->title }}</h2>
                                    <p class="card-text">
                                        {{ $project->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class=" text-center">
                                <h4>Other Images</h4>
                            </div>
                            <div class="col-12 pt-5">
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
                                                    {{-- <div class="card-footer">
                                                        <a onclick="return confirm('Are you sure?')"
                                                            class="btn btn-danger"
                                                            href="{{ route('admin.project.image.destroy', [$project->id, $img->id]) }}">

                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div> --}}
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
                </section>
            </div>
        </div>
    </div>

































@endsection
