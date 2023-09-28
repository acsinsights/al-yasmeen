@extends('frontend.layouts.app')
@section('title', 'Our Services')
@section('page')




    <section class="page-title-section1 page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title">Services</h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-inner-page-section-style1 pdt-70  ">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-box-center">
                            <h2 class="title"> Transform Ordinary Places with <br> Our Fit Out Expertise!</h2>
                            <ul style="margin-top: 10px" class="breadcrumbs-link">
                                <li><a style="color: black" href="index.html">At Al Yasmeen, we turn rooms into
                                        extraordinary spaces, <br> handling every aspect from planning to completion.
                                    </a></li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us-style2-section bg-no-repeat bg-cover bg-pos-cb pdb-lg-80"
        data-background="images/bg/16.jpg"
        style="background-image: url(&quot;images/bg/16.jpg&quot;);">
        <div class="why-choose-us-style2-obj1">
            <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj1.png') }}" alt="">
        </div>
        <div class="why-choose-us-style2-obj2">
            <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj2.png') }}" alt="">
        </div>
        <div class="section-content">
            <div class="container">
                <div style="align-items: center;" class="row mrb-110" >
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Laboratory Solutions<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">Our mission is to transform, inspire, and motivate people through the
                            use
                            of advanced fit-out solutions in venues. By providing personalized designs
                            and flawless execution, we aim to be the pinnacle of quality and go above
                            and beyond for our clients. We aspire to design spaces that have a lasting
                            influence and improve how people live, work, and interact with their surroundings. We are
                            incessantly in search of excellence</p>

                    </div>
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container"
                                style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('user-assets/images/before-after/1.jpg') }}" alt="img1"
                                    class="twentytwenty-before" style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('user-assets/images/before-after/2.jpg') }}" alt="img1"
                                    class="twentytwenty-after" style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div style="align-items: center;" class="row mrb-110">
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container" style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('user-assets/images/before-after/3.jpg') }}" alt="img1"
                                    class="twentytwenty-before" style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('user-assets/images/before-after/4.jpg') }}" alt="img1"
                                    class="twentytwenty-after" style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class=" text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Datacenter Solutions<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">To lead advancement in the field by redefining fit-out solutions with
                            creativity and unmatched craftsmanship. We strive to establish new standards
                            and design environments that astonish viewers and improve the quality of
                            human interaction through our persistent dedication to innovation and
                            client satisfaction.</p>
                    </div>
                </div>

                <div style="align-items: center;" class="row mrb-110" >
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Audio-Video Solutions<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">Our mission is to transform, inspire, and motivate people through the
                            use
                            of advanced fit-out solutions in venues. By providing personalized designs
                            and flawless execution, we aim to be the pinnacle of quality and go above
                            and beyond for our clients. We aspire to design spaces that have a lasting
                            influence and improve how people live, work, and interact with their surroundings. We are
                            incessantly in search of excellence</p>

                    </div>
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container"
                                style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('user-assets/images/before-after/1.jpg') }}" alt="img1"
                                    class="twentytwenty-before" style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('user-assets/images/before-after/2.jpg') }}" alt="img1"
                                    class="twentytwenty-after" style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div style="align-items: center;" class="row mrb-110">
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container" style="height: 397.5px;">
                                <!-- The before image is first -->
                                <img src="{{ asset('user-assets/images/before-after/3.jpg') }}" alt="img1"
                                    class="twentytwenty-before" style="clip: rect(0px, 318px, 397.5px, 0px);">
                                <!-- The after image is last -->
                                <img src="{{ asset('user-assets/images/before-after/4.jpg') }}" alt="img1"
                                    class="twentytwenty-after" style="clip: rect(0px, 636px, 397.5px, 318px);">
                                <div class="twentytwenty-overlay">
                                    <div class="twentytwenty-before-label" data-content="Before"></div>
                                    <div class="twentytwenty-after-label" data-content="After"></div>
                                </div>
                                <div class="twentytwenty-handle" style="left: 318px;"><span
                                        class="twentytwenty-left-arrow"></span><span
                                        class="twentytwenty-right-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class=" text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Fit Out Solution<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">To lead advancement in the field by redefining fit-out solutions with
                            creativity and unmatched craftsmanship. We strive to establish new standards
                            and design environments that astonish viewers and improve the quality of
                            human interaction through our persistent dedication to innovation and
                            client satisfaction.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>






@endsection
