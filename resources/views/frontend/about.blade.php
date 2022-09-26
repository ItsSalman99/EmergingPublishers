@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header2')

        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                            data-sal-delay="300">
                            <h1 class="title h2">
                                We help people achieve theircreative dreams!
                            </h1>
                            <p>
                                Our vision is to create a sanctuary for all indie authors—a place where they find everything
                                they
                                need to succeed in their journey as a writer. At mermaid publishers, we partner with writers
                                worldwide and help them get to the limelight they deserve.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4" style="margin-left: 200px;">
                        <img src="{{ asset('assets/frontend/media/hero-book2.png') }}" alt="">
                    </div>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/frontend/media/others/bubble-9.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('assets/frontend/media/others/bubble-22.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{ asset('assets/frontend/media/others/line-4.png') }}" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       About  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="{{ asset('assets/frontend/media/hero-book3.png') }}" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Who we are</span>
                                <h2 class="title">Our Vission</h2>
                                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit
                                    nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat
                                    orci lobortis.</p>
                                <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                <a href="#" class="axil-btn btn-fill-primary btn-large">Read More</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="10">10</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Years on the market</span>
                                </div>
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="1500">1500</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Projects delivered so far</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=       About  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="{{ asset('assets/frontend/media/books.png') }}" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Who we are</span>
                                <h2 class="title">Our Mission</h2>
                                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit
                                    nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat
                                    orci lobortis.</p>
                                <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                <a href="#" class="axil-btn btn-fill-primary btn-large">Read More</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="10">10</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Years on the market</span>
                                </div>
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="1500">1500</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Projects delivered so far</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=       Work Process Area Start     =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-light pb--70">
            <div class="container">
                <div class="section-heading mb--90">
                    <span class="subtitle">Process</span>
                    <h2 class="title">HOW OUR PUBLISHING COMPANY WORK</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque voluptas consequatur repellendus.
                        Veniam architecto, saepe consequatur maiores rerum animi recusandae quasi facilis quam consectetur
                        obcaecati ab voluptates fugit debitis ipsum!
                    </p>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-1.png') }}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step One</span>
                        <h3 class="title">Discover</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi.
                            Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.
                            Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000"
                    data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-2.png') }}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Two</span>
                        <h3 class="title">Schedule A FREE Consutation</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi.
                            Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.
                            Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-3.png') }}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Three</span>
                        <h3 class="title">Get Onboard With Us</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi.
                            Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.
                            Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000"
                    data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-4.png') }}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step four</span>
                        <h3 class="title">Getting Work Done</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi.
                            Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.
                            Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
            </div>
            <ul class="shape-group-17 list-unstyled">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-24.png') }}"
                        alt="Bubble"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-23.png') }}"
                        alt="Bubble"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/line-4.png') }}"
                        alt="Line"></li>
                <li class="shape shape-4"><img src="{{ asset('assets/frontend/media/others/line-5.png') }}"
                        alt="Line"></li>
                <li class="shape shape-5"><img src="{{ asset('assets/frontend/media/others/line-4.png') }}"
                        alt="Line"></li>
                <li class="shape shape-6"><img src="{{ asset('assets/frontend/media/others/line-5.png') }}"
                        alt="Line"></li>
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
                        <h2 class="title">Need a successful project?</h2>
                        <a href="{{ route('contact') }}" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
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

        @include('frontend.partials.faq')

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
