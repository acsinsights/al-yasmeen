@extends('frontend.layouts.app')
@section('title', 'Home')
@section('page')



<section class="home_banner_03 shape-position pdt-120 pdt-lg-105 pdb-120" data-background="{{ asset('user-assets/images/bg/17.jpg') }}" data-overlay-dark="8">
    <div class="home-style-03-shpe1"></div>
    <div class="home-style-03-shpe2"></div>
    <div class="home-style-03-shpe3"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-10 col-xl-7 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="500ms">
          <div class="content-box mrb-lg-60 text-lg-start text-center">
            <h1 class="static-home-banner-title text-white mrb-30">Transforming Spaces,
                <span class="text-obj2"> Enriching </span>Lives!</h1>
            <p class="text-white mrb-50">
                We create places that inspire and genuinely enrich <br> lives by giving spaces
                Life.

            </p>
            <div class="btn-box">
              <a href="{{ '/contact' }}" class="animate-btn-style3">Get in touch</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-10 col-xl-5 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
          <div class="request-a-call-back-form-style2">
            <h3 class="mrt-0 mrb-30">Need Any Help?</h3>
            <form action="#">
              <div class="row">
                <div class="col-xl-12">
                  <div class="mrb-20">
                    <input type="text" placeholder="Name" class="form-control" />
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="mrb-20">
                    <input type="phone" placeholder="Phone" class="form-control" />
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="mrb-20">
                    <input type="email" placeholder="Email" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mrb-20">
                    <textarea rows="4" name="message" placeholder="Messages" class="form-control" required=""></textarea>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="mrb-0">
                    <button type="submit" class="cs-btn-one btn-primary-color btn-square btn-block">Request Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Home Slider End -->

    <!-- Feature Work Section Area Start -->
    <section class="feature-work-section pdt-110 pdb-105" data-background="images/bg/14.jpg" data-overlay-light="96">
        <div class="section-content">
          <div class="container">
            <div class="col-xl-12 text-center col-lg-12 col-md-12">
                {{-- <h5 class="side-line-left text-primary-color mrb-10">Our Works</h5> --}}
                <h2 class="mrb-45">Our Feature <span class="text-primary-color">Works</span></h2>
                {{-- <a href="page-services-style-01.html" class="animate-btn-style2 mrb-sm-60">All Services</a> --}}
              </div>
            <div class="row">

              <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="service-style1">
                  <div class="service-inner">
                    <i class="service-icon webextheme-icon-armchair"></i>
                    <h4 class="service-title">Laboratory Solutions</h4>
                    <div class="services-count"></div>
                    <p class="service-description">We supply a range of products, including safety cabinets, ventilated equipment, modular lab furniture, and more.</p>
                    {{-- <div class="services-link">
                      <a class="text-btn" href="service-architecture.html">Read More</a>
                    </div> --}}
                    <div class="service-inner-obj"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="service-style1">
                  <div class="service-inner1 service-inner">
                    <i class="service-icon webextheme-icon-kitchen"></i>
                    <h4 class="service-title">Datacenter Solutions</h4>
                    <div class="services-count"></div>
                    <p class="service-description">Explore tailored data center solutions with construction and classification based on design and tier ratings.</p>
                    {{-- <div class="services-link">
                      <a class="text-btn" href="service-architecture.html">Read More</a>
                    </div> --}}
                    <div class="service-inner-obj"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="service-style1">
                  <div class="service-inner2 service-inner">
                    <i class="service-icon webextheme-icon-art-and-design-1"></i>
                    <h4 class="service-title">Audio-Video Solutions</h4>
                    <div class="services-count"></div>
                    <p class="service-description">We promise exceptional entertainment, from Dolby Atmos setups to home theater automation.</p>
                    {{-- <div class="services-link">
                      <a class="text-btn" href="service-architecture.html">Read More</a>
                    </div> --}}
                    <div class="service-inner-obj"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="service-style1">
                  <div class="service-inner3 service-inner">
                    <i class="service-icon webextheme-icon-architect"></i>
                    <h4 class="service-title"> Fit Out Solution</h4>
                    <div class="services-count"></div>
                    <p class="service-description">Our Fit Out Solutions cover every step, from project planning to completion, ensuring your vision becomes reality.</p>
                    {{-- <div class="services-link">
                      <a class="text-btn" href="service-architecture.html">Read More</a>
                    </div> --}}
                    <div class="service-inner-obj"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Offer Section Start -->

  <!-- Feature Work Section Area Start -->
  <section class="about-section  pdb-105 bg-no-repeat bg-cover bg-pos-cb" data-background="{{ asset('user-assets/images/bg/abs-bg3.png') }}  " data-overlay-light="4" style="background-image: url(/user-assets/images/bg/abs-bg3.png);">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
          <div class="about-image-box-style1 about-side-line mrr-60 mrr-lg-0">
            <figure class="about-image1 js-tilt d-none d-md-block d-lg-block d-xl-block">
              <img class="img-full" src="{{ asset('user-assets/images/about/about-sm1.jpg') }}" alt="">
            <div class="js-tilt-glare" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;"><div class="js-tilt-glare-inner" style="position: absolute; top: 50%; left: 50%; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); width: 840px; height: 840px; transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0;"></div></div></figure>
            <figure class="about-image2">
              <img class="img-full" src="{{ asset('user-assets/images/about/about-lg1.jpg') }}" alt="">
            </figure>
          </div>
        </div>
        <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
          <h5 class="side-line-left subtitle text-primary-color">About Our Company</h5>

          <h2 class="mrb-45 mrb-lg-35">Providing design <span class="text-primary-color"> beyond imagination </span> &amp; transforming spaces into works of art</h2>
          <p class="about-text-block mrb-40">Making Exceptional interiors The pursuit of excellence, inventiveness, and specialized solutions fuels our passion. Planning, design, and project management are all included in our comprehensive services. We create functional works of art in all kinds of settings, from hotels to offices, fusing creativity with utility.
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
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6">
              <div class="featured-icon-box mrb-15">
                <div class="featured-icon">
                  <i class="webexflaticon webextheme-icon-003-staircase"></i>
                </div>
                <div class="featured-content">
                  <h4 class="featured-title">Exclusive Design</h4>
                  <p class="featured-desc">Quickly productivate just in time strategic theme lacus mirina magna</p>
                </div>
              </div>
              <div class="featured-icon-box mrb-sm-40">
                <div class="featured-icon">
                  <i class="webexflaticon base-icon-158-employee-2"></i>
                </div>
                <div class="featured-content">
                  <h4 class="featured-title">Professional Team</h4>
                  <p class="featured-desc mrb-0">Quickly productivate just in time strategic theme lacus mirina magna</p>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
              <div class="experience">
                <p class="experience-text">We have more than years of experience</p>
                <h4 class="experience-year">14+</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Offer Section Start -->
  <section class="why-choose-us-style2-section bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80" data-background="images/bg/16.jpg" data-overlay-dark="98" style="background-image: url(&quot;images/bg/16.jpg&quot;);">
    <div class="why-choose-us-style2-obj1">
      <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj1.png') }}" alt="">
    </div>
    <div class="why-choose-us-style2-obj2">
      <img src="{{ asset('user-assets/images/objects/why-choose-us-style2-obj2.png') }}" alt="">
    </div>
    <div class="section-content">
      <div class="container">
        <div style="align-items: center;" class="row mrb-110">
          <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <h5 class="text-primary-color mrb-10"></h5>
            <h2 class="text-white mrb-30 mrb-sm-30">
        <span class="text-primary-color">Our Mission<br> </span>
            </h2>
            <p class="text-white mrb-40">Our mission is to transform, inspire, and motivate people through the use
                of advanced fit-out solutions in venues. By providing personalized designs
                and flawless execution, we aim to be the pinnacle of quality and go above
                and beyond for our clients. We aspire to design spaces that have a lasting
                influence and improve how people live, work, and interact with their surroundings. We are incessantly in search of excellence</p>

          </div>
          <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
            <div class="twentytwenty-wrapper twentytwenty-horizontal"><div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container" style="height: 397.5px;">
              <!-- The before image is first -->
              <img src="{{ asset('user-assets/images/before-after/1.jpg') }}" alt="img1" class="twentytwenty-before" style="clip: rect(0px, 318px, 397.5px, 0px);">
              <!-- The after image is last -->
              <img src="{{ asset('user-assets/images/before-after/2.jpg') }}" alt="img1" class="twentytwenty-after" style="clip: rect(0px, 636px, 397.5px, 318px);">
            <div class="twentytwenty-overlay"><div class="twentytwenty-before-label" data-content="Before"></div><div class="twentytwenty-after-label" data-content="After"></div></div><div class="twentytwenty-handle" style="left: 318px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div>
          </div>
        </div>



        <div style="align-items: center;" class="row mrb-110">
            <div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 100ms; animation-name: fadeInUp;">
                <div class="twentytwenty-wrapper twentytwenty-horizontal"><div class="before-after-slider1 style2 mrt-lg-60 twentytwenty-container" style="height: 397.5px;">
                  <!-- The before image is first -->
                  <img src="{{ asset('user-assets/images/before-after/3.jpg') }}" alt="img1" class="twentytwenty-before" style="clip: rect(0px, 318px, 397.5px, 0px);">
                  <!-- The after image is last -->
                  <img src="{{ asset('user-assets/images/before-after/4.jpg') }}" alt="img1" class="twentytwenty-after" style="clip: rect(0px, 636px, 397.5px, 318px);">
                <div class="twentytwenty-overlay"><div class="twentytwenty-before-label" data-content="Before"></div><div class="twentytwenty-after-label" data-content="After"></div></div><div class="twentytwenty-handle" style="left: 318px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div>
              </div>
          <div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <h5 class=" text-primary-color mrb-10"></h5>
            <h2 class="text-white mrb-30 mrb-sm-30">
          <span class="text-primary-color">Our Vision<br> </span>
            </h2>
            <p class="text-white mrb-40">To lead advancement in the field by redefining fit-out solutions with creativity and unmatched craftsmanship. We strive to establish new standards
                and design environments that astonish viewers and improve the quality of
                human interaction through our persistent dedication to innovation and
                client satisfaction.</p>

          </div>

        </div>
    </div>
