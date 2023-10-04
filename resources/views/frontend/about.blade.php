@extends('frontend.layouts.app')
@section('title', 'Featured Projects')
@section('page')




    <!-- Page Title Start -->

    <section class="page-title-section2 page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title">About Us</h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Title End -->
    <section class="about-section pdt-110 pdb-105 bg-no-repeat bg-cover bg-pos-cb"
        data-background="{{ asset('user-assets/images/bg/abs-bg3.png') }}" data-overlay-light="4"
        style="background-image: url(user-assets/images/bg/abs-bg3.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="about-image-box-style1 about-side-line mrr-60 mrr-lg-0">
                        <figure class="about-image1 js-tilt d-none d-md-block d-lg-block d-xl-block">
                            <img class="img-full" src="{{ asset('user-assets/images/about/about-sm1.jpg') }}"
                                alt="">
                            <div class="js-tilt-glare"
                                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                    style="position: absolute; top: 50%; left: 50%; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); width: 840px; height: 840px; transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0;">
                                </div>
                            </div>
                            <div class="js-tilt-glare"
                                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                    style="position: absolute; top: 50%; left: 50%; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); width: 840px; height: 840px; transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0;">
                                </div>
                            </div>
                        </figure>
                        <figure class="about-image2">
                            <img class="img-full" src="{{ asset('user-assets/images/about/about-lg1.jpg') }}"
                                alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                    <h5 class="side-line-left subtitle text-primary-color">About Our Company</h5>

                    <h2 class="mrb-45 mrb-lg-35">Creating imaginative designs, turning spaces into art.</h2>
                    <p class="about-text-block mrb-40">Making Exceptional interiors The pursuit of excellence,
                        inventiveness, and specialized solutions fuels our passion. Planning, design, and project management
                        are all included in our comprehensive services. We create functional works of art in all kinds of
                        settings, from hotels to offices, fusing creativity with utility.
                    </p>
                    {{-- <div class="row mrb-30 mrb-lg-40">
                <div class="col-xl-6 col-lg-6 col-md-12">
                  <ul class="order-list primary-color">
                    <li>business applications through</li>
                    <li>procedures whereas processes</li>
                  </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                  <ul class="order-list primary-color">
                    <li>revolutionary catalysts for chang</li>
                    <li>catalysts for chang the Seamlessly</li>
                  </ul>
                </div>
              </div> --}}
                    <div class="row no-gutters">
                        <div class="col-xl-12 col-lg-7 col-md-6 col-sm-6">
                            <div class="featured-icon-box mrb-15">
                                <div class="featured-icon">
                                    <i class="webexflaticon webextheme-icon-003-staircase"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">Exclusive Design</h4>
                                    <p class="featured-desc">Quickly productivate just in time strategic theme lacus mirina
                                        magna</p>
                                </div>
                            </div>
                            <div class="featured-icon-box mrb-sm-40">
                                <div class="featured-icon">
                                    <i class="webexflaticon base-icon-158-employee-2"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">Professional Team</h4>
                                    <p class="featured-desc mrb-0">Quickly productivate just in time strategic theme lacus
                                        mirina magna</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                            <div class="experience">
                                <p class="experience-text">We have more than years of experience</p>
                                <h4 class="experience-year">14+</h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="why-choose-us-style2-section bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80"
        data-background="images/bg/16.jpg" data-overlay-dark="98"
        style="background-image: url(&quot;images/bg/16.jpg&quot;);">
        <div class="why-choose-us-style2-obj1">
            <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj1.png') }}" alt="">
        </div>
        <div class="why-choose-us-style2-obj2">
            <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj2.png') }}" alt="">
        </div>
        <div class="section-content">
            <div class="container">
                <div style="align-items: center;" class="row mrb-110">
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color mrb-10"></h5>
                        <h2 class="text-white mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Our Mission<br> </span>
                        </h2>
                        <p class="text-white mrb-40">Our mission is to transform, inspire, and motivate people through the
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
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms"
                        data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <div class="twentytwenty-wrapper twentytwenty-horizontal">
                                <div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container"
                                    style="height: 397.5px;">
                                    <!-- The before image is first -->
                                    <img src="{{ asset('user-assets/images/before-after/3.jpg') }}" alt="img1"
                                        class="twentytwenty-before" style="clip: rect(0px, 318px, 397.5px, 0px);">
                                    <!-- The after image is last -->
                                    <img src="{{ asset('user-assets/images/before-after/4.jpg') }}" alt="img1"
                                        class="twentytwenty-after" style="clip: rect(0px, 636px, 397.5px, 318px);">
                                    <div class="twentytwenty-overlay">
                                        <div class="twentytwenty-before-label" data-content="Before"></div>
                                        <div class="twentytwenty-after-label" data-content="After"></div>
                                        <div class="twentytwenty-before-label" data-content="Before"></div>
                                        <div class="twentytwenty-after-label" data-content="After"></div>
                                    </div>
                                    <div class="twentytwenty-handle" style="left: 318px;"><span
                                            class="twentytwenty-left-arrow"></span><span
                                            class="twentytwenty-right-arrow"></span><span
                                            class="twentytwenty-left-arrow"></span><span
                                            class="twentytwenty-right-arrow"></span></div>
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
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class=" text-primary-color mrb-10"></h5>
                        <h2 class="text-white mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Our Vision<br> </span>
                        </h2>
                        <p class="text-white mrb-40">To lead advancement in the field by redefining fit-out solutions with
                            creativity and unmatched craftsmanship. We strive to establish new standards
                            and design environments that astonish viewers and improve the quality of
                            human interaction through our persistent dedication to innovation and
                            client satisfaction.</p>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 100px;"
        class="why-choose-us-style2-section bg-white bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80"
        data-background="{{ asset('user-assets/images/bg/16.jpg') }}" data-overlay-light="98"
        style="background-image: url(&quot;images/bg/16.jpg&quot;);">

        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12  col-lg-12 col-xl-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 style="padding-left: 1px" class=" text-center text-primary-color mrb-10"></h5>
                        <div class="col-xl-12 text-center col-lg-12 col-md-12">
                            {{-- <h5 class="side-line-left text-primary-color mrb-10">Our Works</h5> --}}
                            <h2 class="mrb-45">Our <span class="text-primary-color">Values</span></h2>
                            {{-- <a href="page-services-style-01.html" class="animate-btn-style2 mrb-sm-60">All Services</a> --}}
                        </div>
                        <p class="text-dark text-center mrb-45"> The heart of our business activities lies in its interior
                            fit-out division, demonstrating our commitment to effective communication with both customers
                            and colleagues</p>
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="icon-box-style1 mrb-md-40">
                                    <div style="margin-bottom: 1px!important;" class="featured-icon">
                                        <img src="{{ asset('user-assets/images/service/excellence.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="icon-box-content">
                                        <h4 class="text-dark icon-box-title">Excellence </h4>
                                        <p class="icon-box-desc">Committed to excellence from concept to execution, we
                                            maintain the highest standards with meticulous attention.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="icon-box-style1 mrb-md-40">
                                    <div style="margin-bottom: 1px!important;" class="featured-icon">
                                        <img src="{{ asset('user-assets/images/service/innovation.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="icon-box-content">
                                        <h4 class="text-dark icon-box-title">Innovation </h4>
                                        <p class="icon-box-desc">We relentlessly pursue innovation, pushing boundaries to
                                            create uniquely inspiring spaces.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="icon-box-style1">
                                    <div style="margin-bottom: 1px!important;" class="featured-icon">
                                        <img src="{{ asset('user-assets/images/service/customer-centric.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="icon-box-content">
                                        <h4 class=" text-dark icon-box-title">Customer-Centric</h4>
                                        <p class="icon-box-desc">We attentively listen and collaborate, tailoring fit-out
                                            solutions to meet your aspirations.Quickly productivate time strategic mirina
                                            magna</p>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div style="margin-top: 30px" class="col-xl-3 col-lg-4 col-md-6">
                                <div class="icon-box-style1">
                                    <div style="margin-bottom: 1px!important;" class="featured-icon">
                                        <img src="{{ asset('user-assets/images/service/integrity.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="icon-box-content">
                                        <h4 class="text-dark icon-box-title">Integrity </h4>
                                        <p class="icon-box-desc">Our bedrock is trust and integrity, fostering enduring
                                            relationships through ethical, transparent, and honest interactions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 30px" class="col-xl-3  col-lg-4 col-md-6">
                                <div class="icon-box-style1">
                                    <div style="margin-bottom: 1px!important;" class="featured-icon">
                                        <img src="{{ asset('user-assets/images/service/passion.svg') }}" alt="">
                                    </div>
                                    <div class="icon-box-content">
                                        <h4 class="text-dark icon-box-title">Passion </h4>
                                        <p class="icon-box-desc">Driven by our passion, we tackle each project with zeal
                                            and commitment, crafting exceptional spaces that enhance lives.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
