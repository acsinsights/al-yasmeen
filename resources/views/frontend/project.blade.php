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
                <div class="row d-flex">

                        <div class="project-box">
                            <div class="col-xl-6 pro-box col-lg-4 col-md-6">

                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner slider-box">
                                    @foreach ($projects as $project)
                                    <div class="carousel-item  active">
                                        <img src="{{ $project->media ? asset('projects-img/'    . $project->media) : '' }}"
                                            class="d-block w-100"
                                            alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="project-details">
                                <div class="company-details">
                                    <h4>Advanced Technology Company (ATC) K.S.C.P</h4>
                                    <h3>Ministry of Water – Fume Hood &
                                        Laboratory work</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit oluptatibus blanditiis amet optio
                                        fugiat nisi est repellendus iusto quis harum
                                        laboriosam nostrum unde distinctio</p>
                                    <div class="company-description">
                                        <div class="col-xl-8 col-lg-8 col-md-12">
                                            <h5 style="font-weight:300;">Date - January 2021</h5>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <img src="https://petals-india.com/cdn/shop/files/Petals_India_Logo-02.png?height=66&v=1686217610" alt="company-logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-xl-6 pro-box col-lg-4 col-md-6">
                            <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner slider-box">
                                    <div class="carousel-item  active">
                                        <img src="{{ asset('user-assets/images/about/about-sm1.jpg') }}"
                                            class="d-block w-100"
                                            alt="{{ asset('user-assets/images/about/about-sm1.jpg') }}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('user-assets/images/about/about-sm1.jpg') }}"
                                            class="d-block w-100"
                                            alt="{{ asset('user-assets/images/about/about-sm1.jpg') }}">
                                        {{-- <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div> --}}
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('user-assets/images/about/about-sm1.jpg') }}"
                                            class="d-block w-100"
                                            alt="{{ asset('user-assets/images/about/about-sm1.jpg') }}">
                                        {{-- <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5 <p>Some representative placeholder content for the
                                            third slide.</p>
                                        </div> --}}
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div class="project-details">

                                <div class="company-details">
                                    <h4>Company - ACS Insights</h4>
                                    <h3>Title - Adarsh jadhav Company</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit oluptatibus blanditiis amet optio
                                        fugiat nisi est repellendus iusto quis harum
                                        laboriosam nostrum unde distinctio</p>
                                    <div class="company-description">
                                        <div class="col-xl-8 col-lg-8 col-md-12">

                                            <h5>Date - 02/20/2000</h5>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <img src="https://petals-india.com/cdn/shop/files/Petals_India_Logo-02.png?height=66&v=1686217610" alt="company-logo">
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
















                        {{-- <div class="row">
                <div class="col-xl-12">
                  <nav class="pagination-nav pdt-30">
                    <ul class="pagination-list">
                      <li class="pagination-left-arrow">
                        <a href="#"><i class="fa fa-angle-left"></i></a>
                      </li>
                      <li class="active"><a href="#">01</a></li>
                      <li><a href="#" class="page-numbers">02</a></li>
                      <li><a href="#" class="page-numbers">03</a></li>
                      <li><a href="#" class="page-numbers">04</a></li>
                      <li class="pagination-right-arrow">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div> --}}
                    </div>
                </div>
            </div>
    </section>




    <!-- Project Section End -->
    <!-- Testimonials Section Start -->
    <section class="testimonial-style2-section pdt-40 pdb-110 bg-no-repeat bg-cover bg-pos-cb"
        data-background="{{ asset('user-assets/images/bg/abs-bg7.png') }}">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-box-center">
                            <h5 class="sub-title-line-bottom text-primary-color mrb-10">Testimonials</h5>
                            <h2 class="title">What Our <span class="text-primary-color">Clients</span> Say about us?</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel testmonial_3col testimonial-style2 text-left">
                        @foreach ($testimonials as $tt)
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <img src="/testiimages/{{ $tt->custimg }}"
                                        alt="" />
                                </div>
                                <div class="testimonial-content">
                                    <p class="comments"> {{ $tt->custreview }}</p>
                                    <h4 class="client-name">{{ $tt->custname }}</h4>
                                    <h6 class="client-designation">{{ $tt->custdesignation }}, {{ $tt->custcompany }}</h6>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- Testimonials Section End -->


@endsection
