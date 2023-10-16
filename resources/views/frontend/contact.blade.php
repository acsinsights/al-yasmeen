@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('page')




    <!-- Page Title Start -->
    <section class="page-title-section4 page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title">Contact Us</h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ '/' }}">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->
    <section class="contact-section pdt-110 pdb-110" data-background="images/bg/abs-bg7.png" data-overlay-light="2"
        style="background-image: url(&quot;images/bg/abs-bg7.png&quot;);">
        <div class="container">
            <div class="row mrb-80">
                <div class="col-md-12 col-lg-12 col-xl-4">
                    <h5 class="side-line-left text-primary-color mrt-0 mrb-5">Get In Touch</h5>
                    <h2 style="font-size: 1.7rem;" class="faq-title mrb-30">For more information and inquiries, contact us
                    </h2>
                    @auth
                        <ul class="social-list list-lg list-primary-color list-flat mrb-lg-60 clearfix">
                            <li>
                                <a href="{{ Auth::user()->facebook }}"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{ Auth::user()->linkedin }}"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="{{ Auth::user()->instagram }}"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    @endauth
                </div>
                <div class="col-md-12 col-lg-12 col-xl-8">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div style="background-color: #f0f9ff;" class="contact-block d-flex mrb-30">
                                <div class="contact-icon">
                                    <i class="base-icon-014-mail"></i>
                                </div>
                                <div style="background-color: #f0f9ff;" class="contact-details mrl-30">
                                    <h5 class="icon-box-title mrb-10">Email Us</h5>
                                    <p class="mrb-0">
                                        @auth
                                            <a style="color: #555"
                                                href="mailto:{{ Auth::user()->sales_mail }}">{{ Auth::user()->sales_mail }}
                                            </a>
                                        @endauth

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div style="background-color: #f0f9ff;" class="contact-block d-flex mrb-30">
                                <div class="contact-icon">
                                    <i class="base-icon-011-phone-1"></i>
                                </div>
                                <div class="contact-details mrl-30">
                                    <h5 class="icon-box-title mrb-10">Phone Number</h5>
                                    <p class="mrb-0">
                                        @auth
                                            <a style="color: #555" href="tel:{{ Auth::user()->sales_no }}">
                                                {{ Auth::user()->sales_no }}
                                            </a>
                                        @endauth
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    @include('admin.message')
                    <div class="contact-form">
                        <form action="/submit" name="contactForm" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <input style="background-color: #f0f9ff;!important" type="text" name="name"
                                            placeholder="Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <input style="background-color: #f0f9ff;!important" type="text" name="phone"
                                            placeholder="Phone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mrb-25">
                                        <input style="background-color: #f0f9ff;!important" type="email" name="email"
                                            placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mrb-25">
                                        <textarea style="background-color: #f0f9ff;!important" rows="5" name="message" placeholder="Messages"
                                            class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <button style="border: 1px solid black;" type="submit"
                                            class="animate-btn-style3 btn-md mrb-lg-60">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response"></p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <!-- Google Map Start -->
                    <div class="mapouter fixed-height">
                        <div class="gmap_canvas">
                            @auth
                            {!! Auth::user()->company_location  !!}
                            @endauth
                            <a href="https://www.whatismyip-address.com"></a>
                        </div>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </section>


@endsection
