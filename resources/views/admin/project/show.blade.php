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
                            <h2 class="content-header-title float-left mb-0">Project Details</h2>
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
                            {{-- <div class="row my-2">
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
                            </div> --}}




                            <div class="card-body">
                                <div class="row my-2">
                                    <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{ url('project/preview/' . $project->preview_img) }}" class="img-fluid projectimg-responsive product-img" alt="product image">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <h4 style="margin-bottom: 1px;"> {{ $project->title }}</h4>
                                        <span   class="card-text item-company">By <a href="javascript:void(0)" class="company-name">
                                             {{ $project->company_name }}</a></span>

                                        <p style="margin: 12px 0 1px 0" class="card-text">Date - <span class="text-success"> {{ $project->date }}</span></p>
                                        <p class="card-text">Location - <span class="text-success"> {{ $project->location }}</span></p>

                                            Description -

                                        <div style="padding: 0px 0px;gap: 229px;" class="col-12 d-flex">
                                        <p style="padding: 0px 0px;" class="col-6 text-justify card-text">
                                            GPS, Always-On Retina display, 30% larger screen, Swimproof, ECG app, Electrical and optical heart sensors,
                                            Built-in compass, Elevation, Emergency SOS, Fall Detection, S5 SiP with up to 2x faster 64-bit dual-core
                                            processor, watchOS 6 with Activity trends, cycle tracking, hearing health innovations, and the App Store on
                                            your wrist
                                        </p>
                                        <div style="padding: 0px 0px;" class="col-6 card-text">
                                            Company Logo
                                            <div class="">
                                                <div class="mt-1 mb-2 media flex-column flex-md-row">
                                                    <img src="{{ url('project/client/' . $project->company_logo) }}" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="100" height="100" alt="Blog Featured Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="d-flex flex-column flex-sm-row pt-1">
                                            <a href="{{ route('admin.project.image.create', $project->id) }}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect waves-float waves-light">

                                                <span class="add-to-cart">Add Images</span>
                                            </a>
                                            <a href="{{ route('admin.project.destroy', $project->id) }}"  onclick="return confirm('Are you sure?');" class="btn btn-danger btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect waves-float waves-light">

                                                <span class="add-to-cart">Delete</span>
                                            </a>

                                            <div class="btn-group dropdown-icon-wrapper btn-share">

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                    <div class="card-footer">
                                                        <a onclick="return confirm('Are you sure?')"
                                                            class="btn w-100 btn-danger"
                                                            href="{{ route('admin.project.image.destroy', [$project->id, $img->id]) }}">
                                                            Delete
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
                </section>
            </div>
        </div>
    </div>

































@endsection
