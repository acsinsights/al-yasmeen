@extends('frontend.layouts.app')
@section('title', 'Featured Projects')
@section('page')


    <!-- Page Title Start -->
    <section class="page-title-section3 page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title">Projects</h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li class="active">Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- Project Section Start -->
    <section class="pdt-110 pdb-80">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-box-center">
                            <h2 class="title"> Showcasing Our Success Stories</h2>
                            <ul style="margin-top: 10px" class="breadcrumbs-link">
                                <li><a style="color: black" href="index.html">Explore a few of our accomplished projects
                                        that <br> demonstrate our abilities.
                                    </a></li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div  class="project-box projects-container">
                        @forelse ($projects as $project_key=> $project)
                            <div class="pro-box   ">
                                <div id="project-slider-{{ $project_key }}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#project-slider-{{ $project_key }}"
                                            data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                        </button>
                                        @forelse ($project->images as $img_key=> $img)
                                            <button type="button" data-bs-target="#project-slider-{{ $project_key }}"
                                                data-bs-slide-to="{{ $img_key + 1 }}"
                                                aria-label="Slide {{ $img_key + 1 }}">
                                            </button>
                                        @empty
                                        @endforelse
                                    </div>
                                    <div class="carousel-inner slider-box">
                                        <div class="carousel-item  active">
                                            <img src="{{ url('project/preview/' . $project->preview_img) }}"
                                                class="d-block w-100" alt="{{ $project->title }}">
                                        </div>
                                        @forelse ($project->images as $img)
                                            <div class="carousel-item">
                                                <img src="{{ url('project/image/' . $img->image) }}"
                                                    class="d-block w-100">
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#project-slider-{{ $project_key }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#project-slider-{{ $project_key }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="project-details">
                                    <div class="company-details">
                                        <h6>{{ $project->company_name }}</h6>
                                        <h4>{{ $project->title }}</h4>
                                        <div style="margin-top: 28px!important;" class="company-description">
                                            <div class="col-xl-4 col-lg-8 col-md-12">
                                                <h5 style="font-weight: 100;">
                                                    Location: <br>{{ $project->location }}
                                                </h5>
                                            </div>
                                            <div class="col-xl-4 col-lg-8 col-md-12">
                                                <h5 style="font-weight: 100;">
                                                    Date: <br> {{ date('d-m-Y', strtotime($project->date)) }}
                                                </h5>
                                            </div>
                                            <div  class="col-xl-4 col-lg-4 mt-4 col-md-12">

                                                <img style="height: 100px;" src="{{ url('project/client/' . $project->company_logo) }}"
                                                    alt="company-logo">
                                                    <h5 style="font-weight: 100;">
                                                        Company Logo
                                                    </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

 
@endsection
