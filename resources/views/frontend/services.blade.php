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


    <section class="service-inner-page-section-style1 pdt-70 pdb-80">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-8">
                  <div class="title-box-center">
                      <h2 class="title"> Transform Ordinary Places with <br> Our Fit Out Expertise!</h2>
                      <ul style="margin-top: 10px" class="breadcrumbs-link">
                        <li><a style="color: black" href="index.html">At  Al Yasmeen, we turn rooms into extraordinary spaces, <br> handling every aspect from planning to completion.
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

                <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="service-style1">
                    <div class="service-inner">
                        <img src="{{ asset('user-assets/images/service/excellence.svg') }}" class="sericon">
                      <h4 class="service-title">Laboratory Solutions</h4>
                      <div class="services-count"></div>
                      <p class="service-description">We supply a range of products, including safety cabinets, ventilated equipment, modular lab furniture, and more.</p>
                      <div class="services-link">
                        <a class="text-btn" href="service-architecture.html">Read More</a>
                      </div>
                      <div class="service-inner-obj"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="service-style1">
                    <div class="service-inner1 service-inner ">
                      <i class="service-icon webextheme-icon-kitchen"></i>
                      <h4 class="service-title">Datacenter Solutions</h4>
                      <div class="services-count"></div>
                      <p class="service-description">Explore tailored data center solutions with construction and classification based on design and tier ratings.</p>
                      <div class="services-link">
                        <a class="text-btn" href="service-architecture.html">Read More</a>
                      </div>
                      <div class="service-inner-obj"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="service-style1">
                    <div class="service-inner2 service-inner">
                      <i class="service-icon webextheme-icon-architect"></i>
                      <h4 class="service-title">Audio-Video Solutions</h4>
                      <div class="services-count"></div>
                      <p class="service-description">We promise exceptional entertainment, from Dolby Atmos setups to home theater automation.</p>
                      <div class="services-link">
                        <a class="text-btn" href="service-architecture.html">Read More</a>
                      </div>
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
                      <div class="services-link">
                        <a class="text-btn" href="service-architecture.html">Read More</a>
                      </div>
                      <div class="service-inner-obj"></div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>


    <!-- Price Section Start -->
    {{-- <section class="service-inner-page-section-style1 pdt-110 pdb-80">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="service-style1">
                <div class="service-inner">
                  <i class="service-icon webextheme-icon-003-staircase"></i>
                  <h4 class="service-title">Facilities</h4>
                  <div class="services-count"></div>
                 <ul class="service-description">
                  <li>&#x2022; Planning / Feasibility analysis</li>
                  <li>&#x2022; Cost Analysis</li>
                  <li>&#x2022; Interior Design / Space Planning</li>
                  <li>&#x2022; Budget Preparation</li>
                  <li>&#x2022; Construction Documentation</li>
                  <li>&#x2022; Specification</li>
                 </ul>
                  <div class="services-link">
                    <a class="text-btn" href="service-architecture.html">Read More</a>
                  </div>
                  <div class="service-inner-obj"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="service-style1">
                <div class="service-inner">
                  <i class="service-icon webextheme-icon-armchair"></i>
                  <h4 class="service-title">Design & Build</h4>
                  <div class="services-count"></div>
                  <ul class="service-description">
                    <li>&#x2022; New Construction / Renovation / Remodeling
                    </li>
                    <li>&#x2022; Design and Engineering Team Coordination</li>
                    <li>&#x2022;Concept / Construction Documents / Specification</li>
                    <li>&#x2022; M.E.P services</li>
                    <li>&#x2022; Furniture Production and Sourcing</li>

                   </ul>
                  <div class="services-link">
                    <a class="text-btn" href="service-architecture.html">Read More</a>
                  </div>
                  <div class="service-inner-obj"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="service-style1">
                <div class="service-inner">
                  <i class="service-icon webextheme-icon-kitchen"></i>
                  <h4 class="service-title">Project Management</h4>
                  <div class="services-count"></div>
             <ul class="service-description">
                  <li>&#x2022; Value Engineering
                  </li>
                  <li>&#x2022; Construction Management Services</li>
                  <li>&#x2022; Interior Design / Space Planning</li>
                  <li>&#x2022; Cost Control</li>
                  <li>&#x2022; Construction Documentation and Specification</li>

                 </ul>
                  <div class="services-link">
                    <a class="text-btn" href="service-architecture.html">Read More</a>
                  </div>
                  <div class="service-inner-obj"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="service-style1">
                <div class="service-inner">
                  <i class="service-icon webextheme-icon-architect"></i>
                  <h4 class="service-title">Sectors We Serve</h4>
                  <div class="services-count"></div>
             <ul class="service-description">
                  <li>&#x2022; Hotel & Leisure
                  </li>
                  <li>&#x2022;Healthcare</li>
                  <li>&#x2022;Commercial Offices
                  </li>
                  <li>&#x2022; Retail Interiors
                  </li>
                  <li>&#x2022; F & B Interiors</li>
                  <li>&#x2022; Educational</li>
                  <li>&#x2022; Public Sector
                  </li>
                 </ul>
                  <div class="services-link">
                    <a class="text-btn" href="service-architecture.html">Read More</a>
                  </div>
                  <div class="service-inner-obj"></div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section> --}}
    <!-- Price Section End -->
    <!-- Call to Action Start -->
    <section>
      <div class="call-to-action">
        <div class="container">
          <div class="call-to-action-inner">
            <div class="call-to-action-left">
              <div class="call-to-action-icon">
                <span class="webexflaticon flaticon-email-1"></span>
              </div>
              <div class="call-to-action-content">
                <p class="call-to-action-sub-title">We are ready to help you</p>
                <h3 class="call-to-action-title">We are available to assist you.</h3>
              </div>
            </div>
            <div class="call-to-action-btn-box mrt-md-30">
              <a href="{{ '/contact' }}" class="animate-btn-style4">Contact With Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action End -->



  @endsection