</div>
</section>









<section style="padding-bottom: 100px;" class="why-choose-us-style2-section bg-white bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80" data-background="{{ asset('user-assets/images/bg/16.jpg') }}" data-overlay-light="98" style="background-image: url(&quot;images/bg/16.jpg&quot;);">

    <div class="section-content">
      <div class="container">
     <div class="row">
          <div class="col-md-12  col-lg-12 col-xl-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <h5 style="padding-left: 1px" class=" text-center text-primary-color mrb-10"></h5>
            <div class="col-xl-12 text-center col-lg-12 col-md-12">
                {{-- <h5 class="side-line-left text-primary-color mrb-10">Our Works</h5> --}}
                <h2 class="mrb-45">Our <span class="text-primary-color">Values</span></h2>
                {{-- <a href="page-services-style-01.html" class="animate-btn-style2 mrb-sm-60">All Services</a> --}}
              </div>
            <p class="text-dark text-center mrb-45"> The heart of our business activities lies in its interior fit-out division, demonstrating our commitment to effective communication with both customers and colleagues</p>
            <div class="row justify-content-center text-center">
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="icon-box-style1 mrb-md-40">
                  <div style="margin-bottom: 1px!important;" class="featured-icon">
                <img src="{{ asset('user-assets/images/service/excellence.svg') }}" alt="">
                  </div>
                  <div class="icon-box-content">
                    <h4 class="text-dark icon-box-title">Excellence </h4>
                    <p class="icon-box-desc">Committed to excellence from concept to execution, we maintain the highest standards with meticulous attention.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="icon-box-style1 mrb-md-40">
                  <div style="margin-bottom: 1px!important;" class="featured-icon">
                    <img src="{{ asset('user-assets/images/service/innovation.svg') }}" alt="">
                  </div>
                  <div class="icon-box-content">
                    <h4 class="text-dark icon-box-title">Innovation </h4>
                    <p class="icon-box-desc">We relentlessly pursue innovation, pushing boundaries to create uniquely inspiring spaces.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="icon-box-style1">
                  <div style="margin-bottom: 1px!important;" class="featured-icon">
                    <img src="{{ asset('user-assets/images/service/customer-centric.svg') }}" alt="">
                  </div>
                  <div class="icon-box-content">
                    <h4 class=" text-dark icon-box-title">Customer-Centric</h4>
                    <p class="icon-box-desc">We attentively listen and collaborate, tailoring fit-out solutions to meet your aspirations.Quickly productivate time strategic mirina magna</p>
                  </div>
                </div>
              </div>
            &nbsp;
              <div style="margin-top: 30px" class="col-xl-3 col-lg-4 col-md-6">
                <div class="icon-box-style1">
                  <div style="margin-bottom: 1px!important;" class="featured-icon">
                       <img src="{{ asset('user-assets/images/service/integrity.svg') }}" alt="">
                  </div>
                  <div class="icon-box-content">
                    <h4 class="text-dark icon-box-title">Integrity </h4>
                    <p class="icon-box-desc">Our bedrock is trust and integrity, fostering enduring relationships through ethical, transparent, and honest interactions.
                    </p>
                  </div>
                </div>
              </div>
              <div  style="margin-top: 30px" class="col-xl-3  col-lg-4 col-md-6">
                <div class="icon-box-style1">
                  <div style="margin-bottom: 1px!important;" class="featured-icon">
                       <img src="{{ asset('user-assets/images/service/passion.svg') }}" alt="">
                  </div>
                  <div class="icon-box-content">
                    <h4 class="text-dark icon-box-title">Passion </h4>
                    <p class="icon-box-desc">Driven by our passion, we tackle each project with zeal and commitment, crafting exceptional spaces that enhance lives.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Offer Section End -->



  <!-- Project Section Start -->
  <section style="    padding-bottom: 100px;" class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-105" >
    <div class="section-title mrb-60 mrb-md-15 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-xl-8 col-lg-7 col-md-12">
            <div class="title-box-center">
              <h5 class="side-line-left text-white mrb-10">Our Projects</h5>
              <h2 class="text-white mrb-md-40 mrb-sm-30">
                Our Outstanding <br />
                <span class="text-primary-color">Latest Proejcts</span> & Works
              </h2>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-12 text-lg-start">
            <p class="text-white mrb-0 mrb-md-40">Lorem ipsum dolor sit amet consectetur adipiscing augue curae duis pellentesque proin, quam faucibus accumsan feugiat donec aliquet</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="custom-md-container">
        <div class="row">
          <div class="col-xl-12">
            <div class="project-item-style1-wrapper">
              <div class="owl-carousel projects_4col">

                @foreach ($projects as $project)
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ $project->media ? asset('projects-img/' . $project->media) : '' }}" alt="" />
                    {{-- <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div> --}}
                    <div class="project-item-details">
                      <h6 style="color: #fff" class="project-item-category">{{ $project->projecttitle }}</h6>
                      <h4 class="project-item-title"><a style="color: #fff!important"  href="{{ $project->hyperlinks }}">{{ $project->subservice }}</a></h4>
                    </div>
                  </div>
                </div>
                @endforeach
              {{--<div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('user-assets/images/projects/project_02.jpg ') }}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Modern</h6>
                      <h4 class="project-item-title"><a href="page-project-details.html">Architecture</a></h4>
                    </div>
                  </div>
                </div>

               <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('user-assets/images/projects/project_03.jpg ') }}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Decor</h6>
                      <h4 class="project-item-title"><a href="page-single-project-item">Decoration Art</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('user-assets/images/projects/project_04.jpg ') }}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Design</h6>
                      <h4 class="project-item-title"><a href="page-single-project-item">Modern Kitchen</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('user-assets/images/projects/project_05.jpg ') }}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Modern</h6>
                      <h4 class="project-item-title"><a href="page-project-details.html">Architecture</a></h4>
                    </div>
                  </div>
                </div>
                <div class="project-item-style1">
                  <div class="project-item-thumb">
                    <img class="img-full" src="{{ asset('user-assets/images/projects/project_06.jpg ') }}" alt="" />
                    <div class="project-item-link-icon">
                      <a href="page-project-details.html"><i class="base-icon-next"></i></a>
                    </div>
                    <div class="project-item-details">
                      <h6 class="project-item-category">Modern</h6>
                      <h4 class="project-item-title"><a href="page-project-details.html">Architecture</a></h4>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Project Section End -->



  @endsection
