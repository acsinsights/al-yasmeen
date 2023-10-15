    <!-- Footer Area Start -->
    <footer class="footer bg-cover" data-background="{{ asset('user-assets/images/bg/5.jpg') }}" data-overlay-light="98">
        <div class="footer-main-area">
            <div class="footer-section-obj1">
                <img src="{{ url('user-assets/images/objects/footer-obj1.png') }}" alt="" />
            </div>
            <div class="footer-section-obj2">
                <img src="{{ url('user-assets/images/objects/footer-obj2.png') }}" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="widget footer-widget mrr-60 mrr-md-0">
                            <div class="logo-box">
                                <a href="{{ '/' }}" aria-label="logo image">
                                  <img style="width:170px;" src="{{ asset('user-assets\images\al-yasmeen.svg') }}" width="132" height="72" alt="logo" />
                                </a>
                              </div>
                            <p class="mrb-30 mt-3">Seamlessly visualize quality intellectual ideal without collaboration
                                superior montes soon maecenas capita idea listically</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6">
                        <div class="widget footer-widget">
                            <h5 class="widget-title text-black mrb-30">Useful Links</h5>
                            <ul class="footer-widget-list">
                                <li><a href="{{ '/' }}">Home</a></li>
                                <li><a href="{{ '/services' }}">Services</a></li>
                                <li><a href="{{ '/projects' }}">Projects</a></li>
                                <li><a href=" {{ '/about' }}">About Us</a></li>
                            </ul>
                        </div>
                    </div>



                    <div class="col-xl-3 col-lg-6">
                        <div class="widget footer-widget mrr-30 mrr-md-0">
                            <h5 class="widget-title text-black mrb-30">Contact</h5>
                            <address class="mrb-0">
                                @auth
                                <p>{{ Auth::user()->company_address }}</p>
                                <div class="mrb-10">
                                    <a href="tel:+12345666789">
                                        <i class="fas fa-phone-alt mrr-10"></i>
                                        {{ Auth::user()->sales_no }}
                                    </a>
                                </div>
                                <div class="mrb-10">
                                    <a href="mailto:{{ Auth::user()->email }}"><i
                                            class="fas fa-envelope mrr-10"></i>{{ Auth::user()->email }}</a>
                                </div>
                                <div class="mrb-0">
                                    <a href="#"><i class="fas fa-globe mrr-10"></i>www.alyasmeen.com</a>
                                </div>
                                @endauth
                            </address>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="widget footer-widget mrr-60 mrr-md-0">
                            <h5 class="widget-title text-black mrb-30">Social Links</h5>
                            @auth
                            <ul class="social-list">
                                <li>
                                    <a href="{{ Auth::user()->facebook }}"><i class="fab fa-facebook-f"></i></a>
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
                    </div>
                </div>
                <div class="row pdt-30 footer-copyright-area">
                    <div class="col-xl-12">
                        <div class="text-center">
                            <span>Copyright ©2023 AL Yasmeen All Rights Reserved Developed by
                                <span>
                                    <a style="color: #ec2024;" href="https://publicize360.com/"
                                        target="_blank">Publicize 360</a>
                                    CMS by <a style="color: #04733b;" href="https://acsinsights.com/"
                                        target="_blank">ACS Insights</a>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
