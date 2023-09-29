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
        {{-- <div class="why-choose-us-style2-obj1">
            <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj1.png') }}" alt="">
        </div>
        <div class="why-choose-us-style2-obj2">
            <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj2.png') }}" alt="">
        </div> --}}
        <div class="section-content">
            <div class="container">
                <div style="align-items: center;" class="row mrb-110" >
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Laboratory Solutions<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">Elevate your laboratory with cutting-edge solutions from Al Yasmeen. We offer a diverse range of products to equip your lab for excellence. Our ventilated devices include laboratory fume hoods, benchtop fume hoods, and specialized options like distillation and radioisotope hoods.

                            Enhance your lab's functionality with our modular laboratory furniture, featuring metal, phenolic, plastic laminated, polypropylene, wood, and stainless steel casework. Safety is paramount, and our Safety Cabinets for Flammable and Combustible Liquid Storage provide the utmost security.

                            Our innovative lab supplies elevate your research environment to new heights.</p>

                    </div>
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <img src="{{ asset('user-assets/images/projects/laboratory-solution.png') }}" alt="img1"
                            class="" >
                        </div>
                    </div>
                </div>

                <div style="align-items: center;" class="row mrb-110">
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <img src="{{ asset('user-assets/images/projects/datacenter-solution.png') }}" alt="img1"
                            class="" >
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class=" text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Datacenter Solutions<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">Explore our comprehensive datacenter solutions, where we provide customized datacenter solutions perfectly aligned with your unique requirements. Our services encompass construction and classification based on design and tier ratings, ensuring you receive precisely what your operation needs. We offer various types of data centers, including enterprise data centers, managed services data centers, cloud-based data centers, colocation data centers, and Edge/Micro data centers. Furthermore, our classification of data centers is based on tier ratings, ranging from Tier I data centers with basic capacity to Tier IV data centers offering unmatched fault tolerance. Trust us to deliver the optimal data center solution tailored to your specifications, guaranteeing reliability and performance</p>
                    </div>
                </div>

                <div style="align-items: center;" class="row mrb-110" >
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Audio-Video Solutions<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">Experience the pinnacle of audio and video excellence with Al Yasmeen's state-of-the-art solutions. From expert Dolby Atmos setups that transport you into the heart of your entertainment to meticulous home cinema calibration, we craft unforgettable experiences. Our expertise extends to acoustics and soundproofing, ensuring every sound is crystal clear. With home cinema automation, your entertainment is at your fingertips, effortlessly. Our dedicated team specializes in home cinema design and installation, making your dreams a reality. Whether it's TV or projector installation, we've got you covered. Plus, count on us for consistent home cinema maintenance and support, ensuring your entertainment is always top-notch.</p>

                    </div>
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <img src="{{ asset('user-assets/images/projects/audio-video-solution.png') }}" alt="img1"
                            class="" >
                        </div>
                    </div>
                </div>


                <div style="align-items: center;" class="row mrb-110">
                    <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                            <img src="{{ asset('user-assets/images/projects/fit-out-solution.png') }}" alt="img1"
                            class="" >
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms"
                        style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class=" text-primary-color mrb-10"></h5>
                        <h2 class="text-dark mrb-30 mrb-sm-30">
                            <span class="text-primary-color">Fit Out Solution<br> </span>
                        </h2>
                        <p class="text-dark mrb-40">We're dedicated to transforming spaces into extraordinary environments through our comprehensive Fit-Out Solutions. Our services cover everything from project planning to completion, ensuring your vision is realized. We offer planning, cost analysis, interior design, space planning, and construction documentation. Additionally, we excel in design and build projects, including new construction, renovation, and remodeling. Our project management services encompass value engineering, construction management, cost control, and detailed documentation. We serve various sectors, including hotels, healthcare, offices, retail, F&B, education, and the public sector, delivering excellence in every project.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>






@endsection
