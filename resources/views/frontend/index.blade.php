@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header')

        <section class="banner banner-style-5" style="padding-bottom: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="banner-content">
                            <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                                Top Publishing Services
                                <br>
                                <span>
                                    in United States
                                </span>
                            </h1>
                            <p class="text-white">
                                Join forces with us for a professional open-access publication. Let us support your journal
                                by handling online peer review, production, and international distribution through Emerging
                                Publishers Insight.
                            </p>
                            <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                                <a href="{{ route('contact') }}" class="axil-btn btn-fill-white btn-large">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="banner-form">
                            <div class="contact-form-box shadow-box">
                                <h3>
                                    We Provide Quality To You!
                                </h3>
                                <form method="POST" action="{{ route('send-quote') }}" class="axil-contact-form">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6">
                                                <label>Your Name:</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="John Smith" required>
                                            </div>
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="">
                                                    <label>Your Phone:</label>
                                                    <input type="tel" class="form-control" name="contact"
                                                        placeholder="+123456789" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email:</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="example@mail.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message:</label>
                                        <textarea class="form-control" style="resize: none" name="message" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="axil-btn btn-borderd btn-fluid btn-primary"
                                            name="submit-btn">Get Free Consutation Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.partials.brands-area')

        @include('frontend.partials.testimonial')

        <!--=====================================-->
        <!--=      About  Quality Area Start    =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark pb--80 pb_lg--40 pb_md--20">
            <div class="container">
                <div class="section-heading heading-light-left mb--100">
                    <span class="subtitle">Hire Us</span>
                    <h2 class="title">WHY HIRE US?</h2>
                    <p class="opacity-50">
                        Nulla facilisi. Nullam in magna id dolor blandit rutrum eget vulputate augue sed eu leo eget risus
                        imperdiet.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">1</h3>
                            <h4 class="title">Quality</h4>
                            <p>
                                Independent peer reviewers evaluate books for quality, validity, and relevance. Numerous
                                journals in our portfolio are indexed in our organization.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">2</h3>
                            <h4 class="title">Ethics</h4>
                            <p>
                                Emerging Ghostwriter upholds the highest standards of ethical publication. We adhere to
                                ICMJE, COPE, and GPP-3 standards.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">3</h3>
                            <h4 class="title">
                                Reach
                            </h4>
                            <p>
                                One of the top publishers is Emerging Ghostwriter. Emerging Ghostwriter is one of the most
                                popular publishing platforms in the world.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">4</h3>
                            <h4 class="title">Expertise</h4>
                            <p>
                                Our publications offer contributors direct, timely communication with internal editorial
                                experts.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">5</h3>
                            <h4 class="title">Industry peers</h4>
                            <p>
                                Leading corporations publish their research through Emerging Ghostwriters.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/circle-1.png') }}"
                        alt="Circle">
                </li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/line-3.png') }}" alt="Circle">
                </li>
            </ul>
        </section>


        <!--=====================================-->
        <!--=        Counter Up Area Start      =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light">
                    {{-- <span class="subtitle"></span> --}}
                    <h2 class="title">The Best And Affordable</h2>
                    <p>
                        We provide a publishing service to assist your organization, helping you showcase the caliber and
                        scope of research conducted in your area.
                    </p>
                </div>
                <div class="row text-center" style="justify-content: center">
                    <div class="col-lg-4 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/media/icon/icon-7.png') }}" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="10">10</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of experience</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/media/icon/icon-8.png') }}" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="360">360</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Projects deliverd</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/media/icon/icon-9.png') }}" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="600">600</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Specialist</h6>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <!-- <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li> -->
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-42.png') }}"
                        alt="Circle"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/bubble-43.png') }}"
                        alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Would You Like To Publish Your Work?</h2>
                        <a class="axil-btn btn-large btn-fill-white" href="{{ route('contact') }}">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="{{ asset('assets/frontend/media/others/chat-group.png') }}"
                                alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800"
                                data-sal-delay="400">
                                <img class="paralax-image"
                                    src="{{ asset('assets/frontend/media/others/laptop-poses.png') }}" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800"
                                data-sal-delay="300">
                                <img class="paralax-image" src="{{ asset('assets/frontend/media/others/bill-pay.png') }}"
                                    alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-12.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/bubble-13.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-4"><img src="{{ asset('assets/frontend/media/others/bubble-14.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-5"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-6"><img src="{{ asset('assets/frontend/media/others/bubble-15.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-7"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}"
                        alt="Comments"></li>
            </ul>
        </section>


        @include('frontend.partials.footer')

        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index-1.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                        456-2790</a>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
