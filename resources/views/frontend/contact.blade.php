@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('page')




    <!-- Page Title Start -->
    <section class="page-title-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-area">
                <h2 class="page-title">Contact Us</h2>
                <ul class="breadcrumbs-link">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Contact Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Title End -->
      <section class="contact-section pdt-110 pdb-110" data-background="images/bg/abs-bg7.png" data-overlay-light="2" style="background-image: url(&quot;images/bg/abs-bg7.png&quot;);">
        <div class="container">
          <div class="row mrb-80">
            <div class="col-md-12 col-lg-12 col-xl-4">
              <h5 class="side-line-left text-primary-color mrt-0 mrb-5">Get In Touch</h5>
              <h2 style="font-size: 1.7rem;" class="faq-title mrb-30">For more information and inquiries, contact us</h2>
              <ul class="social-list list-lg list-primary-color list-flat mrb-lg-60 clearfix">
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-google-plus"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
              <div class="row">
                <div class="col-lg-6 col-xl-6">
                  <div class="contact-block d-flex mrb-30">
                    <div class="contact-icon">
                      <i class="base-icon-map"></i>
                    </div>
                    <div class="contact-details mrl-30">
                        <h5 class="icon-box-title mrb-10">Email Us</h5>
                        <p class="mrb-0"><a style="color: #555" href="mailto:sales@alyasmeen.com">sales@alyasmeen.com</a> </p>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                  <div class="contact-block d-flex mrb-30">
                    <div class="contact-icon">
                      <i class="base-icon-map"></i>
                    </div>
                    <div class="contact-details mrl-30">
                        <h5 class="icon-box-title mrb-10">Phone Number</h5>
                        <p class="mrb-0"> <a style="color: #555" href="tel:+123-456-7890"> +123-456-7890</a></p>
                      </div>
                  </div>
                </div>

                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6">
              <div class="contact-form">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group mrb-25">
                        <input type="text" placeholder="Name" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mrb-25">
                        <input type="text" placeholder="Phone" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mrb-25">
                        <input type="email" placeholder="Email" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mrb-25">
                        <textarea rows="5" placeholder="Messages" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="form-group">
                        <button type="submit" class="animate-btn-style3 btn-md mrb-lg-60">Submit Now</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-xl-6">
              <!-- Google Map Start -->
              <div class="mapouter fixed-height">
                <div class="gmap_canvas">
                  <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Graz&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                  <a href="https://www.whatismyip-address.com"></a>
                </div>
              </div>
              <!-- Google Map End -->
            </div>
          </div>
        </div>
      </section>


  @endsection
